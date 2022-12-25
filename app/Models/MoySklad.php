<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;


class MoySklad
{

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

    public static function put($url, $req)
    {
        //$req = response()->json($req);
        return Http::withBasicAuth(
            config('app.ms_login'), 
            config('app.ms_password')
        )->withBody($req, 'application/json')->put($url);
    }

    public static function post($url, $req)
    {
        //$req = response()->json($req);
        return Http::withBasicAuth(
            config('app.ms_login'), 
            config('app.ms_password')
        )->withBody($req, 'application/json')->post($url);
    }

    public static function getCheckout($req)
    {
        // $req = '{
        //     "organization": {
        //         "meta": {
        //             "href": "https://online.moysklad.ru/api/remap/1.2/entity/organization/218c26ab-33fe-11ed-0a80-0285001db7b3",
        //             "type": "organization",
        //             "mediaType": "application/json"
        //         }
        //     },
        //     "agent": {
        //         "meta": {
        //             "href": "https://online.moysklad.ru/api/remap/1.2/entity/counterparty/8f8fe2c0-55e8-11ed-0a80-09d6000ea9fc",
        //             "type": "counterparty",
        //             "mediaType": "application/json"
        //         }
        //     },
        //     "positions": [
        //         {
        //             "quantity": 1,
        //             "price": 1122846,
        //             "discount": 0,
        //             "vat": 20,
        //             "assortment": {
        //                 "meta": {
        //                     "href": "https://online.moysklad.ru/api/remap/1.2/entity/product/42a4b047-5064-11ed-0a80-05bf003d0d33",
        //                     "type": "product",
        //                     "mediaType": "application/json"
        //                 }
        //             },
        //             "reserve": 0
        //         },
        //         {
        //             "quantity": 1,
        //             "price": 540000,
        //             "discount": 0,
        //             "vat": 20,
        //             "assortment": {
        //                 "meta": {
        //                     "href": "https://online.moysklad.ru/api/remap/1.2/entity/product/49f64444-5064-11ed-0a80-05bf003d1191",
        //                     "type": "product",
        //                     "mediaType": "application/json"
        //                 }
        //             },
        //             "reserve": 0
        //         },
        //         {
        //             "quantity": 1,
        //             "price": 368940,
        //             "discount": 0,
        //             "vat": 20,
        //             "assortment": {
        //                 "meta": {
        //                     "href": "https://online.moysklad.ru/api/remap/1.2/entity/product/69e6615f-5064-11ed-0a80-05bf003d27b2",
        //                     "type": "product",
        //                     "mediaType": "application/json"
        //                 }
        //             },
        //             "reserve": 0
        //         },
        //         {
        //             "quantity": 1,
        //             "price": 500000,
        //             "discount": 0,
        //             "vat": 20,
        //             "assortment": {
        //                 "meta": {
        //                     "href": "https://online.moysklad.ru/api/remap/1.2/entity/product/8198635b-5064-11ed-0a80-05bf003d33d5",
        //                     "type": "product",
        //                     "mediaType": "application/json"
        //                 }
        //             },
        //             "reserve": 0
        //         },
        //         {
        //             "quantity": 1,
        //             "price": 1787500,
        //             "discount": 0,
        //             "vat": 20,
        //             "assortment": {
        //                 "meta": {
        //                     "href": "https://online.moysklad.ru/api/remap/1.2/entity/product/443911e3-5064-11ed-0a80-05bf003d0df5",
        //                     "type": "product",
        //                     "mediaType": "application/json"
        //                 }
        //             },
        //             "reserve": 0
        //         },
        //         {
        //             "quantity": 1,
        //             "price": 578123,
        //             "discount": 0,
        //             "vat": 20,
        //             "assortment": {
        //                 "meta": {
        //                     "href": "https://online.moysklad.ru/api/remap/1.2/entity/product/581d8508-5064-11ed-0a80-05bf003d1bb4",
        //                     "type": "product",
        //                     "mediaType": "application/json"
        //                 }
        //             },
        //             "reserve": 0
        //         }
        //     ]
        // }';
        $url = self::msUrl().'customerorder';
        $response = self::post($url, $req);
        return $response->json();
    }

    public static function enterIntoAcontract($deal, $accountId)
    {
        $id = self::getAgreementID();
        $token = base64_encode(config('app.ms_login').':'.config('app.ms_password'));
        $url = self::msUrl().'contract/'.$id.'?expand=state';
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => '{
                "state": {
                    "meta": {
                        "href": "https://online.moysklad.ru/api/remap/1.2/entity/contract/metadata/states/'.$deal.'",
                        "metadataHref": "https://online.moysklad.ru/api/remap/1.2/entity/contract/metadata",
                        "type": "state",
                        "mediaType": "application/json"
                    },
                    "id": "'.$deal.'",
                    "accountId": "'.$accountId.'",
                    "name": "Заключён",
                    "color": 34617,
                    "stateType": "Regular",
                    "entityType": "contract"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic '.$token,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

    public static function getAgreementID()
    {
        $uuid = auth()->user()->verified;
        $url = self::msUrl().'contract?filter=agent=https://online.moysklad.ru/api/remap/1.2/entity/counterparty/'.$uuid;
        $response = self::get($url);
        return $response->json()['rows'][0]['id'];
    }


    public static function getContract()
    {
        $id = self::getAgreementID();
        $url = self::msUrl().'contract/'.$id.'?expand=agent,state,accounts,ownAgent,ownAgent.accounts';
        $response = self::get($url);
        return $response->json();
    }

    
    public static function searchByProduct($type, $text)
    {
        $name = urlencode($text); // assortment
        $url = self::msUrl().'product?expand=images,positions&search='.$name;
        $response = self::get($url);
        return $response->json();
    }

    //getOrderCustomerOne
    public static function getInvoiceOne($id)
    {
        $url = self::msUrl().'invoiceout/'.$id.'?expand=state,agent,positions.assortment,positions.assortment.images,customerOrder';
        $response = self::get($url);
        return $response->json();
    }
    

    public static function getInvoices()
    {
        $uuid = auth()->user()->verified;
        $url = self::msUrl().'invoiceout?filter=agent=https://online.moysklad.ru/api/remap/1.2/entity/counterparty/'.$uuid;
        $response = self::get($url);
        $items = $response->json();
        $array = [];
        foreach($items['rows'] as $item) {
            $array[] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'sum' => $item['sum'],
                'agent' => self::getCounterParty($item['agent']['meta']['href']),
                'state' => self::getInvoiceoutMetadataStates(isset($item['state']['meta']['href']) ? $item['state']['meta']['href'] : ''),
                'created' => $item['created'],
                'payedSum' => $item['payedSum'],
                'moment' => $item['moment'],
                'paymentPlannedMoment' => isset($item['paymentPlannedMoment']) ? $item['paymentPlannedMoment'] : 'Нет данных',
            ];
        }
        return [
            'list' => $array,
            'count' => $items['meta']['size']
        ];
    }

    public static function getReports()
    {
        $uuid = auth()->user()->verified; // customerorder
        $url = self::msUrl().'customerorder?filter=agent=https://online.moysklad.ru/api/remap/1.2/entity/counterparty/'.$uuid;
        $response = self::get($url);
        $items = $response->json();
        $array = [];
        foreach($items['rows'] as $item) {
            $array[] = [
                'id' => $item['id'],
                'name' => $item['name'],
                'sum' => $item['sum'],
                'agent' => self::getCounterParty($item['agent']['meta']['href']),
                'state' => self::getInvoiceoutMetadataStates(isset($item['state']['meta']['href']) ? $item['state']['meta']['href'] : ''),
                'created' => $item['created'],
                'payedSum' => $item['payedSum'],
                'moment' => $item['moment'],
                'paymentPlannedMoment' => isset($item['paymentPlannedMoment']) ? $item['paymentPlannedMoment'] : 'Нет данных',
            ];
        }
        $return = [
            'list' => $array,
            'count' => $items['meta']['size']
        ];
        return $return;
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
        $url = self::msUrl().'invoiceout/'.$id.'?expand=state';
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
        if($url === '') {
            return [
                'name' => 'Нет данных',
                'color' => 7172984
            ];
        }
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
        $parts = parse_url($url);
        $arr = explode('?id=', $parts["fragment"]);
        return $arr[1];
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
        $params = '?expand=state,agent,positions,positions.assortment,positions.assortment.images,invoicesOut';
        $url = self::msUrl().'customerorder/'.$order.$params;
        // $url = self::msUrl().'customerorder/'.$order;
        $response = self::get($url);
        return $response->json();
        // [
        //     'id' => $neworder['id'],
        //     'updated' => $neworder['updated'],
        //     'deal' => $neworder['name'],
        //     'moment' => $neworder['moment'],
        //     'sum' => $neworder['sum'],
        //     'company' => self::getCounterParty($neworder['agent']['meta']['href']),
        //     'created' => $neworder['created'],
        //     'positions' => self::getCustomerOrderPositions($neworder['positions']['meta']['href']),
        //     'vatSum' => $neworder['vatSum'],
        //     'deliveryPlannedMoment' => isset($neworder['deliveryPlannedMoment']) ? $neworder['deliveryPlannedMoment'] : '',
        //     'payedSum' => $neworder['payedSum'],
        //     'shippedSum' => $neworder['shippedSum'],
        //     'invoicedSum' => $neworder['invoicedSum'],
        //     'state' => self::getInvoiceoutMetadataStates($neworder['state']['meta']['href']),
        //     'invoicesOut' => self::getInvoiceOut($neworder['invoicesOut'][0]['meta']['href'])
        // ];
    }
}