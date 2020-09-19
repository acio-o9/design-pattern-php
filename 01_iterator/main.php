<?php
require 'vendor/autoload.php';

use App\Book;
use App\BookShelf;

$bookShelf = new BookShelf(4);
$bookShelf->appendBook(new Book("Hello World. ver1"));
$bookShelf->appendBook(new Book("Hello World. ver2"));
$bookShelf->appendBook(new Book("Hello World. ver3"));
$bookShelf->appendBook(new Book("Hello World. ver4"));

$iterator = $bookShelf->iterator();
while ($iterator->hasNext()) {
    $book = $iterator->next();
    echo $book->getName() . PHP_EOL;
}

