<?php
date_default_timezone_set('UTC');

require __DIR__.'/../../../autoload.php';

$scanner = new Filesite\DirScanner();
$scanner->setWebRoot('dirscanner/');
$rootDir = __DIR__ . '/../';
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
