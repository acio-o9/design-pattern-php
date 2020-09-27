<?php

namespace App;

interface Builder
{
    public function makeTitle(string $title);
    public function makeString(string $str);
    public function makeItems(array $items);
    public function close();
}
