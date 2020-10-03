<?php

namespace ListFactory;

use Factory\Page;

class ListPage extends Page
{
    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }

    public function makeHTML()
    {
        $html = "<html><head><title>{$this->title}</title></head>";
        $html .= '<body>';
        $html .= "<h1>{$this->title}</h1>";
        $html .= '<ul>';

        foreach ($this->content as $item) {
            $html .= $item->makeHTML();
        }

        $html .= '</ul>';
        $html .= "<hr><address>{$this->author}</address>";
        $html .= '</body></html>';

        return $html;
    }
}
