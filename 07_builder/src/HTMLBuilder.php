<?php

namespace App;

use App\Builder;

class HTMLBuilder extends Builder
{
    /** @var string */
    private $filename;

    /** @var string */
    private $html;

    public function makeTitle(string $title)
    {
        $this->filename = "{$title}.html";
        $this->html .= "<html><head><title>{$title}</title></head><body>";
        $this->html .= "<h1>{$title}</h1>";
    }

    public function makeString(string $str)
    {
        $this->html .= "<p>{$str}</p>";
    }

    public function makeItems(array $items)
    {
        $this->html .= '<ul>';
        foreach ($items as $item) {
            $this->html .= "<li>{$item}</li>";
        }
        $this->html .= '</ul>';
    }

    public function close()
    {
        $this->html .= '</body></html>';
        file_put_contents($this->filename, $this->html);
    }

    public function getResult()
    {
        return $this->filename;
    }
}
