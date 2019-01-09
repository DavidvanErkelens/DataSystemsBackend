<?php
/**
 *  ConversationEntryCollection.php
 * 
 *  Collection containing entries in a conversation
 */

/**
 *  Class definition
 */
class ConversationEntryCollection extends Collection
{
    /**
     *  Sort by index
     *  @param  bool
     *  @return ConversationCollection
     */
    public function sortByIndex($reverse = false): ConversationEntryCollection
    {
        // Call sort function
        usort($this->items, function ($value1, $value2) use ($reverse) {
            if ($reverse) return $value1 < $value2;
            return $value1 > $value2;
        });

        // Allow chaining
        return $this;
    }
}