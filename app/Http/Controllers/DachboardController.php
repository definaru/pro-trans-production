<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\MoySklad;


class DachboardController extends Controller
{

    public function Settings()
    {
        $uuid = auth()->user()->verified;
        $profile = MoySklad::getCompany($uuid);
        return view('dashboard.profile.settings', ['profile' => $profile]);
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
        $order = $invoice ? MoySklad::getInvoiceProduct($invoice) : '';
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

    public function DetailProduct($id)
    {
        $url = MoySklad::msUrl().'product/'.$id;
        $response = MoySklad::get($url);
        $product = MoySklad::getOneProduct($id);
        return view('dashboard.product.details', [
            'data' => $response->json(),
            'product' => $product
        ]);
    }

    public function CatalogDetail($name)
    {
        $catalog = MoySklad::getCategory($name);
        $url = MoySklad::msUrl().'product?limit=25&offset=0&expand=images';
        $response = MoySklad::get($url);
        return view('dashboard.catalog-detail', [
            'name' => $name, 
            'data' => $response->json(),
            'catalog' => $catalog
        ]);
    }

    public function ReportsDetail($order)
    {
        $response = MoySklad::getPaymentReports($order);
        //return response()->json($response);
        return view('dashboard.payment.reports-detail', [
            'data' => $response
        ]);
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
