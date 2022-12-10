<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Providers\getImageMsProvider;


class ProductCard extends Component
{
	
    public $name;
    public $image; // = '/img/no_photo.jpg'
    public $href;
    public $vendorcode;
    public $price;
    public $availability = 0;
    public $modifications;


    public function __construct($name, $image, $href, $vendorcode, $price, $availability, $modifications)
    {
        $this->name          = $name;
        $this->image         = $image;
        $this->href          = $href;
        $this->vendorcode    = $vendorcode;
        $this->price         = $price;
        $this->availability  = $availability;
        $this->modifications = $modifications;
    }


    public function render()
    {
        //, ['img' => new getImageMsProvider()]
        return view('components.product-card');
    }
}
