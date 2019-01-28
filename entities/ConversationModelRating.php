<?php
/**
 *  ConversationModelRating.php
 * 
 *  A rating given to a conversation
 */

/**
 *  Class defintion
 */
class ConversationModelRating extends Entity
{
    /**
     *  The score given
     *  @return  float
     */
    public function rating(): float
    {
        return floatval($this->row->score);
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
     *  Overwrite the value
     *  @param  float
     *  @return ConversationModelRating
     */
    public function setValue(float $value): ConversationModelRating
    {
        // Set value
        $this->row->score = $value;

        // Allow chaining
        return $this;
    }
}