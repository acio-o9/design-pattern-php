<?php

namespace ListFactory;

use Factory\Factory;
use Factory\Link;
use Factory\Tray;
use Factory\Page;

class ListFactory implements Factory
{
    public function createLink(string $caption, string $url): Link
    {
        return new ListLink($caption, $url);
    }

    public function createTray(string $caption): Tray
    {
        return new ListTray($caption);
    }

    public function createPage(string $title, string $author): Page
    {
        return new ListPage($title, $author);
    }
}
