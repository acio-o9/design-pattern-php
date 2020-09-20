<?php

namespace FrameWork;

use FrameWork\Product;

abstract class Factory
{
    public function create(string $owner): Product
    {
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }

    protected abstract function createProduct(string $owner): Product;
    protected abstract function registerProduct(Product $product): void;
}
