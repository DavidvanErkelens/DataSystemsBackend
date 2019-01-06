<?php
/**
 *  ConversationEntry.php
 * 
 *  Class that describes either a question or response in a conversation
 */

/**
 *  Class definition
 */
abstract class ConversationEntry extends Entity
{
    /**
     *  The text of the entry
     *  @return string
     */
    public function text(): string
    {
        return 'abc';
    }

    /**
     *  The type of the entry
     *  @return string      question | answer
     */
    abstract public function type(): string;
}