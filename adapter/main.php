<?php

require 'vendor/autoload.php';

use App\PrintOutBanner;

$p = new PrintOutBanner("Hello");

echo $p->printOutWeak();
echo $p->printOutStrong();

