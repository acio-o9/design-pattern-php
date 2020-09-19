<?php

class BookShelf implements Aggregate
{
    /** @var Book[] */
    private $books;
    /** @var int */
    private $last = 0;

    public function __construct(int $maxsize)
    {
        $this->books = range(0, $maxsize);
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
