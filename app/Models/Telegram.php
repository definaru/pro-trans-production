<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;


class Telegram 
{

    public static function layouTicket($num, $product, $link)
    {
        $msd = '<b>Тикет #'.$num.'</b>'.PHP_EOL.
        '<b>Сообщение:</b>'.PHP_EOL.$product.PHP_EOL.
        '<a href="https://prospekt-parts.com/dashboard/product/details/'.$link.'">[Подробнее]</a>';
        return $msd;
    }

    public static function layout($num, $product, $link)
    {
        $msd = '<b>Запрос #'.$num.'</b>'.PHP_EOL.
        '<b>Информация:</b>'.PHP_EOL.$product.PHP_EOL.
        '<a href="'.$link.'">[Подробнее]</a>';
        return $msd;
    }

    public static function getMessageTelegram($num, $product, $link, $type = '')
    {
        $msd = $type === 'ticket' ? self::layouTicket($num, $product, $link) : self::layout($num, $product, $link);
        $url = config('app.tg_url').config('app.tg_apikey').'/sendMessage';
        $response = Http::asForm()->post($url, [
            'text' => htmlspecialchars_decode($msd),
            'chat_id' => 201726918,
            'parse_mode' => 'HTML'
        ]);
        return $response;
    }

}