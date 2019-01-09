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
     *  @return ConversationQuestion
     */
    public function addQuestion(string $question, int $index): ConversationEntry
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationEntry', array(
            'fk_conversation'   =>  $this->ID(),
            'content'           =>  $question,
            'entrytype'         =>  'question',
            'idx'               =>  $index
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
     *  @return ConversationReponse
     */
    public function addResponse(string $response, int $index): ConversationEntry
    {
        // Create entity
        $entity = $this->backend()->sql()->create('ConversationEntry', array(
            'fk_conversation'   =>  $this->ID(),
            'content'           =>  $response,
            'entrytype'         =>  'response',
            'idx'               =>  $index
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
        // Variable to store conversation in
        $conversation = "Conversation (identifier '{$this->identifier()}'):" . PHP_EOL . PHP_EOL;

        // Get the entries and make sure that they are sorted
        $entries = $this->entries();
        $entries->sortByIndex();

        // Loop over entries
        foreach ($entries as $e)
        {
            // Format entry
            $entry = ($e->type() == 'question' ? '[Q] ' : '[A] ');
            
            // Add the text
            $entry .= $e->text();
        
            // Add to conversation 
            $conversation .= $entry . PHP_EOL;
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
        $conversation .= PHP_EOL . "Conversation has {$satisfied} satisfied ratings and {$dissatisfied} dissatisfied ratings" . PHP_EOL;

        // Return string value
        return $conversation;
    }
}