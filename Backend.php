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
        $this->sql = new SqlFramework($settings, __DIR__ . '/tables');
    }

    /**
     *  Expose the data model
     *  @return SqlFramework
     */
    public function sql(): SqlFramework
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
        return $this->sql->getEntity('Conversation', $id);
    }

    /**
     *  Get a certain question
     *  @param  ID
     *  @return ConversationQuestion
     */
    public function question(int $id): ?ConversationQuestion
    {
        return $this->sql->getEntity('ConversationQuestion', $id);
    }

    /**
     *  Get a certain response
     *  @param  ID
     *  @return ConversationResponse
     */
    public function response(int $id): ?ConversationResponse
    {
        return $this->sql->getEntity('ConversationResponse', $id);
    }

    /**
     *  Get conversations
     *  @param  ConversationFilter
     *  @return ConversationCollection
     */
    public function conversations(ConversationFilter $filter = null)
    {
        return new ConversationCollection($filter);
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
