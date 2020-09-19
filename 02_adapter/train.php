<?php

require 'vendor/autoload.php';

use Train\FileProperties;

$f = new FileProperties();

try {
    $f->readFromFile("file.txt");
    $f->setValue("year", "2004");
    $f->setValue("month", "4");
    $f->setValue("day", "21");
    $f->writeToFile("newfile.txt");
} catch (Exception $e) {
    print $e->getMessage() . PHP_EOL;
}
