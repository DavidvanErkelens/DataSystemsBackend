<?php
/**
 *  ConversationRating.php
 * 
 *  A rating given to a conversation
 */

/**
 *  Class defintion
 */
class ConversationRating extends Entity
{
    /**
     *  The rating given
     *  @return  boolean
     */
    public function rating(): bool
    {
        return true;
    }

    /**
     *  The conversation this rating belongs to
     *  @return Conversation
     */
    public function conversation(): Conversation
    {
        return new Conversation();
    }
}