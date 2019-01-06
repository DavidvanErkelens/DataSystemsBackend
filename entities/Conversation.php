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
}