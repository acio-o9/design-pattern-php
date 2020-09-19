<?php

interface Iterator
{
    public function hasNext(): bool;
    public function next(): Object;
}
