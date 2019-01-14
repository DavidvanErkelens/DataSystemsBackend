<?php

// Load external libraries
require_once(__DIR__ . '/vendor/autoload.php');

// Load config
require_once 'config.php';

// Make sure classes get included when necessary
$autoloader = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));

// Create backend with included config
$backend = new Backend($config);

// Load conversations from database
$conversations = $backend->conversations();

$conversations->orderByRuntime(true);

foreach ($conversations as $c)
{
    echo "{$c->identifier()}: {$c->runtime()}: ";
    if ($c->satisfied()) echo "SAT";
    else echo "NOT SAT";
    echo PHP_EOL;
}

// // Filter on satisfied conversations
// $conversations->setSatisfied(true);

// // Show all identifiers
// foreach ($conversations as $c) echo $c->identifier() . PHP_EOL;