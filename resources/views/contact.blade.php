@extends('layout/page')

@section('title', 'Контакты')

@section('content')
<div class="mt-5">
    <h6 class="text-secondary">Компания</h6> 
    <h3 class="text-dark mb-4">{{ config('app.name') }}</h3>
    <div class="row">
        <div class="col-md-5">
            <p><strong>ИНН:</strong> 9715366031</p>
            <p><strong>ОГРН:</strong> 1197746624107</p>
            <p><strong>КПП:</strong> 771501001</p>            
        </div>
        <div class="col-md-7">
            <p><strong>E-mail: </strong> {!! $detail::getEmail(config('app.email'), ['text-prymary', 'text-decoration-none']) !!}</p>
            <p><strong>Телефон:</strong> {!! $detail::getPhone(config('app.phone'), ['text-prymary', 'text-decoration-none']) !!}</p>
            <p><strong>Адрес:</strong> {{ config('app.address') }}</p>
        </div>
    </div>


    <br />
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ae204413721b85b4adabeeed778581d0f228173708a5637c6299c74e9a74857f1&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    <p><a href="/doc">Юридическая информация</a></p>
</div>
@endsection