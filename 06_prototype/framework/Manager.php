<?php

namespace Framework;

use FrameWork\Product;

class Manager
{
    /** @var Product[] */
    private $showcase = [];

    public function register(string $name, Product $proto): void
    {
        $this->showcase[$name] = $proto;
    }

    public function create(string $protoname): Product
    {
        $p = $this->showcase[$protoname];
        return $p->createClone();
    }
}
