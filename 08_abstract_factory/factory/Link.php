<?php

namespace Factory;

abstract class Link extends Item
{
    /** @var string */
    protected $url;

    public function __construct(string $caption, string $url)
    {
        parent::__construct($caption);
        $this->url = $url;
    }
}
