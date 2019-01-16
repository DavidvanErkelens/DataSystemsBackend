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
     *  Pass the conversation through the model
     *  @return string
     */
    public function model()
    {
        // Format input for Python script
        $input = "ABCDEF";

        // Store current directory
        $dir = __DIR__;

        // Format command to run
        $command = "python3 {$dir}/../bin/model.py \"{$input}\"";

        // Store output
        ob_start();

        // Run script
        passthru($command);

        // Fetch output
        $output = ob_get_clean();

        // Decode output (JSON)
        $output = json_decode($output, true);

        // Return the result of the model run
        return $output['result'];
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
            if ($r->rating()) $satisfied++;
            else $dissatisfied++;
        }

        // Add statement regarding satisfaction rate
        $conversation .= $lineend . "Conversation has {$satisfied} satisfied ratings and {$dissatisfied} dissatisfied ratings" . $lineend;

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
}