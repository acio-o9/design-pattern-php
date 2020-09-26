<?php

namespace App;

use Framework\Product;

class MessageBox extends Product
{
    /** @var string */
    private $decochar;

    public function __construct(string $decochar)
    {
        $this->decochar = $decochar;
    }

    public function execute(string $s):void
    {
        $length = strlen($s);

        // upper
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo PHP_EOL;

        // middle
        echo "{$this->decochar} {$s} {$this->decochar}" . PHP_EOL;

        // lower
        for ($i = 0; $i < $length + 4; $i++) {
            echo $this->decochar;
        }
        echo PHP_EOL;
    }
}
