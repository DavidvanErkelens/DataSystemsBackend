<?php
/**
 *  Backend.php
 * 
 *  Class that contains the backend for the Data Systems Project
 */

/**
 *  Class definition
 */
class Backend
{
    /**
     *  Get conversations
     *  @param  ConversationFilter
     *  @return ConversationCollection
     */
    public function conversations(ConversationFilter $filter = null)
    {
        return new ConversationCollection($filter);
    }
}
