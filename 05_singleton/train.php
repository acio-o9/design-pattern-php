<?php

require('vendor/autoload.php');

use Train\TicketMaker;

$maker1 = TicketMaker::getInstance();
echo $maker1->getNextTicketNumber() . PHP_EOL;
echo $maker1->getNextTicketNumber() . PHP_EOL;

$maker2 = TicketMaker::getInstance();
echo $maker2->getNextTicketNumber() . PHP_EOL;
echo $maker2->getNextTicketNumber() . PHP_EOL;

// ==================
//  result
// ==================
// > 1000
// > 1001
// > 1002
// > 1003
