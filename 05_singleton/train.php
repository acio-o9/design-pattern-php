<?php

require('vendor/autoload.php');

use Train\TicketMaker;

$maker1 = new TicketMaker();
echo $maker1->getNextTicketNumber() . PHP_EOL;
echo $maker1->getNextTicketNumber() . PHP_EOL;

$maker2 = new TicketMaker();
echo $maker2->getNextTicketNumber() . PHP_EOL;
echo $maker2->getNextTicketNumber() . PHP_EOL;

// ==================
//  result
// ==================
// > 1000
// > 1001
// > 1000
// > 1001
