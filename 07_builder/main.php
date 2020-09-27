<?php

use App\Director;
use App\HTMLBuilder;
use App\TextBuilder;

require('vendor/autoload.php');

if (count($argv) !== 2) {
    echo 'usage: php main.php [plain|html]';
    exit;
}

if ($argv[1] === 'plain') {
    $builder = new TextBuilder();
    $director = new Director($builder);
    $director->build();
    $result = $builder->getResult();
    echo $result;
} elseif ($argv[1] === 'html') {
    $builder = new HTMLBuilder();
    $director = new Director($builder);
    $director->build();
    $filename = $builder->getResult();
    echo "created a html file. [{$filename}]";
} else {
    echo 'usage: php main.php [plain|html]';
    exit;
}
