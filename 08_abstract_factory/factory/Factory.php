<?php

namespace Factory;

interface Factory {
    public function createLink(string $caption, string $url): Link;
    public function createTray(string $caption): Tray;
    public function createPage(string $title, string $author): Page;
}

