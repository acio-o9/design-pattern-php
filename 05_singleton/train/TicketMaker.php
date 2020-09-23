<?php

namespace Train;

class TicketMaker
{
    /** @var TicketMaker|null */
    private static $ticketMaker;

    /** @var int */
    private $ticket = 1000;

    private function __construct()
    {
        // for disallow external class to create an instance.
    }

    public static function getInstance(): TicketMaker
    {
        if (is_null(self::$ticketMaker)) {
            self::$ticketMaker = new TicketMaker();
        }
        return self::$ticketMaker;
    }

    public function getNextTicketNumber(): int
    {
        return $this->ticket++;
    }
}
