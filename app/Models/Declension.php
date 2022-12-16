<?php

namespace App\Models;


class Declension
{

    public static function diff($n, $s1, $s2, $s3, $b = false)
    {
        $m = $n % 10; $j = $n % 100;
        if($b) {$n = $n;}
        if($m==0 || $m>=5 || ($j>=10 && $j<=20)) {return $s3;}
        if($m>=2 && $m<=4) {return $s2;}
        return $n.' '.$s1;
    }

    public static function rub($num)
    {
        return self::diff($num, 'рубль', 'рубля', 'рублей');
    }

    public static function cart($num)
    {
        return self::diff($num, 'товар', 'товара', 'товаров');
    }

    public static function name($num)
    {
        return self::diff($num, 'наименование', 'наименования', 'наименований');
    }

}