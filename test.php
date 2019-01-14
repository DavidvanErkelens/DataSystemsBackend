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

$conversations->orderByRuntime();

$countsat = 0;
$totalsat = 0;
$countdsat = 0;
$totaldsat = 0;


foreach ($conversations as $c)
{
    if ($c->satisfied()) 
    {
        $countsat += 1;
        $totalsat += $c->runtime();
        echo "\033[1;32m";

    }
    else 
    {
        $countdsat += 1;
        $totaldsat += $c->runtime();
        echo "\033[1;31m";
    }
    
    echo "{$c->identifier()}: {$c->runtime()}: ";
    if ($c->satisfied()) echo "SAT";
    else echo "NOT SAT";
    echo "\033[0m";
    echo PHP_EOL;
}

echo "Average running time for SAT: " . ($totalsat / $countsat) . PHP_EOL;
echo "Average running time for dSAT: " . ($totaldsat / $countdsat) . PHP_EOL;

// // Filter on satisfied conversations
// $conversations->setSatisfied(true);

// // Show all identifiers
// foreach ($conversations as $c) echo $c->identifier() . PHP_EOL;