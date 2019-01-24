<?php
/**
 *  ConversationAnnotatorRatingFilter.php
 * 
 *  Filter for conversation ratings
 */

/**
 *  Class defintion
 */
class ConversationAnnotatorRatingFilter extends Filter
{
    /**
     *  Set the conversation for this filter
     *  @param Conversation
     */
    public function setConversation(Conversation $conv): ConversationAnnotatorRatingFilter
    {
        // Set it
        $this->addCondition('fk_conversation = ?', array($conv->ID()));

        // allow chaining
        return $this;
    }
}