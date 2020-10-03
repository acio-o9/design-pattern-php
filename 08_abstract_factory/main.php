<?php

require('vendor/autoload.php');

use ListFactory\ListFactory; 

if (count($argv) !== 2) {
    echo 'usage: php main.php [ListFactory]';
    exit;
}

$factory = null;
if ($argv[1] == 'ListFactory') {
   $factory = new ListFactory(); 
}

$asahi = $factory->createLink('朝日新聞', 'https://www.asahi.com/');
$yomiuri = $factory->createLink('読売', 'https://www.yomiuri.co.jp/');

$us_yahoo = $factory->createLink('Yahoo!', 'https://www.yahoo.com/');
$jp_yahoo = $factory->createLink('Yahoo!JAPAN', 'https://www.yahoo.co.jp/');
$excite = $factory->createLink('Excite', 'https://www.excite.com/');
$google = $factory->createLink('Google', 'https://www.google.com/');

$traynews = $factory->createTray('新聞');
$traynews->add($asahi);
$traynews->add($yomiuri);

$trayyahoo = $factory->createTray('Yahoo!');
$traynews->add($us_yahoo);
$traynews->add($jp_yahoo);

$traysearch = $factory->createTray('SearchEngine');
$traysearch->add($trayyahoo);
$traysearch->add($excite);
$traysearch->add($google);

$page = $factory->createPage('Link Page', 'author');
$page->add($traynews);
$page->add($traysearch);

$page->output();

