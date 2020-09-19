<?php

require 'vendor/autoload.php';

use App\PrintOutBanner;

$p = new PrintOutBanner("Hello");

/**
 * main class dependes on PrintOut class.
 * printOutWeak, printOutStrong method are implemented with PrintOut class.
 */
echo $p->printOutWeak();
echo $p->printOutStrong();

