<?php

namespace App;

use App\AbstractDisplay;

class StringDisplay extends AbstractDisplay
{
    /** @var string */
    private $str;
    /** @var int */
    private $width;

    public function __construct(string $str)
    {
        $this->str = $str;
        $this->width = mb_strlen($str);
    }

    protected function open(): void
    {
        $this->printLine();
    }

    protected function printOut(): void
    {
        echo "|{$this->str}|" . PHP_EOL;
    }

    protected function close(): void
    {
        $this->printLine();
    }

    private function printLine(): void
    {
        echo '+';
        echo str_repeat('-', $this->width);
        echo '+' . PHP_EOL;
    }
}
