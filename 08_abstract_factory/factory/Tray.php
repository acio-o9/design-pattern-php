<?php

namespace Factory;

abstract class Tray extends Item
{
    /** @var array */
    protected $tray = [];

    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function add(Item $item): void
    {
        $this->tray[] = $item;
    }
}
