<?php

namespace App;

use App\Banner;
use App\PrintOut;

class PrintOutBanner extends Banner implements PrintOut
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }

    public function printOutWeak(): void
    {
        $this->showWithParen();
    }

    public function printOutStrong(): void
    {
        $this->showWithAster();
    }
}
