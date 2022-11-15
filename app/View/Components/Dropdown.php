<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends Component
{

    public $icon;
    public $link;
    public $href;


    public function __construct($link, $href = '#', $icon = '')
    {
        $this->link = $link;
        $this->href = $href;
        $this->icon = $icon;
    }


    public function render()
    {
        return view('components.dropdown');
    }
}
