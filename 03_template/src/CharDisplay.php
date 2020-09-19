<?php

namespace App;

use App\AbstractDisplay;

class CharDisplay extends AbstractDisplay
{
    /** @var string */
    private $ch;

    public function __construct(string $ch)
    {
        $this->ch = $ch;
    }

    public function open(): void
    {
        echo '<<';
    }

    public function printOut(): void
    {
        echo $this->ch;
    }

    public function close(): void
    {
        echo '>>' . PHP_EOL;
    }
}
