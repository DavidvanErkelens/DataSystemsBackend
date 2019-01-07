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
     *  @return ConversationResponse | null
     */
    public function response(): ?ConversationResponse
    {
        // Do we have an ID?
        if ($this->row->fk_response > 0) return $this->backend()->response($this->row->fk_response);  

        // No response
        return null;
    }

    /**
     *  Set the response for this question
     *  @param  ConversationResponse
     *  @return ConversationQuestion
     */
    public function setReponse(ConversationResponse $response)
    {
        // Store response
        $this->row->fk_response = $response->ID();

        // Done
        return $this;
    }

    /**
     *  The conversation this question belongs to
     *  @return Conversation
     */
    public function conversation(): ?Conversation
    {
        return $this->backend()->conversation($this->row->fk_conversation);
    }
}