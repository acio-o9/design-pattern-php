<?php

namespace App;

use App\Aggregate;
use App\Iterator;

class BookShelf implements Aggregate
{
    /** @var Book[] */
    private $books;
    /** @var int */
    private $last = 0;

    public function __construct()
    {
        $this->books = [];
    }

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book): void
    {
        $this->books[$this->last] = $book;
        ++$this->last;
    } 

    public function getLength(): int
    {
        return $this->last;
    }

    public function iterator(): Iterator
    {
        return new BookShelfIterator($this);
    }
}
