<?php

namespace App\View\Components;
use Illuminate\View\Component;


abstract class Icon extends Component
{
    public $size;
    public $color;

    public function __construct($color = '#000', $size = '20px')
    {
        $this->size = $size;
        $this->color = $color;
    }
}