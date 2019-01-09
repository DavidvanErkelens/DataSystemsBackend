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
     *  The framework for running SQL queries
     *  @var SqlFramework
     */
    private $sql;

    /**
     *  Constructor
     *  @param SqlFramework\ConnectionSettings
     */
    public function __construct(SqlFramework\ConnectionSettings $settings)
    {
        // Create SQL framework
        $this->sql = new SqlFramework\SqlFramework($settings, __DIR__ . '/tables');
    }

    /**
     *  Expose the data model
     *  @return SqlFramework
     */
    public function sql(): SqlFramework\SqlFramework
    {
        return $this->sql;
    }

    /**
     *  Get a certain conversation
     *  @param  ID
     *  @return Conversation
     */
    public function conversation(int $id): ?Conversation
    {
        return $this->sql->getEntity('Conversation', $id)->setBackend($this);
    }

    /**
     *  Get a conversation by its identifier
     *  @param  string
     *  @return Conversation | null
     */
    public function conversationByIdentifier(string $identifier): ?Conversation
    {
        // Create filter
        $filter = new ConversationFilter();

        // Set property
        $filter->setIdentifier($identifier);

        // Loop over results
        foreach ($this->conversations($filter) as $conversation) return $conversation;

        // Nothing found
        return null;
    }

    /**
     *  Get a certain question
     *  @param  ID
     *  @return ConversationEntry
     */
    public function entry(int $id): ?ConversationEntry
    {
        return $this->sql->getEntity('ConversationEntry', $id)->setBackend($this);
    }

    /**
     *  Get conversations
     *  @param  ConversationFilter
     *  @return ConversationCollection
     */
    public function conversations(ConversationFilter $filter = null)
    {
        return $this->sql->getCollection('Conversation', $filter)->setBackend($this);
    }

    /**
     *  Create a new conversation
     *  @param  string  
     *  @return Conversation
     */
    public function newConversation(string $identifier): Conversation
    {
        // Create entity
        $entity =  $this->sql->create('Conversation', array(
            'identifier'    =>  $identifier
        ));

        // Set backend
        $entity->setBackend($this);

        // Return
        return $entity;
    }
}
