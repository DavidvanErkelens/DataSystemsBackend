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
     *  @return ConversationCollection
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

    /**
     *  Order by runtime
     *  @param  boolean
     *  @return ConversationCollection
     */
    public function orderByRuntime(bool $desc = false): ConversationCollection
    {
        // Sort items
        usort($this->items, function($value1, $value2) use ($desc) {
            if ($desc) return $value1->runtime() < $value2->runtime();
            return $value1->runtime() > $value2->runtime();
        });

        // Allow chaining
        return $this;
    }
}