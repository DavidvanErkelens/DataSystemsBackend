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
     *  @return string      system | user
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

    /**
     *  The turn id of the entry
     *  @return int
     */
    public function turnID(): int
    {
        // return row value
        return $this->row->turnidx;
    }

    /**
     *  Get the act value for this entry
     *  @return string
     */
    public function act(): string
    {
        // Make sure string is returned
        if (strlen($this->row->act) > 0) return $this->row->act;
        return '';
    }

    /**
     *  Set the 'act' value for this entry
     *  @param  string
     *  @return ConversationEntry
     */
    public function setAct(string $value): ConversationEntry
    {
        // Store member
        $this->row->act = $value;

        // Allow chaining
        return $this;
    }
    /**
     *  Get the cam value for this entry
     *  @return string
     */
    public function cam(): string
    {
        // Make sure string is returned
        if (strlen($this->row->cam) > 0) return $this->row->cam;
        return '';
    }

    /**
     *  Set the 'cam' value for this entry
     *  @param  string
     *  @return ConversationEntry
     */
    public function setCam(string $value): ConversationEntry
    {
        // Store member
        $this->row->cam = $value;

        // Allow chaining
        return $this;
    }
}