<?php

namespace Train;

// use Exception;

class Triple
{
    private const INSTANCE_MAX_SIZE = 3;

    /** @var Triple[] */
    private static $list = [];

    /** @var int */
    private $index;

    private function __construct(int $index)
    {
        $this->index = $index;
    }

    public static function getInstance(int $id): ?Triple
    {
        if ($id >= self::INSTANCE_MAX_SIZE) {
            echo 'Triple allows to create only [' . self::INSTANCE_MAX_SIZE . '] instances.' . PHP_EOL;
            // throw new Exception('Triple allows to create only [' . self::INSTANCE_MAX_SIZE . '] instances.');
            exit;
        }

        if (empty(self::$list[$id])) {
            self::$list[$id] = new Triple($id);
        }
        return self::$list[$id];
    }

    public function printIndex(): void
    {
        echo "This Triple's index : [{$this->index}]" . PHP_EOL;
    }
}
