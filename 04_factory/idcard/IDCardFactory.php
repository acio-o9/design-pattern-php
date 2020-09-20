<?php

namespace IDCard;

use FrameWork\Factory;
use FrameWork\Product;

class IDCardFactory extends Factory
{
    /** @var array */
    private $owners;
    /** @var int */
    private $index = 0;

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner, ++$this->index);
    }

    protected function registerProduct(Product $product): void
    {
        $this->owners[$product->getNumber()] = $product->getOwner();
    }

    public function getOwners(): array
    {
        return $this->owners;
    }
}
