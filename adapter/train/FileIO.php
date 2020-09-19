<?php

namespace Train;

interface FileIO
{
    public function readFromFile(string $filename): void;
    public function writeToFile(string $filename): void;
    public function setValue(string $key, string $value): void;
    public function getValue(string $key): string;
}
