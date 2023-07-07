<?php

namespace App\Models;

use Shuchkin\SimpleXLSX;
use PhpOffice\PhpSpreadsheet\IOFactory;




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

}