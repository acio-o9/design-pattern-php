<?php

namespace App;

abstract class AbstractDisplay
{
    protected abstract function open(): void;
    protected abstract function printOut(): void;
    protected abstract function close(): void;
    public function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->printOut();
        }
        $this->close();
    }
}
