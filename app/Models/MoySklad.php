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

    public static function getStatusTrackingType($value)
    {
        return strtr($value, 
            [
                'ELECTRONICS' => 'Фотокамеры и лампы-вспышки',
                'LP_CLOTHES'  => 'Тип маркировки "Одежда"',
                'LP_LINENS'   => 'Тип маркировки "Постельное белье"',
                'MILK'        => 'Молочная продукция',
                'NCP'         => 'Никотиносодержащая продукция',
                'NOT_TRACKED' => 'Без маркировки',
                'OTP'         => 'Альтернативная табачная продукция',
                'PERFUMERY'   => 'Духи и туалетная вода',
                'SHOES'       => 'Тип маркировки "Обувь"',
                'TIRES'       => 'Шины и покрышки',
                'TOBACCO'     => 'Тип маркировки "Табак"',
                'WATER'       => 'Упакованная вода'
            ]
        );
    }

    public static function getPaymentItemType($value)
    {
        return strtr($value, 
            [
                'GOOD' => 'Товар',
                'EXCISABLE_GOOD' => 'Подакцизный товар',
                'COMPOUND_PAYMENT_ITEM' => 'Составной предмет расчета',
                'ANOTHER_PAYMENT_ITEM' => 'Иной предмет расчета'
            ]
        );
    }

    public static function getAllProduct($limit = 10, $offset = 0)
    {
        $url = self::msUrl().'assortment?expand=images,positions&limit='.$limit.'&offset='.$offset;
        $response = self::get($url);
        return $response->json();
    }

    public static function getCategory($id)
    {
        $url = self::msUrl().'productfolder/'.$id;
        $response = self::get($url);
        return $response->json();
    }

    public static function getCompany($id)
    {
        $url = self::msUrl().'counterparty/'.$id;
        $response = self::get($url);
        return $response->json();
    }

    public static function getInvoice($id) 
    {
        $url = self::msUrl().'invoiceout/'.$id;
        $response = self::get($url);
        return $response->json();
    }

    public static function getInvoiceOut($url) 
    {
        //$url = self::msUrl().'invoiceout/metadata/states/'.$id;
        $response = self::get($url);
        $items = $response->json();
        return [
            'id' => $items['id'],
            'accountId' => $items['accountId'],
            'name' => $items['name']
        ];
    }

    public static function getInvoiceoutMetadataStates($url)
    {
        $response = self::get($url);
        $items = $response->json();
        return [
            'id' => $items['id'],
            'name' => $items['name'],
            'color' => $items['color']
        ];
    }

    public static function getInvoicePositions($id) 
    {
        $url = self::msUrl().'invoiceout/'.$id.'/positions';
        $response = self::get($url);
        return $response->json();
    }

    public static function getCustomerOrderPositions($url) 
    {
        //$url = self::msUrl().'customerorder/'.$id.'/positions';
        $response = self::get($url);
        $items = $response->json();
        $array = [];
        foreach($items['rows'] as $item) {
            $array[] = [
                'id' => $item['id'],
                'product' => self::getProduct($item['assortment']['meta']['href']),
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'discount' => $item['discount'],
                'vat' => $item['vat'],
            ];
        }
        return [
            'product' => $array,
            'size' => $items['meta']['size']
        ];
    }

    public static function getProductImages($url)
    {
        $response = self::get($url);
        $item = $response->json();
        $images = $item['rows'] ? $item['rows'][0]['miniature']['href'] : '/img/placeholder.png';
        return [
            'images' => $images
        ];
    }

    public static function getProductFolderID($url)
    {
        $parts = parse_url( $url );
        $arr = explode('?id=', $parts["fragment"]);
        return $arr[1];
        //$parts;
        //
    }    

    public static function getOneProduct($id)
    {
        $url = self::msUrl().'assortment?filter=id='.$id;
        $response = self::get($url);
        $item = $response->json()['rows']; 
        if($item === []) {
            return [
                'id' => $id,
                'name' => 'Товар не найден'
            ];
        }
        $item = $item[0];
        return [
            'id' => $item['id'],
            'updated' => $item['updated'],
            'name' => $item['name'],
            'externalCode' => $item['externalCode'],
            'archived' => $item['archived'] === true ? 'да' : 'нет',
            'catalog' => [
                'id' => self::getProductFolderID($item['productFolder']['meta']['uuidHref']),
                'name' => $item['pathName']
            ],
            'vat' => $item['vat'],
            'src' => self::getProductImages($item['images']['meta']['href']),
            'minPrice' => $item['minPrice']['value'],
            'salePrices' => $item['salePrices'][0]['value'],
            'paymentItemType' => self::getPaymentItemType($item['paymentItemType']),
            'article' => $item['article'],
            'weight' => $item['weight'],
            'volume' => $item['volume'],
            'trackingType' => self::getStatusTrackingType($item['trackingType']),
            'barcodes' => isset($item['barcodes']) ? $item['barcodes'][0]['ean13'] : 'Нет данных',
            'quantity' => $item['quantity']
        ];
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
            'okpo' => $item['okpo'],
            'email' => $item['email'] ? $item['email'] : '',
            'phone' => $item['phone'] ? $item['phone'] : '',
            'actualAddress' => $item['actualAddress'] ? $item['actualAddress'] : ''
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

    public static function getCustomerOrder($url)
    {
        $response = self::get($url);
        $positions = $response->json();
        return [
            'size' => $positions['size']
        ];
    }

    public static function getPaymentReports($order)
    {
        $array = [];
        $url = self::msUrl().'customerorder/'.$order;
        $response = self::get($url);
        $neworder = $response->json();
        return [
            'id' => $neworder['id'],
            'updated' => $neworder['updated'],
            'deal' => $neworder['name'],
            'moment' => $neworder['moment'],
            'sum' => $neworder['sum'],
            'company' => self::getCounterParty($neworder['agent']['meta']['href']),
            'created' => $neworder['created'],
            'positions' => self::getCustomerOrderPositions($neworder['positions']['meta']['href']),
            'vatSum' => $neworder['vatSum'],
            'deliveryPlannedMoment' => $neworder['deliveryPlannedMoment'],
            'payedSum' => $neworder['payedSum'],
            'shippedSum' => $neworder['shippedSum'],
            'invoicedSum' => $neworder['invoicedSum'],
            'state' => self::getInvoiceoutMetadataStates($neworder['state']['meta']['href']),
            'invoicesOut' => self::getInvoiceOut($neworder['invoicesOut'][0]['meta']['href'])
        ];
    }
}