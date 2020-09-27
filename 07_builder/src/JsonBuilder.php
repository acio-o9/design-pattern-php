<?php

namespace App;

use App\Builder;

class JsonBuilder extends Builder
{
    /** @var array */
    private $data;

    /** @var int */
    private $index = 0;

    public function makeTitle(string $title)
    {
        $this->data["{$this->index}_title"] = $title;
        $this->isInitialized = true;
        $this->index++;
    }

    public function makeString(string $str)
    {
        $this->ready();
        $this->data["{$this->index}_sentence"] = $str;
        $this->index++;
    }

    public function makeItems(array $items)
    {
        $this->ready();
        foreach ($items as $item) {
            $this->data["{$this->index}_items"][] = $item;
        }
        $this->index++;
    }

    public function close()
    {
        $this->data["{$this->index}_end"] = 'last item.';
    }

    public function getResult()
    {
        return json_encode($this->data, JSON_UNESCAPED_UNICODE);
    }
}
