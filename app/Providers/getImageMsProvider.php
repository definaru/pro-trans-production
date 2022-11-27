<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;


class getImageMsProvider
{

    public static function Image($id)
    {
        $url = 'https://online.moysklad.ru/api/remap/1.2/entity/product/'.$id.'/images';
        $response = Http::withBasicAuth(config('app.ms_login'), config('app.ms_password'))->get($url);
        return $response->json();
    }

}
