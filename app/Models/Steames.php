<?php

namespace App\Models;
use App\Models\MoySklad;


class Steames
{

    public static function getListURL($fiter)
    {
        $modal = MoySklad::searchByProduct('', $fiter);
        $array = [];
            foreach($modal["rows"] as $item) {
                $array[] = 'https://online.moysklad.ru/api/remap/1.2/entity/assortment?filter=id='.$item['id'];
            }
        return $array;
    }

    public static function getListResult($fiter)
    {
        // Steames::getListResult($fiter)
        $modal = MoySklad::searchByProduct('', $fiter);
        $array = [];
        foreach($modal["rows"] as $item) {
            $array[] = 'id='.$item['id'];
        }
        // id=3292240d-5e7f-11ed-0a80-0eca004678fc;id=426d5688-5064-11ed-0a80-05bf003d0d1a
        return 'https://online.moysklad.ru/api/remap/1.2/entity/assortment?filter='.implode(";", $array);
    }

    public static function getResult($fiter)
    {
        $urls = self::getListURL($fiter);
        $token = base64_encode(config('app.ms_login').':'.config('app.ms_password'));

        $mh = curl_multi_init();
        foreach ($urls as $i => $url) {
            $conn[$i] = curl_init($url);
            curl_setopt($conn[$i], CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($conn[$i], CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($conn[$i], CURLOPT_HTTPHEADER, array(
                'Authorization: Basic '.$token
            ));
            curl_multi_add_handle ($mh, $conn[$i]);
        }
        do {
            $status = curl_multi_exec($mh, $active);
            if ($active) {
                curl_multi_select($mh);
            }
        } while ($active && $status == CURLM_OK);

        for ($i = 0; $i < count($urls); $i++) {
            $res[$i] = curl_multi_getcontent($conn[$i]); 
            curl_multi_remove_handle($mh, $conn[$i]);
            curl_close($conn[$i]);
        }
        curl_multi_close($mh);
        $result = [];
        for ($i = 0; $i <= count($urls)-1; $i++) {
            $result[] = json_decode($res[$i], true);
        };
        return [
            'count' => count($urls),
            'rows' => $result
        ];
    }
}