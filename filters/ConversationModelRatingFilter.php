<?php
/**
 *  ConversationModelRatingFilter.php
 * 
 *  Filter for conversation ratings
 */

/**
 *  Class defintion
 */
class ConversationModelRatingFilter extends Filter
{
    /**
     *  Set the conversation for this filter
     *  @param Conversation
     */
    public function setConversation(Conversation $conv): ConversationModelRatingFilter
    {
        // Set it
        $this->addCondition('fk_conversation = ?', array($conv->ID()));

        // allow chaining
        return $this;
    }
}