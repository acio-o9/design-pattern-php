<?php

namespace App;

class BookShelfIterator implements Iterator
{
    /** @var BookShelf */
    private $bookShelf;
    /** @var int */
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext(): bool
    {
        return $this->index < $this->bookShelf->getLength();
    }

    public function next(): Object
    {
        $book = $this->bookShelf->getBookAt($this->index);
        ++$this->index;
        return $book;
    }
}
