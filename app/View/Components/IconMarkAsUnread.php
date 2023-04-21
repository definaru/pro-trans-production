<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconMarkAsUnread extends Component
{

    public $size;
    public $color;

    public function __construct($color = '#000', $size = '20px')
    {
        $this->size = $size;
        $this->color = $color;
    }

    
    public function render()
    {
        return view('components.icon-mark-as-unread');
    }
}
