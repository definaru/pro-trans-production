<?php
namespace App\Models\Data;

use App\Models\MoySklad;

class Replacement
{
    // A0064201520
    // A0064205320
    // A0084207320    
    public static function parts()
    {
        return [
            [
                'analog' => 'A5410502022',
                'part' => 'A5410501222',
                'link' => '/product/mercedes-benz/88cdad09-48ad-11ed-0a80-0c87007f41b4'                
            ],
            [
                'analog' => 'A9604200320', 
                'part' => 'A0064201520',
                'link' => '/product/mercedes-benz/#'

            ],
            [
                'analog' => 'A9604200320',
                'part' => 'A0064205320',
                'link' => '/product/mercedes-benz/#'
            ],
            [
                'analog' => 'A9604200320',
                'part' => 'A0084207320',
                'link' => '/product/mercedes-benz/#'
            ]
        ];
    }

    public static function getReplacementPart($text)
    {
        if($text) {
            $product = MoySklad::searchAssortmentByArticle($text);
            //return response()->json($product);            
            return $product;            
        }
        return '';
    }

    
}