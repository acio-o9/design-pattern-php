<?php

namespace Framework;

abstract class Product
{
    public abstract function execute(string $s): void;
    public function createClone(): Product
    {
        return clone $this;
    }
}
