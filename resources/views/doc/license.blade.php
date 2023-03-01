@extends('layout/index', [
    'title' => 'Пользовательское соглашение | Проспект Транс',
    'keywords' => 'сервис, service, информация, автосервис, мерседес бенц, актрос',
    'description' => 'Пользовательское соглашение компании ООО "Проспект Транс"',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])

@section('title', 'Пользовательское соглашение')

@section('content')
<section class="bg-white">
    <div class="container">
        <div class="row" style="height: 600px">
            <div class="col-md-8 offset-md-2">
                <h2>Пользовательское соглашение</h2>
                <p><a href="/doc">Юридическая информация</a></p>
            </div>
        </div>
    </div>
</section>
@endsection