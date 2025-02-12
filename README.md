# DirScanner
Dir and file scanner, a PHP implement of filesite.io.


## Installation

Install the latest version with
```
composer require filesite/dirscanner
```

If you havn't install the composer, check their website:
[PHP Composer](https://getcomposer.org/)


## Basic Usage

```
<?php

use Filesite\DirScanner;

$scanner = new DirScanner();

$rootDir = __DIR__ . '/../src/';

//set the scan dir src/
$scanner->setRootDir($rootDir);
$maxScanDeep = 1;   //set max scan deepth

//Scan the dir and get the dir tree
$dirTree = $scanner->scan($rootDir, $maxScanDeep);
print_r($dirTree);

//get the scan results in array
$scanResults = $scanner->getScanResults();
print_r($scanResults);
```


## Documentation

Please visit our homepage:
[FileSite.io](https://filesite.io)

