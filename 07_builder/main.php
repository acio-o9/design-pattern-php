<?php

use App\Director;
use App\JsonBuilder;
use App\HTMLBuilder;
use App\TextBuilder;

require('vendor/autoload.php');

if (count($argv) !== 2) {
    echo 'usage: php main.php [plain|html|json]';
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
} elseif ($argv[1] === 'json') {
    $builder = new JsonBuilder();
    $director = new Director($builder);
    $director->build();
    $result = $builder->getResult();
    echo $result;
} else {
    echo 'usage: php main.php [plain|html|json]';
    exit;
}

// ==================
//  plain result
// ==================

// =====================================
// 『Greeting』
// 
// # 朝から昼にかけて
// 
//  - おはようございます。
//  - こんにちは。
// 
// # 夜に
// 
//  - こんばんは。
//  - おやすみなさい。
//  - さようなら。
// 
// =====================================
//


// ==================
//  json result
// ==================

// "{"0_title":"Greeting","1_sentence":"朝から昼にかけて","2_items":["おはようございます。","こんにちは。"],"3_sentence":"夜に","4_items":["こんばんは。","おやすみなさい。","さようなら。"],"5_end":"last item."}"
