@extends('layout/index', [
    'title' => 'Контакты | Проспект Транс',
    'keywords' => 'контакты, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Контактная информация компании ООО "Проспект Транс"',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])

@section('title', 'Контакты')

@section('content')
<div class="w-100" style="background-image: url(/img/5464765787695.jpg);background-position: 0px -382px;background-attachment: fixed;background-size: cover;height: 250px;"></div>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mt-5 text">
                    <h6 class="text-secondary">Контакты</h6> 
                    
                    <h3 class="text-dark mb-4">{{ config('app.name') }}</h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <p><strong>ИНН:</strong> 9715366031</p>
                            <p><strong>ОГРН:</strong> 1197746624107</p>
                            <p><strong>КПП:</strong> 771501001</p>            
                        </div>
                        <div class="col-12 col-md-8">
                            <p><strong>E-mail: </strong> {!! $contact::getEmail(config('app.email'), ['text-muted']) !!}</p>
                            <p><strong>Телефон:</strong> {!! $contact::getPhone(config('app.phone'), ['text-muted']) !!}</p>
                            <p><strong>Юридический адрес:</strong> {{ config('app.address') }}</p>
                            <div class="d-flex align-items-center gap-3">
                                <div class="border p-2" style="width:100px">
                                    <img src="/img/qr.png" class="w-100" alt="QR код" />
                                </div>      
                                <div>
                                    <strong>QR-code Визитка</strong>  
                                    <p class="m-0">для мобильного телефона.</p> 
                                    <a href="https://yandex.ru/maps/-/CCUG7IeaKC" target="_blank" rel="noopener noreferrer">
                                        Оставить отзыв
                                    </a>
                                </div>                          
                            </div>

                        </div>
                    </div>

                    <div class="d-block mt-3">
                        <a href="/doc" class="btn btn-dark px-4">Юридическая информация</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-light border-top">
    <p class="container mb-1">
        <strong>Фактический Адрес:</strong> 
        <a href="https://yandex.ru/maps/-/CCUG7IeaKC" target="_blank" rel="noopener noreferrer">
            141006, г.Мытищи, Московская область, 4536-й проезд, стр. 10
        </a> 
    </p>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acb78d2e01e4906db46d1cb905adc20776626bb0d53f91909978164445bf6ffa7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
</div>
@endsection