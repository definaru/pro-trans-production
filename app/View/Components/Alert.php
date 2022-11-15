<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{

    public $type;
    public $header;
    public $message;

    public function __construct($type, $message, $header = '')
    {
        $this->type = $type;
        $this->header = $header;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert');
    }
}
