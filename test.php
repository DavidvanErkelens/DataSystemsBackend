<?php

// Load external libraries
require_once(__DIR__ . '/vendor/autoload.php');

// Load config
require_once 'config.php';

// Make sure classes get included when necessary
$autoloader = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));

// // Create backend with included config
$backend = new Backend($config);

// foreach ($backend->conversations() as $c)
// {
//     // Get random day
//     $day = rand(1, 31);

//     // Format string
//     $date = "2018-12-{$day} 00:00:00";

//     $datetime = new DateTime($date);

//     $c->setDateTime($datetime);
// }

$convs = array(
    "voip-dda7c88c6e-20130323_053612",
    "voip-2f209793f4-20130326_005104",
    "voip-7e07d8f0f5-20130328_190850",
    "voip-5749b16764-20130328_150400",
    "voip-155e939ebc-20130327_203543",
    "voip-10beae627f-20130401_164239"
    );

foreach ($convs as $c) echo $backend->conversationByIdentifier($c)->ID() . ', ';


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