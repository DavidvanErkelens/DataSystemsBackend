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
     */
    public function setConversation(Conversation $conv): ConversationEntryFilter
    {
        // Set it
        // @todo implement

        // allow chaining
        return $this;
    }
}