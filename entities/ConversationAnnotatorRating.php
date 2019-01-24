<?php
/**
 *  ConversationAnnotatorRating.php
 * 
 *  A rating given to a conversation
 */

/**
 *  Class defintion
 */
class ConversationAnnotatorRating extends Entity
{
    /**
     *  The score given
     *  @return  int
     */
    public function rating(): int
    {
        return intval($this->row->satisfaction);
    }

    /**
     *  The conversation this rating belongs to
     *  @return Conversation
     */
    public function conversation(): Conversation
    {
        return $this->backend()->conversation($this->row->fk_conversation);
    }

    /**
     *  The reason for this rating
     *  @return string
     */
    public function reason(): string
    {
        // Expose member
        return $this->row->reason;
    }
}