<?php

namespace App;

use App\Banner;
use App\PrintOut;

class PrintOutBanner extends PrintOut
{
    /** @var Banner */
    private $banner;
    public function __construct(string $string)
    {
        $this->banner = new Banner($string);
    }

    public function printOutWeak(): void
    {
        $this->banner->showWithParen();
    }

    public function printOutStrong(): void
    {
        $this->banner->showWithAster();
    }
}
