<?php

namespace App\Models;

use Shuchkin\SimpleXLSX;

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

}