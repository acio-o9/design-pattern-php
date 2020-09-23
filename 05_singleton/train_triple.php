<?php

require('vendor/autoload.php');

use Train\Triple;

$obj_0 = Triple::getInstance(0);
$obj_0->printIndex();

$obj_1 = Triple::getInstance(1);
$obj_1->printIndex();

if ($obj_0 === $obj_1) {
    echo '[process] failed.' . PHP_EOL;
} else {
    echo '[process] obj_0 and obj_1 are different instances.' . PHP_EOL;
}

$obj_a = Triple::getInstance(0);
if ($obj_0 === $obj_a) {
    echo '[process] obj_0 and obj_a are same instances.' . PHP_EOL;
}

$obj_2 = Triple::getInstance(2);
$obj_2->printIndex();

$obj_3 = Triple::getInstance(3);
$obj_3->printIndex();

// ==================
//  result
// ==================
// > This Triple's index : [0]
// > This Triple's index : [1]
// > [process] obj_0 and obj_1 are different instances.
// > [process] obj_0 and obj_a are same instances.
// > This Triple's index : [2]
// > Triple allows to create only [3] instances.
