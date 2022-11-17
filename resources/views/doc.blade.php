@extends('layout/page')

@section('title', 'Юридическая информация')

@section('content')
<div class="py-5">
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="/doc/license" class="text-decoration-none">Пользовательское соглашение</a></li>
        <li class="list-group-item"><a href="/doc/privatepolice" class="text-decoration-none">Политика конфиденциальности</a></li>
        <li class="list-group-item"><a href="/doc/responsibility" class="text-decoration-none">Отказ от ответственности</a></li>
        <li class="list-group-item"><a href="/contact" class="text-decoration-none">Контакты</a></li>
    </ul>
</div>
@endsection