<?php

// Load external libraries
require_once(__DIR__ . '/vendor/autoload.php');

// Load config
require_once 'config.php';

// Make sure classes get included when necessary
$autoloader = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));

// // Create backend with included config
$backend = new Backend($config);

foreach ($backend->conversations() as $c)
{
    // Get random day
    $day = rand(1, 31);

    // Format string
    $date = "2018-12-{$day} 00:00:00";

    $datetime = new DateTime($date);

    $c->setDateTime($datetime);
}

// $conv = $backend->conversation(456);

// echo $conv->satisfiedAnnotators();

// foreach ($backend->conversations() as $c) 
// {
//     echo $c->ID() . '    ';
//     $c->runModelRating();
// }

// $conv = $backend->conversation(790);

// $conv->runModelRating(true);

// $backend->importZip('/home/david/Desktop/satmeuk1.zip');

// Load conversations from database
// $conversations = $backend->conversations();

// $conversations->orderByRuntime();

// $countsat = 0;
// $totalsat = 0;
// $countdsat = 0;
// $totaldsat = 0;


// foreach ($conversations as $c)
// {
//     if ($c->satisfied()) 
//     {
//         $countsat += 1;
//         $totalsat += $c->runtime();
//         echo "\033[1;32m";

//     }
//     else 
//     {
//         $countdsat += 1;
//         $totaldsat += $c->runtime();
//         echo "\033[1;31m";
//     }
    
//     // echo "{$c->identifier()}: {$c->runtime()}: ";
//     echo $c->averageModelRating();
//     echo "\033[0m";
//     echo PHP_EOL;
// }

// echo "Average running time for SAT: " . ($totalsat / $countsat) . PHP_EOL;
// echo "Average running time for dSAT: " . ($totaldsat / $countdsat) . PHP_EOL;

// // Filter on satisfied conversations
// $conversations->setSatisfied(true);

// // Show all identifiers
// foreach ($conversations as $c) echo $c->identifier() . PHP_EOL;