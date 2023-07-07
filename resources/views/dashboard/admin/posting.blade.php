@php
    $accept = '.xlsx, .xlsm, .xltm, .xls, .csv';
    $table = $xml::parse('./img/xml/for_table_prospect_parts.xlsx');

    //$table = $xml::parse('img/goods/promo/'.$stock.'/GEARAX.xlsx');
    //$tables = $xml::parse('img/goods/promo/'.$stock.'/GEARAX.xlsx', true);
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

<div class="row">
    <div class="col">
        <table class="table">
            <pre><?php //var_dump($table);?></pre>
            @if ($table)
                <table class="table table-striped table-hover table-bordered">
                    <tr>
                        <td>#</td>
                        <td>Наименование</td>
                        <td>Артикул</td>
                        <td>Цена</td>
                        <td>Описание</td>
                        <td>Страна</td>
                        <td>НДС</td>
                        <td>Количество</td>
                        <td>ГТД</td>
                    </tr> 
                    @foreach ($table as $item)
                        @if ($item[0] !== 'UUID')
                        <tr>
                            <td>{{$loop->iteration-1}}</td>
                            <td>{{$item[4]}}</td>
                            <td>{{$item[6]}}</td>
                            <td>{{$item[12]}}</td>
                            <td>{{$item[21]}}</td>
                            <td>{{$item[24]}}</td>
                            <td>{{$item[25]}}</td>
                            <td>{{$item[27]}}</td>
                            <td>{{$item[29]}}</td>
                        </tr>    
                        @endif
                    @endforeach
                </table> 
            @endif
<?php /*
            @foreach ($table as $row)
                <tr>
                @php
                    $cellIterator = $row->getCellIterator();
                    $cellIterator->setIterateOnlyExistingCells(FALSE);                        
                @endphp
                @foreach ($cellIterator as $cell)
                    <td><?=$cell->getValue();?></td>
                @endforeach
                </tr>
            @endforeach
*/ ?>

        </table>        
    </div>
</div>
@endsection