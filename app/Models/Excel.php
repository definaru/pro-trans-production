<?php

namespace App\Models;

use Shuchkin\SimpleXLSX;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Goods;


class Excel
{

    public static function parse($path, $sheet = false)
    {
        if ( $xlsx = SimpleXLSX::parse($path) ) {
            return $sheet ? $xlsx->sheetNames() : $xlsx->rows();
        } else {
            return false;
            //SimpleXLSX::parseError();
        }
    }


    public static function reader($file)
    {
        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
        $spreadsheet = $reader->load($file);
        $worksheet = $spreadsheet->getActiveSheet();
        return $worksheet;
    }

    // public function quantitys($val)
    // {
    //     // = ;
    //     $files = './img/xml/data.json';
    //     if (file_exists($files)){
    //         $json = json_decode(file_get_contents($files), true);
    //         $quantity = array_filter($json, function($a){return $a['article'] == $value;});
    //         //return $quantity; 
    //         //$res = empty($quantity) ? 0 : array_values($quantity)[0]['volume'];
    //     }   
    //     //} else {
    //     //    return 0;
    //     //}
    //     //return $value;
    // }


    public static function insert($db)
    {
        foreach($db as $item) {
            $data = Goods::updateOrCreate(['article' => $item['article']], 
            [
                'link' => $item['id'],
                'image' => '',
                'article' => $item['article'],
                'name' => $item['name'],
                'description' => isset($item['description']) ? $item['description'] : '',
                'price' => $item['salePrices'][0]['value'],
                'quantity' => $item['volume']
            ]);            
        }
    }

}