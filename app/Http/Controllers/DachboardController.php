<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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
        $url = 'https://online.moysklad.ru/api/remap/1.2/entity/product?limit=100&offset=0';
        $response = Http::withBasicAuth(config('app.ms_login'), config('app.ms_password'))->get($url);
        return view('dashboard.catalog-detail', [
            'name' => $name, 
            'data' => $response->json()
        ]);
    }

    public function ReportsDetail($order)
    {
        return view('dashboard.payment.reports-detail', ['order' => $order]);
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

    public function Reports()
    {
        return view('dashboard.payment.reports');
    }
    
}
