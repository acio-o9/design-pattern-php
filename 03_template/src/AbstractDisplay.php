<?php

namespace App;

abstract class AbstractDisplay
{
    public abstract function open(): void;
    public abstract function printOut(): void;
    public abstract function close(): void;
    public function display()
    {
        $this->open();
        for ($i = 0; $i < 5; $i++) {
            $this->printOut();
        }
        $this->close();
    }
}
