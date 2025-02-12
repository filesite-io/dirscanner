# DirScanner
Dir and file scanner, a PHP implement of filesite.io.


## Installation

Install the latest version with
```
composer require filesite/dirscanner
```

Or create your composer.json file with
```
{
    "require": {
        "filesite/dirscanner": "dev-main"
    }
}
```


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

