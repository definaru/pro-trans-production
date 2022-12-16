<?php

namespace App\Models;


class Telegram 
{

    public static function layout($num, $product, $link)
    {
        $msd = '<b>Тикет #'.$num.'</b>'.PHP_EOL.
        '<b>Сообщение:</b>'.PHP_EOL.$product.PHP_EOL.
        '<a href="https://prospekt-parts.com/dashboard/product/details/'.$link.'">[Подробнее]</a>';
        return $msd;
    }

    public static function getMessageTelegram($num, $product, $link)
    {
        $msd = self::layout($num, $product, $link);
        $action = 201726918;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => config('app.tg_url').config('app.tg_apikey').'/sendMessage',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'text='.urlencode($msd).'&chat_id='.$action.'&parse_mode=HTML',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

}