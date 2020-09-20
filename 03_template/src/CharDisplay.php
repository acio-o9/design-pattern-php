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

    protected function open(): void
    {
        echo '<<';
    }

    protected function printOut(): void
    {
        echo $this->ch;
    }

    protected function close(): void
    {
        echo '>>' . PHP_EOL;
    }
}
