<?php

namespace App;

abstract class Builder
{
    public abstract function makeTitle(string $title);
    public abstract function makeString(string $str);
    public abstract function makeItems(array $items);
    public abstract function close();
}
