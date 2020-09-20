<?php

namespace IDCard;

use FrameWork\Factory;
use FrameWork\Product;

class IDCardFactory extends Factory
{
    /** @var array */
    private $owners;

    protected function createProduct(string $owner): Product
    {
        return new IDCard($owner);
    }

    protected function registerProduct(Product $product): void
    {
        $this->owners[] = $product->getOwner();
    }

    public function getOwners(): array
    {
        return $this->owners;
    }
}
