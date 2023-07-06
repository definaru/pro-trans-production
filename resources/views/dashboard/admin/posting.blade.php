@php
    $accept = '.xlsx, .xlsm, .xltm, .xls, .csv';
@endphp

@extends('layout/main')
@section('title', 'Товары')

@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>  
    <span class="text-secondary">/</span>
    <span class="text-muted">Товары</span>    
</div>
@endsection

@section('content')
<h6 class="text-muted">Для оприходования товаров, выберите склад и загрузите Excel таблицу.</h6>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm mb-3">
            <div class="card-body">
                <x-alert 
                    type="warning" 
                    header="Внимание: " 
                    message="Принимаются форматы таблиц {{$accept}}" 
                    close="true" 
                />
                <form action="" method="get" class="d-flex flex-column gap-3 mt-5 w-50">
                    <label class="d-flex align-items-center gap-2">
                        <span class="material-symbols-outlined fs-1 mx-2">pallet</span>
                        <div class="w-100">
                            <select class="form-select">
                                <option value="" disabled selected>Выберите склад...</option>
                                @foreach ($stock['rows'] as $item)
                                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                                @endforeach
                            </select>                            
                        </div>
                    </label>
                    <label class="d-flex align-items-center gap-2">
                        <x-icon-excel />
                        <div class="w-100">
                            <input type="file" name="file" accept="{{$accept}}" class="form-control" />
                        </div>
                    </label>
                    <div><hr class="m-0" /></div>
                    <div>
                        <button 
                            type="submit"
                            class="btn btn-dark px-4 icon-link"
                        >
                            <x-icon-download />
                            Загрузить
                        </button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection