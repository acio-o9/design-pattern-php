<?php

namespace App;

use App\Builder;

class TextBuilder implements Builder
{
    /** @var string */
    private $text;

    public function makeTitle(string $title)
    {
        $this->text .= '=====================================' . PHP_EOL;
        $this->text .= "『{$title}』" . PHP_EOL;
        $this->text .= PHP_EOL;
    }

    public function makeString(string $str)
    {
        $this->text .= "# {$str}" . PHP_EOL;
        $this->text .= PHP_EOL;
    }

    public function makeItems(array $items)
    {
        foreach ($items as $item) {
            $this->text .= " - {$item}" . PHP_EOL;
        }
        $this->text .= PHP_EOL;
    }

    public function close()
    {
        $this->text .= '=====================================' . PHP_EOL;
    }

    public function getResult()
    {
        return $this->text;
    }
}
