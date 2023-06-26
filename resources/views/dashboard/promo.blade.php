@extends('layout/main')
@section('title', $uuid)

@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>   
    <span class="text-secondary">/</span>
    <span class="text-muted">Промо-материалы</span>    
</div>
@endsection

@section('content') 
<div class="row">
    <div class="col-12 col-lg-8 mx-auto">
        <div class="row">
            <div class="col-12">
                <h2 class="fw-bold">{{$model['header']}}</h2>
                <hr />
                <a class="btn btn-dark px-4 icon-link me-2" href="#">
                    <x-icon-check />
                    Купить
                </a>
                @if ($model['pdf'] !== '-' || $model['pdf'] !== '')
                <a 
                    target="_blank"
                    class="btn btn-danger px-4 icon-link"
                    href="{{$model['pdf']}}"
                >
                    <x-icon-download />
                    Скачать PDF
                </a>                    
                @endif
                <img src="{{$model['banner']}}" class="w-100 rounded my-3" alt="{{$uuid}}" />
            </div>
        </div>
        <div class="card card-data border-0 shadow">
            <div class="card-body">

                {!! $model['description'] !!}
                
                <hr />
                <a class="btn btn-dark px-4 icon-link me-2" href="#">
                    <x-icon-check />
                    Купить
                </a>
                @if ($model['pdf'] !== '-' || $model['pdf'] !== '')
                <a 
                    target="_blank"
                    class="btn btn-danger px-4 icon-link"
                    href="{{$model['pdf']}}"
                >
                    <x-icon-download />
                    Скачать PDF
                </a>                    
                @endif
            </div>
        </div>
    </div>
</div>
@endsection