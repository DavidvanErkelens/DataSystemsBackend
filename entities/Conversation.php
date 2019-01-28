<?php
/**
 *  Conversation.php
 * 
 *  Class that contains one conversation and all its elements
 */

/**
 *  Class definition
 */
class Conversation extends Entity
{
    /**
     *  Get the identifier of this conversation
     *  @return string
     */
    public function identifier(): string
    {
        // Expose row value
        return $this->row->identifier;
    }

    /**
     *  Get entries in this conversation
     *  @param  ConversationEntryFilter
     *  @return ConversationEntryCollection
     */
    public function entries(ConversationEntryFilter $filter = null): ConversationEntryCollection
    {
        // Make sure filter exists
        $filter = ConversationEntryFilter::create($filter);
        
        // Add condition
        $filter->setConversation($this);

        // Return collection
        return $this->backend()->sql()->getCollection('ConversationEntry', $filter)->setBackend($this->backend());
    }

    /**
     *  Get the ratings this conversation
     *  @param  ConversationSatisfiedRatingFilter
     *  @return ConversationSatisfiedRatingCollection
     */
    public function satisfiedRatings(ConversationSatisfiedRatingFilter $filter = null): ConversationSatisfiedRatingCollection
    {
        // Create filter
        $filter = ConversationSatisfiedRatingFilter::create($filter);
        
        // Set conversation
        $filter->setConversation($this);

        // Return collection
        return $this->backend()->sql()->getCollection('ConversationSatisfiedRating', $filter)->setBackend($this->backend());
    }

    /**
     *  Add a question to this conversation
     *  @param  string  
     *  @param  int
     *  @param  int
     *  @return ConversationEntry
     */
    public function addUserEntry(string $text, int $index, int $turn): ConversationEntry
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationEntry', array(
            'fk_conversation'   =>  $this->ID(),
            'content'           =>  $text,
            'entrytype'         =>  'user',
            'idx'               =>  $index,
            'turnidx'           =>  $turn
        ));

        // Add backend reference
        $entity->setBackend($this->backend());

        // Done
        return $entity;
    }

    /**
     *  Add a response to this conversation
     *  @param  string  
     *  @param  int
     *  @param  int
     *  @return ConversationEntry
     */
    public function addSystemEntry(string $text, int $index, int $turn): ConversationEntry
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationEntry', array(
            'fk_conversation'   =>  $this->ID(),
            'content'           =>  $text,
            'entrytype'         =>  'system',
            'idx'               =>  $index,
            'turnidx'           =>  $turn
        ));

        // Add backend reference
        $entity->setBackend($this->backend());

        // Done
        return $entity;
    }

    /**
     *  Add satisfied rating to this conversation
     *  @param  boolean
     *  @return ConversationSatisfiedRating
     */
    public function addSatisfiedRating(bool $satisfied): ConversationSatisfiedRating
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationSatisfiedRating', array(
            'fk_conversation'   =>  $this->ID(),
            'value'             =>  $satisfied ? 'yes' : 'no'
        ));

        // Add backend reference
        $entity->setBackend($this->backend());

        // Done
        return $entity;
    }

    /**
     *  Add ground truth value
     *  @param  bool
     *  @return ConversationSatisfiedGroundTruthRating
     */
    public function addSatisfiedGroundTruthRating(bool $satisfied): ConversationSatisfiedGroundTruthRating
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationSatisfiedGroundTruthRating', array(
            'fk_conversation'   =>  $this->ID(),
            'value'             =>  $satisfied ? 'yes' : 'no'
        ));

        // Add backend reference
        $entity->setBackend($this->backend());

        // Done
        return $entity;
    }

    /**
     *  Was this conversation rated as satisfied?
     *  @return bool
     */
    public function satisfied(): bool
    {
        // Create filter
        $filter = new ConversationSatisfiedGroundTruthRatingFilter();

        // Set conversation
        $filter->setConversation($this);

        // Loop over collection
        foreach ($this->backend()->sql()->getCollection('ConversationSatisfiedGroundTruthRating', $filter) as $item) return $item->rating();

        // Nothing found - this should not happen
        return false;
    }

    /**
     *  Get string representation of this conversation
     *  @return string
     */
    public function __toString(): string
    {
        return $this->stringify();
    }

    /**
     *  Get string representation of Conversation
     *  @param  boolean   Use HTML line endings?
     *  @return string
     */
    public function stringify(bool $html = false): string
    {
        // Format line end
        $lineend = $html ? '<br>' : PHP_EOL;

        // Variable to store conversation in
        $conversation = "Conversation (identifier '{$this->identifier()}'):" . $lineend . $lineend;

        // Get the entries and make sure that they are sorted
        $entries = $this->entries();
        $entries->sortByIndex();

        // Loop over entries
        foreach ($entries as $e)
        {
            // Format entry
            $entry = ($e->type() == 'system' ? '[S' : '[U');
            
            // Add turn index
            $entry .= "-{$e->turnID()}] ";

            // Add the text
            $entry .= $e->text();
        
            // Add to conversation 
            $conversation .= $entry . $lineend;
        }

        // Keep track of satisfied / dissatisfied ratings
        $satisfied = 0; $dissatisfied = 0;

        // Loop over ratings
        foreach ($this->satisfiedRatings() as $r)
        {
            // Add scores
            if ($r->rating()) $satisfied++;
            else $dissatisfied++;
        }

        // Add statement regarding satisfaction rate
        $conversation .= $lineend . "Conversation has {$satisfied} satisfied rating(s) and {$dissatisfied} dissatisfied rating(s)" . $lineend;

        // What is the ground truth?
        if ($this->satisfied()) $conversation .= "This conversation was rated as satisfying (ground truth)" . $lineend;
        else if ($html)         $conversation .= "This conversation was rated as <b>not</b> satisfying (ground truth)" . $lineend;
        else                    $conversation .= "This conversation was rated as **not** satisfying (ground truth)" . $lineend;

        // Return string value
        return $conversation;
    }

    /**
     *  Helper function to format the conversation in the way the model expects
     *  @return  string
     */
    public function modelString(): string
    {
        // Empty string
        $conversation = '';

        // Get the entries and make sure that they are sorted
        $entries = $this->entries();
        $entries->sortByIndex();

        // Loop over entries
        foreach ($entries as $e)
        {
            // Format entry
            $entry = ($e->type() == 'system' ? '[SYSTEM] ' : '[USER] ');

            // Add the text
            $entry .= $e->text();
        
            // Add to conversation 
            $conversation .= $entry . PHP_EOL;
        }

        // Return string value
        return $conversation;
    }

    /**
     *  Get the runtime of this conversation
     *  @return float
     */
    public function runtime(): float
    {
        // If member set?
        if (strlen($this->row->runtime) == 0) return 0.0;

        // Return member
        return $this->row->runtime;
    }

    /**
     *  Set the runtime
     *  @param  float
     *  @return Conversation
     */
    public function setRuntime(float $time): Conversation
    {
        // Set member
        $this->row->runtime = $time;

        // Allow chaining
        return $this;
    }

    /**
     *  Get the time this conversation happened
     *  @return DateTime
     */
    public function dateTime(): DateTime
    {
        // Parse member
        return new DateTime($this->row->created);
    }

    /**
     *  Set the date and time for this conversation
     *  @param  DateTime
     *  @return Conversation
     */
    public function setDateTime(DateTime $time): Conversation
    {
        // Set member
        $this->row->created = $time->format('Y-m-d H:i:s');
        
        // Allow chaining
        return $this;
    }

    /**
     *  Get the average model rating
     *  @return  float
     */
    public function averageModelRating(): float
    {
        // Keep track of score and total
        $score = 0.0; $total = 0;

        // Loop over ratings
        foreach ($this->modelRatings() as $r)
        {
            // Increment counters
            $total += 1; $score += $r->rating();
        }

        // If we have no ratings, assume a maximum rating?
        if ($total == 0) return 1.0;

        // Return average value
        return $score / $total;
    }

    /**
     *  Get the first model rating
     *  @return ConversationModelRating
     */
    public function firstModelRating(): ?ConversationModelRating
    {
        // Return first match
        foreach ($this->modelRatings() as $rating) return $rating;

        // Nothing found
        return null;
    }

    /**
     *  Get the model ratings for this conversation
     *  @return ConversationModelRatingCollection
     */
    public function modelRatings(ConversationModelRatingFilter $filter = null): ConversationModelRatingCollection
    {
        // Make sure filter exists
        $filter = ConversationModelRatingFilter::create($filter);
        
        // Add condition
        $filter->setConversation($this);

        // Return collection
        return $this->backend()->sql()->getCollection('ConversationModelRating', $filter)->setBackend($this->backend());
    }

    /**
     *  Get the annotator ratings for this conversation
     *  @return ConversationAnnotatorRatingCollection
     */
    public function annotatorRatings(ConversationAnnotatorRatingFilter $filter = null): ConversationAnnotatorRatingCollection
    {
        // Make sure filter exists
        $filter = ConversationAnnotatorRatingFilter::create($filter);
        
        // Add condition
        $filter->setConversation($this);

        // Return collection
        return $this->backend()->sql()->getCollection('ConversationAnnotatorRating', $filter)->setBackend($this->backend());
    }

    /**
     *  Add an annotator rating to this conversation
     *  @param  int     rating
     *  @param  string  the reason
     *  @return ConversationAnnotatorRating
     */
    public function addAnnotatorRating(int $rating, string $reason): ConversationAnnotatorRating
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationAnnotatorRating', array(
            'fk_conversation'   =>  $this->ID(),
            'satisfaction'      =>  $rating,
            'reason'            =>  $reason
        ));

        // Add backend reference
        $entity->setBackend($this->backend());

        // Done
        return $entity;
    }

    /**
     *  Get the average annotator rating for this conversation
     *  @return float
     */
    public function averageAnnotatorRating(): float
    {
        // Get the annotator ratings
        $ratings = $this->annotatorRatings();

        // Store total
        $total = 0;

        // Calculate total
        foreach ($ratings as $r) $total += $r->rating();

        // Return average
        return $total / count($ratings);
    }

    /**
     *  Was this conversation rated as satisfied by the annotators?
     *  @return boolean
     */
    public function satisfiedAnnotators(): bool
    {
        // Larger than threshold?
        return $this->averageAnnotatorRating() > 2.5;
    }

    /**
     *  Run this conversation trough the model
     *  @param  boolean         should we also run if there already exists a rating?
     *  @return ConversationModelRating | null
     */
    public function runModelRating(bool $force = false): ?ConversationModelRating
    {
        // Do we already have a rating?
        if (!$force && count($this->modelRatings()) > 0) return null;

        // Create temporary file
        $file = tempnam(sys_get_temp_dir(), 'conv-');

        // We need an extension for the model
        $fileext = $file . '.txt';

        // Open file for writing
        $handle = fopen($fileext, "w");

        // Store conversation in the file
        fwrite($handle, $this->modelString());

        // Close file handle
        fclose($handle);

        // Store current directory
        $dir = __DIR__;

        // Format command to run
        $command = "python3 {$dir}/../bin/DSP_model/feature_eng.py 2 {$fileext}";

        // Store output
        ob_start();

        // Run script
        passthru($command);

        // Fetch output
        $stdoutput = ob_get_clean();

        // Remove temporary files
        unlink($file);
        unlink($fileext);

        // Remove CSV file generated by the model
        unlink(getcwd() . '/' . basename($file) . '.csv');

        // Decode output (JSON)
        $output = @json_decode($stdoutput, true);

        // Valid output?
        if ($output === null) 
        {
            // For debugging purposes, trigger error about failure
            trigger_error("Decoding of model JSON failed, output: {$stdoutput}");
            
            // Nothing to store
            return null;
        }

        // Calculate score
        $score = floatval($output['sat_score']) / 100.0;

        // Insert output into the database
        $entity = $this->backend()->sql()->create('ConversationModelRating', array(
            'fk_conversation'   =>  $this->ID(),
            'score'             =>  $score
        ));

        // Add backend reference
        $entity->setBackend($this->backend());

        // Done
        return $entity;
    }
}