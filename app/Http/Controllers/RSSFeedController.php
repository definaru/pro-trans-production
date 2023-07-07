<?php

namespace App\Http\Controllers;

use App\Models\MoySklad;
use Illuminate\Http\Request;
use App\Models\Data\Replacement;

class RSSFeedController extends Controller
{
    // feedRSS
    public function feedRSS()
    {
        // $yml = [
        //     [
        //         'id' => 'c18098bb-b76b-11ed-0a80-025b00160c06',
        //         'article' => 'A4720780480',
        //         'alt_article' => 'A4720780180',
        //         'name' => 'Прокладка',
        //         'description' => 'Прокладка трубопровода высокого давления к распределителю топлива.',
        //         'price' => 1600
        //     ],
        //     [
        //         'id' => '810e4183-5064-11ed-0a80-05bf003d33a9',
        //         'article' => 'A4710902755',
        //         'alt_article' => 'A4710902455',
        //         'name' => 'Комплект топливных фильтров',
        //         'description' => 'Фильтр топливный ДВС. Фильтр очистки топлива дизелей, сменный элемент.',
        //         'price' => 10283
        //     ],
        //     [
        //         'id' => '88a54430-48ad-11ed-0a80-0c87007f419c',
        //         'article' => 'A4731800809',
        //         'alt_article' => '',
        //         'name' => 'Фильтр масляный',
        //         'description' => 'Фильтр масляный ДВС. Фильтр для очистки масла, сменный элемент.',
        //         'price' => 3785
        //     ],
        //     [
        //         'id' => '54ddbc1a-90e3-11ed-0a80-0f4a0011b022',
        //         'article' => 'A4700908352',
        //         'alt_article' => '',
        //         'name' => 'Фильтр топливный',
        //         'description' => 'Фильтр очистки топлива дизелей, сменный элемент.',
        //         'price' => 6633
        //     ],
        //     [
        //         'id' => '887f3a9f-48ad-11ed-0a80-0c87007f4188',
        //         'article' => 'A4710700887',
        //         'alt_article' => '',
        //         'name' => 'Форсунка топливная',
        //         'description' => 'Форсунка для подачи топлива в камеру сгорания ДВС автомобиля.',
        //         'price' => 61545
        //     ],
        //     [
        //         'id' => '85516e33-5064-11ed-0a80-05bf003d3521',
        //         'article' => 'A5410900151',
        //         'alt_article' => '',
        //         'name' => 'Фильтр топливный',
        //         'description' => '',
        //         'price' => 1990
        //     ],
        //     [
        //         'id' => '56305339-90e3-11ed-0a80-0f4a0011b086',
        //         'article' => 'A0060179721',
        //         'alt_article' => 'A0030100651',
        //         'name' => 'Форсунка топливная',
        //         'description' => 'Фильтр топливный ДВС, сменный элемент. Используется для фильтрации топливной системы двигателя от грязи и вредных примесей.',
        //         'price' => 8000
        //     ],
        //     [
        //         'id' => 'c0bac601-b76b-11ed-0a80-025b00160b85',
        //         'article' => 'A0290742502',
        //         'alt_article' => 'A0280745902',
        //         'name' => 'Насос-форсунка топливная',
        //         'description' => 'Топливная насос-форсунка является топливным насосом высокого давления для каждого цилиндра двигателя. Определяет количество топлива необходимое для впрыска в камеру сгорания, которое передает через трубку форсунке двигателя. Управление электронное, посредством коммуникации с блоком управления и датчиками автомобиля.',
        //         'price' => 29000
        //     ],
        //     [
        //         'id' => '569d6ead-90e3-11ed-0a80-0f4a0011b0bf',
        //         'article' => 'A0262509201',
        //         'alt_article' => 'A0222503801',
        //         'name' => 'Комплект сухого сцепления',
        //         'description' => '',
        //         'price' => 59000
        //     ],
        //     [
        //         'id' => '88e982f5-48ad-11ed-0a80-0c87007f41c4',
        //         'article' => 'A9604200120',
        //         'alt_article' => 'A0064205220',
        //         'name' => 'Колодки',
        //         'description' => 'Тормозные колодки автомобиля.',
        //         'price' => 14800
        //     ]
        // ];
        //$replace = Replacement::getResultReplacement('A0050174521')[0]->analog;
        $product = MoySklad::getAllProduct(300, 0);
        $yml = [];
        foreach($product['rows'] as $item) {
            $yml[] = [
                'id' => $item['id'],
                'article' => $item['article'],
                'alt_article' => self::isReplacement($item['article']),
                'name' => mb_convert_case($item['name'], MB_CASE_TITLE, "UTF-8"),
                'description' => isset($item['description']) ? $item['description'] : '-',
                'price' => floor($item['salePrices'][0]['value']/100)
            ];
        }
        
        //return response()->json($replace);
        return response()->view('feed', ['yml' => $yml])->header('Content-Type', 'text/xml');
    }


    public function isReplacement($text)
    {
        $replace = Replacement::getResultReplacement($text);
        return $replace[0]->analog ?? '';
    }

}
