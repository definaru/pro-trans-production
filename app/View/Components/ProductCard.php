<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
	
    public $name;
    public $vendorcode;
    public $price;
    public $availability = 0;
    public $modifications;
    public $drive;
    public $fuel;
    public $trimlevel;


    public function __construct($name, $vendorcode, $price, $availability, $modifications, $drive, $fuel, $trimlevel)
    {
        $this->name          = $name;
        $this->vendorcode    = $vendorcode;
        $this->price         = $price;
        $this->availability  = $availability;
        $this->modifications = $modifications;
        $this->drive         = $drive;
        $this->fuel          = $fuel;
        $this->trimlevel     = $trimlevel;
    }


    public function render()
    {
        return view('components.product-card');
    }
}
