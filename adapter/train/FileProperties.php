<?php

namespace Train;

use Train\FileIO;

class FileProperties implements FileIO
{
    /** @var string */
    private const FILE_PATH = './train/';

    /** @var array */
    private $properties;

    public function readFromFile(string $filename): void
    {
        $contents = file_get_contents(self::FILE_PATH . $filename);
        foreach (explode(PHP_EOL, $contents) as $line) {
            $content = explode('=', $line);
            if (count($content) < 2) {
                continue;
            }
            $this->properties[$content[0]] = $content[1];
        }
    }

    public function writeToFile(string $filename): void
    {
        $contents = [];
        foreach ($this->properties as $key => $value) {
            $contents[] = "{$key}={$value}";
        }

        file_put_contents(self::FILE_PATH . $filename, implode(PHP_EOL, $contents));
    }

    public function setValue(string $key, string $value): void
    {
        $this->properties[$key] = $value;
    }

    public function getValue(string $key): string
    {
        return $this->properties[$key];
    }
}
