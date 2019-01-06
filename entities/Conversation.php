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
     *  Get entries in this conversation
     *  @param  ConversationEntryFilter
     *  @return ConversationEntryCollection
     */
    public function entries(ConversationEntryFilter $filter = null): ConversationEntryCollection
    {
        // Make sure filter exists
        $filter = ConversationEntryFilter::create($filter)->setConversation($this);

        // Return collection
        return new ConversationEntryCollection($filter);
    }

    /**
     *  Get the ratings this conversation
     *  @param  ConversationRatingFilter
     *  @return ConversationRatingCollection
     */
    public function ratings(ConversationRatingFilter $filter = null): ConversationRatingCollection
    {
        // Create filter
        $filter = ConversationRatingFilter::create($filter)->setConversation($this);

        // Return collection
        return new ConversationRatingCollection($filter);
    }

    /**
     *  Pass the conversation through the model
     *  @return ???
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
}