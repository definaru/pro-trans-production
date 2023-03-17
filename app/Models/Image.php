<?php
namespace App\Models;

class Image
{
    public static function src($uuid)
    {
        $item = Goods::where('link', $uuid)->get();
        //return response()->json($item);
        return $item[0]['image'] === '' ? '/img/placeholder.png' : trim($item[0]['image'], ".");
    }
}