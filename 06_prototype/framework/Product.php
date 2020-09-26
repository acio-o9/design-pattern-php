<?php

namespace Framework;

interface Product
{
    public function execute(string $s): void;
    public function createClone(): Product;
}
