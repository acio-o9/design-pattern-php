<?php

require 'vendor/autoload.php';

use App\CharDisplay;
use App\StringDisplay;

$d1 = new CharDisplay('H');
$d2 = new StringDisplay('Hello, world.');
$d3 = new StringDisplay('こんにちは。');

$d1->display();
$d2->display();
$d3->display();
