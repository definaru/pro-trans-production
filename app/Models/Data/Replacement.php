<?php
namespace App\Models\Data;

use App\Models\MoySklad;
use App\Models\Replacement as Parts;


class Replacement
{

    public static function getResultReplacement($text)
    {
        return Parts::where('part', 'like', '%' . $text)->get();
    }

    public static function getReplacementPart($text)
    {
        if($text) {
            return MoySklad::searchAssortmentByArticle($text);
            //return response()->json($product);
        }
        return '';
    }

}