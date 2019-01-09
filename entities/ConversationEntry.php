<?php
/**
 *  ConversationEntry.php
 * 
 *  Class that describes either a question or response in a conversation
 */

/**
 *  Class definition
 */
class ConversationEntry extends Entity
{
    /**
     *  The text of the entry
     *  @return string
     */
    public function text(): string
    {
        return $this->row->content;
    }

    /**
     *  The type of the entry
     *  @return string      question | response
     */
    public function type(): string
    {
        // Return row value
        return $this->row->entrytype;
    }

    /**
     *  The index of the entry
     *  @return int
     */
    public function index(): int
    {
        // Return row value
        return $this->row->idx;
    }
}