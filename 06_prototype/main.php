<?php

require('vendor/autoload.php');

use App\MessageBox;
use App\UnderlinePen;
use Framework\Manager;

$manager = new Manager();
$upen = new UnderlinePen('~');
$mbox = new MessageBox('*');
$sbox = new MessageBox('/');
$manager->register('strong message', $upen);
$manager->register('warning box', $mbox);
$manager->register('slash box', $sbox);

$p1 = $manager->create('strong message');
$p1->execute('Hello, World.');
$p2 = $manager->create('warning box');
$p2->execute('Hello, World.');
$p3 = $manager->create('slash box');
$p3->execute('Hello, World.');


// ==================
//  result
// ==================

// "Hello, World."
//  ~~~~~~~~~~~~~
// *****************
// * Hello, World. *
// *****************
// /////////////////
// / Hello, World. /
// /////////////////
