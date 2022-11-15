<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DachboardController extends Controller
{

    public function Settings()
    {
        return view('profile.settings');
    }

    public function Catalog()
    {
        return view('dashboard.catalog');
    }

    public function CatalogDetail($name)
    {
        return view('dashboard.catalog-detail', ['name' => $name]);
    }

    public function Profile()
    {
        return view('profile.rg');
    }

    public function SpecialPrices()
    {
        return view('profile.special_prices');
    }

    public function FloadingSettings()
    {
        return view('profile.floading_settings');
    }

    public function Сard()
    {
        return view('сard');
    }
    
}
