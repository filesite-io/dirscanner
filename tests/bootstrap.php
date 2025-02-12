<?php
date_default_timezone_set('UTC');

require __DIR__.'/../vendor/autoload.php';

$scanner = new DirScanner();
$scanner->setWebRoot('src/');
$rootDir = __DIR__ . '/../src/';
$scanner->setRootDir($rootDir);

$maxScanDeep = 1;
$dirTree = $scanner->scan($rootDir, $maxScanDeep);
$scanResults = $scanner->getScanResults();

echo "Dir tree of {$rootDir}\n";
print_r($dirTree);
echo "\n\n";

echo "Array results of {$rootDir}\n";
print_r($scanResults);
echo "\n\n";
