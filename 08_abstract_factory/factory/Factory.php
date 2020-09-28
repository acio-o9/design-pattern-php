<?php

namespace Factory;

abstract class Factory {
    public static function getFactory(string $classname): Factory
    {
        $factory = null;
        try {
            $factory = new $classname;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return $factory;
    }

    public abstract function createLink(string $caption, string $url): Link;
    public abstract function createTray(string $caption): Tray;
    public abstract function createPage(string $title, string $author): Page;
}

