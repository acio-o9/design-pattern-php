<?php

namespace ListFactory;

use Factory\Tray;

class ListTray extends Tray
{
    public function __construct(string $caption)
    {
        parent::__construct($caption);
    }

    public function makeHTML(): string
    {
        $str = '<li>';
        $str .= $this->caption;
        $str .= '<ul>';

        foreach ($this->tray as $item) {
            $str .= $item->makeHTML();
        }

        $str .= '</ul>';
        $str .= '</li>';

        return $str;
    }
}
