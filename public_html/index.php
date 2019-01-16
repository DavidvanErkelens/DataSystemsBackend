<?php

// Make sure a session is running
session_start();

// Require Composer files
require_once(__DIR__ . '/../vendor/autoload.php');

// Load config
require_once __DIR__ . '/../config.php';

// Create AutoIncluder
$incl = new AutoIncluder(__DIR__ . '/..', array(__DIR__ . '/../vendor'));

// Create backend with included config
$backend = new Backend($config);

// Get config
$siteconfig = file_get_contents(__DIR__ . '/../website/config.json');

// Create site object
$site = new Site($siteconfig);

// Set the backend
$site->setBackend($backend);

// Get the path we're processing
$path = $_SERVER['REQUEST_URI'];

// Strip first /
if (substr($path, 0, 1) == '/') $path = substr($path, 1);

// Strip trailing /
if (substr($path, -1, 1) == '/') $path = substr($path, 0, -1);

// Parse URL
$page = $site->getPage($path);

// Are we parsing a POST call?
if (array_key_exists('REQUEST_METHOD', $_SERVER) && $_SERVER['REQUEST_METHOD'] === 'POST' && $page instanceof PostPage) $page->process($_POST)->render(); 

// Return contents 
else $page->render();