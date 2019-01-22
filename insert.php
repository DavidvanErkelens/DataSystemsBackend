<?php
require_once 'vendor/autoload.php';
require_once 'config.php';
$load = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));

$backend = new Backend($config);

// $backend->newConversation('testconversation');

// $conversation = $backend->conversationByIdentifier('testconversation');
// $conv = $backend->conversationByIdentifier('voip-03c2655d43-20130327_194616');
// echo $conv;


// $conversation->addSatisfiedRating(true);
// $conversation->addSatisfiedRating(true);
// $conversation->addSatisfiedRating(false);

// return;


$types = array('sat', 'dsat');
$basedir = '/home/david/Desktop/Troep/data systems/UserSat';

foreach ($types as $type)
{
    $maindir = "{$basedir}/dstc/{$type}";
    // $storedir = "{$basedir}/conversations/{$type}";
    
    foreach (new DirectoryIterator($maindir) as $dir)
    {
        echo 'Inserting ' . $dir . PHP_EOL;
        // if (!is_dir($dir)) continue;
        if (!$dir->isDir()) continue;
        if ($dir->isDot()) continue;
    
        $filename = $dir->getFilename();
    
        $file = $dir->getPathname() . '/log.json';

        $data = json_decode(file_get_contents($file), true);
        
        $turns = $data['turns'];

        $idx = 0;

        // $conv = $backend->newConversation($filename, 'restaurant');

        $conv = $backend->conversationByIdentifier($filename);

        $time = 0.0;

        foreach ($turns as $turn)
        {
            $input = $turn['input'];
            $timein = $input['end-time'];

            $output = $turn['output'];
            $timeout = $output['end-time'];

            $time = max($time, $timein, $timeout);

            
            
            // $turnidx = (int) $turn['turn-index'];
            
            // $system = $output['transcript'];

            // $responses = $input['live']['asr-hyps'];
            // // var_dump($responses);

            // usort($responses, function($one, $two) {
            //     return $one['score'] < $two['score'];
            // });

            // $conv->addSystemEntry($system, $idx++, $turnidx);
            // $conv->addUserEntry($responses[0]['asr-hyp'], $idx++, $turnidx);

        }

        $conv->setRuntime($time);

        // return;
        
        // $labelfile = $dir->getPathname() . '/label.json';

        // $data = json_decode(file_get_contents($labelfile), true);

        // $turns = $data['turns'];

        // foreach ($turns as $turn)
        // {
        //     $turnidx = (int) $turn['turn-index'];

        //     // echo $turnidx . PHP_EOL;
            
        //     // var_dump(array_keys($turn));

        //     $act = count($turn['semantics']['json']) > 0 ? $turn['semantics']['json'][0]['act'] : null;

        //     $cam = $turn['semantics']['cam'];

        //     // Get entries to add to
        //     $filter = new ConversationEntryFilter();

        //     // Set properties
        //     $filter->setTurnIndex($turnidx);

        //     // Loop
        //     foreach ($conv->entries($filter) as $entry)
        //     {
        //         // echo $entry->ID() . PHP_EOL;
        //         if ($act) $entry->setAct($act);
        //         if ($cam) $entry->setCam($cam);
        //     }

        //     // break;

        // }

        // $conv->addSatisfiedGroundTruthRating($type == 'sat');

    }
}