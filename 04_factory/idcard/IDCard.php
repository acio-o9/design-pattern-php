<?php

namespace IDCard;

use FrameWork\Product;

class IDCard extends Product
{
    /** @var string */
    private $owner;
    /** @var int */
    private $number;

    public function __construct(string $owner, int $number)
    {
        echo "Create a IDCard as owner:[{$owner}]." . PHP_EOL;
        $this->owner = $owner;
        $this->number = $number;
    }

    public function allow(): void
    {
        echo "system allows [{$this->number}:{$this->owner}] to use." . PHP_EOL;
    }

    public function getOwner(): string
    {
        return $this->owner;
    }

    public function getNumber(): int
    {
        return $this->number;
    }
}
