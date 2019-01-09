<?php
/**
 *  ConversationRating.php
 * 
 *  A rating given to a conversation
 */

/**
 *  Class defintion
 */
class ConversationSatisfiedGroundTruthRating extends Entity
{
    /**
     *  The rating given
     *  @return  boolean
     */
    public function rating(): bool
    {
        return $this->row->value == 'yes';
    }

    /**
     *  The conversation this rating belongs to
     *  @return Conversation
     */
    public function conversation(): Conversation
    {
        return $this->backend()->conversation($this->row->fk_conversation);
    }
}