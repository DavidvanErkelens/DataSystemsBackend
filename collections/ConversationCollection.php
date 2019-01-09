<?php
/**
 *  ConversationCollection.php
 * 
 *  Collection of conversations in the database
 */

/**
 *  Class definition
 */
class ConversationCollection extends Collection
{
    /**
     *  Was is satisfied?
     *  @param  boolean
     *  @return ConversationFilter
     */
    public function setSatisfied(bool $value): ConversationCollection
    {
        // Filter on satisfied items
        $this->items = array_filter($this->items, function ($item) use ($value) {
            return $item->satisfied() == $value;
        });

        // allow chaining
        return $this;
    }
}