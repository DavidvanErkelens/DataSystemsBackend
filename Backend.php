<?php
/**
 *  Backend.php
 * 
 *  Class that contains the backend for the Data Systems Project
 */

/**
 *  Class definition
 */
class Backend
{
    /**
     *  The framework for running SQL queries
     *  @var SqlFramework
     */
    private $sql;

    /**
     *  Constructor
     *  @param SqlFramework\ConnectionSettings
     */
    public function __construct(SqlFramework\ConnectionSettings $settings)
    {
        // Create SQL framework
        $this->sql = new SqlFramework\SqlFramework($settings, __DIR__ . '/tables');
    }

    /**
     *  Expose the data model
     *  @return SqlFramework
     */
    public function sql(): SqlFramework\SqlFramework
    {
        return $this->sql;
    }

    /**
     *  Get a certain conversation
     *  @param  ID
     *  @return Conversation
     */
    public function conversation(int $id): ?Conversation
    {
        // Get conversation
        $conv = $this->sql->getEntity('Conversation', $id);

        // Do we have a value
        if (is_null($conv)) return null;

        // Return item
        return $conv->setBackend($this);
    }

    /**
     *  Get a conversation by its identifier
     *  @param  string
     *  @return Conversation | null
     */
    public function conversationByIdentifier(string $identifier): ?Conversation
    {
        // Create filter
        $filter = new ConversationFilter();

        // Set property
        $filter->setIdentifier($identifier);

        // Loop over results
        foreach ($this->conversations($filter) as $conversation) return $conversation;

        // Nothing found
        return null;
    }

    /**
     *  Get a certain question
     *  @param  ID
     *  @return ConversationEntry
     */
    public function entry(int $id): ?ConversationEntry
    {
        return $this->sql->getEntity('ConversationEntry', $id)->setBackend($this);
    }

    /**
     *  Get conversations
     *  @param  ConversationFilter
     *  @return ConversationCollection
     */
    public function conversations(ConversationFilter $filter = null)
    {
        return $this->sql->getCollection('Conversation', $filter)->setBackend($this);
    }

    /**
     *  Create a new conversation
     *  @param  string  
     *  @param  string
     *  @return Conversation
     */
    public function newConversation(string $identifier, string $source): Conversation
    {
        // Create entity
        $entity =  $this->sql->create('Conversation', array(
            'identifier'    =>  $identifier,
            'source'        =>  $source
        ));

        // Set backend
        $entity->setBackend($this);

        // Return
        return $entity;
    }

    /**
     *  Import zip file containing conversations
     *  @param  string      location of zip file
     *  @return int         number of added conversations
     */
    public function importZip(string $location): int
    {
        // Does this file exist?
        if (!file_exists($location)) return 0;

        // Create zip archive
        $zipfile = new ZipArchive;

        // Open file
        $result = $zipfile->open($location);

        // Valid resource?
        if ($result !== TRUE) return 0;
        
        // create location for unzip 
        $tempdir = tempnam(sys_get_temp_dir(), 'unzip-');
        unlink($tempdir);
        mkdir($tempdir);

        // Extract zip
        $zipfile->extractTo($tempdir);
        
        // Close resource
        $zipfile->close();

        // Add everything to the database
        $addcount = $this->importFolder($tempdir);

        // Remove directory
        $this->removeDir($tempdir);

        // Return score
        return $addcount;
    }

    /**
     *  Helper function to remove a directory
     *  @param  string   location
     */
    private function removeDir($location)
    {
        // Create directory iterator
        foreach (new DirectoryIterator($location) as $dir)
        {
            // Skip dots
            if ($dir->isDot()) continue;

            // Directory? Remove it.
            if ($dir->isDir()) $this->removeDir($dir->getPathname());

            // Unlink file
            if ($dir->isFile()) unlink($dir->getPathname());
        }

        // Remove the actual directory
        rmdir($location);
    }

    /**
     *  Import conversations from folder
     *  @param  string      folder location
     *  @return int         number of added conversations   
     */
    public function importFolder(string $location): int
    {
        // Remember number of imports
        $imports = 0;

        // We have two types of folders
        foreach (array('sat', 'dsat') as $type)
        {
            // Format location
            $typedir = "{$location}/{$type}";

            // Iterate over directory
            foreach (new DirectoryIterator($typedir) as $dir)
            {
                // Skip files and .'s
                if (!$dir->isDir()) continue;
                if ($dir->isDot()) continue;
    
                // Get conversation name
                $conversationname = $dir->getFilename();

                // Format file names
                $logfile = $dir->getPathname() . '/log.json';
                $labelfile = $dir->getPathname() . '/label.json';

                // Do the files exist?
                if (!file_exists($logfile)) continue;
                if (!file_exists($labelfile)) continue;

                // Get log and label data
                $log = @json_decode(@file_get_contents($logfile), true);
                $label = @json_decode(@file_get_contents($labelfile), true);
                
                // Can we insert?
                if (!$log || !$label) continue;

                // Insert and increment counter
                if ($this->importConversation($conversationname, $log, $label, $type == 'sat')) $imports ++;
            }
        }
        
        // Return the number of imports
        return $imports;        
    }

    /**
     *  Import a conversation
     *  @param  string      name of the conversation
     *  @param  array       contents of log.json file
     *  @param  array       contents of label.json file
     *  @param  boolean     was is satisfying?
     *  @return boolean     successfully added?
     */
    public function importConversation(string $name, array $log, array $label, bool $sat): bool
    {
        // Get the turns from the log
        $turns = $log['turns'];

        // Keep track of the index
        $idx = 0;

        // Create new conversation
        $conv = $this->newConversation($name, 'import');

        // Remember the running time
        $time = 0.0;

        // Loop over the turns
        foreach ($turns as $turn)
        {
            // Get input (user data)
            $input = $turn['input'];
            $timein = $input['end-time'];

            // Get the output (system data)
            $output = $turn['output'];
            $timeout = $output['end-time'];

            // Remember maximum end time to store
            $time = max($time, $timein, $timeout);

            // Get the turn index
            $turnidx = (int) $turn['turn-index'];
            
            // Get system message
            $system = $output['transcript'];

            // Get all user messages
            $responses = $input['live']['asr-hyps'];
            
            // Sort by rating
            usort($responses, function($one, $two) {
                return $one['score'] < $two['score'];
            });

            // Add to conversation
            $conv->addSystemEntry($system, $idx++, $turnidx);
            $conv->addUserEntry($responses[0]['asr-hyp'], $idx++, $turnidx);
        }

        // Set the run time
        $conv->setRuntime($time);

        // Get the label data
        $turns = $label['turns'];

        // Loop over label turns
        foreach ($turns as $turn)
        {
            // Format turn index
            $turnidx = (int) $turn['turn-index'];

            // Get the act
            $act = count($turn['semantics']['json']) > 0 ? $turn['semantics']['json'][0]['act'] : null;

            // Get the cam
            $cam = $turn['semantics']['cam'];

            // Get entries to add to
            $filter = new ConversationEntryFilter();

            // Set properties
            $filter->setTurnIndex($turnidx);

            // Loop
            foreach ($conv->entries($filter) as $entry)
            {
                // Add act and cam properties
                if ($act) $entry->setAct($act);
                if ($cam) $entry->setCam($cam);
            }
        }

        // Add ground truth rating
        $conv->addSatisfiedGroundTruthRating($sat);

        // Fine?
        return true;
    }
}
