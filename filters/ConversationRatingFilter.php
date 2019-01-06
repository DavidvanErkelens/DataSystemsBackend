<?php
/**
 *  ConversationRatingFilter.php
 * 
 *  Filter for conversation ratings
 */

/**
 *  Class defintion
 */
class ConversationRatingFilter extends Filter
{
    /**
     *  Set value
     *  @param  bool
     *  @return ConversationRatingFilter
     */
    public function setRating(bool $value = true): ConversationRatingFilter
    {
        // @todo implement
        return $this;
    }

    /**
     *  Set the conversation for this filter
     *  @param Conversation
     */
    public function setConversation(Conversation $conv): ConversationRatingFilter
    {
        // Set it
        // @todo implement

        // allow chaining
        return $this;
    }
}