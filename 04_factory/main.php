<?php

require 'vendor/autoload.php';

use IDCard\IDCardFactory;

$factory = new IDCardFactory();

$card1 = $factory->create('acio');
$card2 = $factory->create('o9');
$card3 = $factory->create('acio-o9');

$card1->allow();
$card2->allow();
$card3->allow();

// var_export($factory->getOwners());
