<?php

namespace App;

interface Aggregate
{
    public function iterator(): Iterator;
}
