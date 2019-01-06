<?php

require_once(__DIR__ . '/vendor/autoload.php');

$autolaoder = new AutoIncluder(__DIR__, array(__DIR__ . '/vendor'));
$backend = new Backend();



$test = new Conversation();
var_dump($test->model());