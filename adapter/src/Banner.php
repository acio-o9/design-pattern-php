<?php

namespace App;

class Banner
{
    /** @var string */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function showWithParen()
    {
        echo "({$this->string})" . PHP_EOL;
    }
    
    public function showWithAster()
    {
        echo "*{$this->string}*" . PHP_EOL;
    }
}
