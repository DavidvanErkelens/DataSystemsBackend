<?php
/**
 *  ConversationFilter.php
 * 
 *  Filter for conversations
 */

/**
 *  Class defintion
 */
class ConversationFilter extends Filter
{
    /**
     *  Set the identifier
     *  @param  string
     *  @return ConversationFilter
     */
    public function setIdentifier(string $identifier): ConversationFilter
    {
        // Set the condition
        $this->addCondition('identifier = ?', array($identifier));

        // Allow chaining
        return $this;
    }
}