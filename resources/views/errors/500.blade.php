@extends('layout/error', [
    'title' => "Ошибка",
    'errorCode' => '500',
    'text' => 'Сервер не отвечает',
])
@section('title', 'Ошибка')