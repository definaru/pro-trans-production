<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{

    public $header;
    public $list;


    public function __construct($header, $list = [])
    {
        $this->header = $header;
        $this->list = $list;
    }


    public function render()
    {
        return view('components.menu');
    }
}
