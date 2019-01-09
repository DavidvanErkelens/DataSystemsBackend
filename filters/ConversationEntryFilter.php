<?php
/**
 *  ConversationEntryFilter.php
 * 
 *  Filter for conversation entries
 */

/**
 *  Class defintion
 */
class ConversationEntryFilter extends Filter
{
    /**
     *  Set the conversation for this filter
     *  @param Conversation
     *  @return ConversationEntryFilter
     */
    public function setConversation(Conversation $conv): ConversationEntryFilter
    {
        // Set it
        $this->addCondition('fk_conversation = ?', array($conv->ID()));

        // allow chaining
        return $this;
    }

    /**
     *  Set the turn index of the entry
     *  @param  int
     *  @return ConversationEntryFilter
     */
    public function setTurnIndex(int $index): ConversationEntryFilter
    {
        // Set condition
        $this->addCondition('turnidx = ?', array($index));

        // Allow chaining
        return $this;
    }

    /**
     *  Set the type of the entry
     *  @param  string
     *  @return ConversationEntryFilter
     */
    public function setType(string $type): ConversationEntryFilter
    {
        // Set condition
        $this->addCondition('entrytype = ?', array($type));

        // Allow chaining
        return $this;
    }
}