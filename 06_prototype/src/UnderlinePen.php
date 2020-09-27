<?php

namespace App;

use Framework\Product;

class UnderlinePen extends Product
{
    /** @var string */
    private $ulchar;

    public function __construct(string $ulchar)
    {
        $this->ulchar = $ulchar;
    }

    public function execute(string $s): void
    {
        $length = strlen($s);
        // upper
        echo "\"{$s}\"" . PHP_EOL;

        // lower
        echo ' ';
        for ($i = 0; $i < $length; $i++) {
            echo $this->ulchar;
        }
        echo PHP_EOL;
    }
}
