<?php

require 'vendor/autoload.php';

use App\PrintOutBanner;

$p = new PrintOutBanner("Hello");

/**
 * main class dependes on PrintOut interface.
 * printOutWeak, printOutStrong method are implemented with PrintOut interface.
 */
echo $p->printOutWeak();
echo $p->printOutStrong();

