<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
$load = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));

// $sql = new SqlFramework\SqlFramework($config, __DIR__ . '/tables');

// $sql->createTables();

$backend = new Backend($config);

// $backend->newConversation('testconversation');

$conversation = $backend->conversationByIdentifier('testconversation');

echo $conversation;

// $conversation->addSatisfiedRating(true);
// $conversation->addSatisfiedRating(true);
// $conversation->addSatisfiedRating(false);

