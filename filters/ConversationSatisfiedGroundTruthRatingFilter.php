<?php
/**
 *  ConversationRatingFilter.php
 * 
 *  Filter for conversation ratings
 */

/**
 *  Class defintion
 */
class ConversationSatisfiedGroundTruthRatingFilter extends Filter
{
    /**
     *  Set value
     *  @param  bool
     *  @return ConversationRatingFilter
     */
    public function setRating(bool $value = true): ConversationSatisfiedGroundTruthRatingFilter
    {
        // Set condition
        $this->addCondition('value = ?', array($value ? 'yes' : 'no'));

        // allow chaining
        return $this;
    }

    /**
     *  Set the conversation for this filter
     *  @param Conversation
     */
    public function setConversation(Conversation $conv): ConversationSatisfiedGroundTruthRatingFilter
    {
        // Set it
        $this->addCondition('fk_conversation = ?', array($conv->ID()));

        // allow chaining
        return $this;
    }
}