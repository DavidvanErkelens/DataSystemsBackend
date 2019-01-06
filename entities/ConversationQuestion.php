<?php
/**
 *  ConversationQuestion.php
 * 
 *  A question in a conversation
 */

/**
 *  Class defintion
 */
class ConversationQuestion extends ConversationEntry
{
    /**
     *  The type of the entry
     *  @return string
     */
    public function type(): string
    {
        return 'question';
    }

    /**
     *  The response beloning to this question
     *  @return ConversationResponse
     */
    public function response(): ConversationResponse
    {
        return new ConversationResponse();
    }

    /**
     *  The conversation this question belongs to
     *  @return Conversation
     */
    public function conversation(): Conversation
    {
        return new Conversation();
    }
}