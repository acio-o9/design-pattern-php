<?php

require('vendor/autoload.php');

use App\Singleton;

echo 'Process starts.' . PHP_EOL;

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

if ($obj1 == $obj2) {
    echo 'obj1 and obj2 are same instance.' . PHP_EOL;
} else {
    echo 'obj1 and obj2 are not same instance.' . PHP_EOL;
}

echo 'Process ends.' . PHP_EOL;
