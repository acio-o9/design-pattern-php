<?php

namespace Train;

class TicketMaker
{
    /** @var int */
    private $ticket = 1000;

    public function getNextTicketNumber(): int
    {
        return $this->ticket++;
    }
}
