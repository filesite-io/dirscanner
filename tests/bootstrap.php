<?php
date_default_timezone_set('UTC');

require __DIR__.'/../../../autoload.php';

use Filesite\DirScanner;

$scanner = new DirScanner();
$scanner->setWebRoot('dirscanner/');
$rootDir = __DIR__ . '/../';
$scanner->setRootDir($rootDir);

echo "Default support file extensions:\n";
//set supported file extensions
$scanner->supportFileExtensions = [
    'md',
    'txt',
    'php',
];
print_r($scanner->supportFileExtensions);

$maxScanDeep = 3;
$dirTree = $scanner->scan($rootDir, $maxScanDeep);
$scanResults = $scanner->getScanResults();

echo "Dir tree of {$rootDir}\n";
print_r($dirTree);
echo "\n\n";

echo "Array results of {$rootDir}\n";
print_r($scanResults);
echo "\n\n";
