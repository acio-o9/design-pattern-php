<?php

namespace App;

class Singleton
{
    /** @var Singleton|null */
    private static $singleton;

    private function __construct()
    {
        echo 'Instance created.' . PHP_EOL;
    }

    public static function getInstance(): Singleton
    {
        /**
         * PHP can't substitution function result for a static variable.
         * Instead of, getter method check static variable.
         * This creates an instance if the variable is null. 
         */
        if (is_null(self::$singleton)) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}
