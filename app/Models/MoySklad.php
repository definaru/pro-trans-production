<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;


class MoySklad
{

    // public $api_url;

    // public function __construct($api_url = 'https://online.moysklad.ru/api/remap/1.2/entity/') {
    //     $this->api_url = $api_url;
    // }

    public static function msUrl()
    {
        return 'https://online.moysklad.ru/api/remap/1.2/entity/';
    }

    public static function get($url)
    {
        return Http::withBasicAuth(
            config('app.ms_login'), 
            config('app.ms_password')
        )->get($url);
    }

    public static function getCategory($id)
    {
        $url = self::msUrl().'productfolder/'.$id;
        $response = self::get($url);
        return $response->json();
    }

    public static function getInvoice($id) 
    {
        $url = self::msUrl().'invoiceout/'.$id;
        $response = self::get($url);
        return $response->json();
    }

    public static function getInvoicePositions($id) 
    {
        $url = self::msUrl().'invoiceout/'.$id.'/positions';
        $response = self::get($url);
        return $response->json();
    }

    public static function getProduct($url) 
    {
        $response = self::get($url);
        $item = $response->json();
        return [ 
            'article' => $item['article'],
            'name' => $item['name']
        ];
    }

    public static function getCounterParty($url)
    {
        $response = self::get($url);
        $item = $response->json();
        return [
            'name' => $item['name'],
            'type' => $item['companyType'],
            'updated' => $item['updated'],
            'created' => $item['created'],
            'address' => $item['legalAddress'],
            'inn' => $item['inn'],
            'kpp' => $item['kpp'],
            'ogrn' => $item['ogrn'],
            'okpo' => $item['okpo']
        ];
    }

    public static function getInvoiceProduct($id)
    {
        $array = [];
        foreach(self::getInvoicePositions($id)['rows'] as $invoice) {
            $array[] = [
                'product_id' => $invoice['id'],
                'product' => self::getProduct($invoice['assortment']['meta']['href']),
                'quantity' => $invoice['quantity'],
                'price' => $invoice['price'],
                'discount' => $invoice['discount'],
                'vat' => $invoice['vat'],
            ];
        }
        $invoice = self::getInvoice($id);
        return [
            'invoice' => $array,
            'order' => $invoice,
            'company' => self::getCounterParty($invoice['agent']['meta']['href'])
        ];
    }


}