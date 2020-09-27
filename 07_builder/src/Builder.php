<?php

namespace App;

abstract class Builder
{
    /** @var bool */
    protected $isInitialized = false;
    public abstract function makeTitle(string $title);
    public abstract function makeString(string $str);
    public abstract function makeItems(array $items);
    public abstract function close();

    /**
     * check calling makeTitle method
     * @throws Exception
     */
    protected function ready(): void
    {
        if (!$this->isInitialized) {
            throw new \Exception('makeTitle method called not yet.');
        }
    }
}
