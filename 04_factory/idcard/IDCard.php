<?php

namespace IDCard;

use FrameWork\Product;

class IDCard extends Product
{
    /** @var string */
    private $owner;

    public function __construct(string $owner)
    {
        echo "Create a IDCard as owner:[{$owner}]." . PHP_EOL;
        $this->owner = $owner;
    }

    public function allow(): void
    {
        echo "system allows [{$this->owner}] to use." . PHP_EOL;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }
}
