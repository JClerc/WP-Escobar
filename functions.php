<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

// Composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$timber = new \Timber\Timber();

$files = ['filters', 'custom-post-types', 'custom-roles', 'theme-assets', 'theme-features'];
foreach ($files as $file) {
    require_once __DIR__ . '/functions/' . $file . '.php';
}
