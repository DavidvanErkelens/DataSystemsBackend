<?php
/**
 *  ConversationResponse.php
 * 
 *  A response in a conversation
 */

/**
 *  Class defintion
 */
class ConversationResponse extends ConversationEntry
{
    /**
     *  The type of the entry
     *  @return string
     */
    public function type(): string
    {
        return 'response';
    }

    /**
     *  The question beloning to this response
     *  @return ConversationQuestion
     */
    public function Question(): ConversationQuestion
    {
        return new ConversationQuestion();
    }

    /**
     *  The conversation this response belongs to
     *  @return Conversation
     */
    public function conversation(): Conversation
    {
        return new Conversation();
    }
}