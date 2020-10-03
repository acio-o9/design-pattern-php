<?php

namespace Factory;

abstract class Page
{
    /** @var string */
    protected $title;
    /** @var string */
    protected $author;
    /** @var array */
    protected $content = [];

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function add(Item $item): void
    {
        $this->content[] = $item;
    }

    public function output(): void
    {
        try {
            $filename = "{$this->title}.html";
            file_put_contents($filename, $this->makeHTML());
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public abstract function makeHTML();
}

