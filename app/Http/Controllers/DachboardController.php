<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\MoySklad;


class DachboardController extends Controller
{

    public function Settings()
    {
        return view('profile.settings');
    }

    public function Events() 
    {
        return view('dashboard.events');
    }

    public function Schedule() 
    {
        return view('dashboard.work.schedule');
    }

    public function Help() 
    {
        return view('dashboard.help');
    }

    public function Notifications() 
    {
        return view('dashboard.notifications');
    }

    public function Order() 
    {
        return view('dashboard.payment.order');
    }

    public function Invoice($invoice = '') 
    {
        $order = $invoice ?? MoySklad::getInvoiceProduct($invoice);
        //return response()->json($order);
        return view('dashboard.payment.order', ['order' => $order]);
    }

    public function Account() 
    {
        return view('dashboard.payment.account');
    }

    public function Record() 
    {
        return view('dashboard.payment.record');
    }

    public function Catalog()
    {
        return view('dashboard.catalog');
    }

    public function CatalogDetail($name)
    {
        $catalog = MoySklad::getCategory($name);
        $url = MoySklad::msUrl().'product?limit=25&offset=0';
        $response = Http::withBasicAuth(config('app.ms_login'), config('app.ms_password'))->get($url);
        return view('dashboard.catalog-detail', [
            'name' => $name, 
            'data' => $response->json(),
            'catalog' => $catalog
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
