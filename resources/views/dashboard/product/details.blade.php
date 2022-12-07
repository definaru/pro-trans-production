@extends('layout/main')

@php
    error_reporting (E_ALL ^ E_NOTICE);
    if(isset($data['errors'])) {
        $title = 'Товар не найден';
    } else {
        $title = $product['name'];
    }
@endphp

@section('title', $title)

@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard">Панель</a>
    <span class="text-secondary">/</span>
    <a href="/dashboard/catalog/category/{{$product['catalog']['id']}}">
        {{$product['catalog']['name']}}
    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали {{$product['paymentItemType']}}а</span>
</div>
@endsection


@section('content')
    @if($data['errors'])
        <x-alert type="danger" message="{!!$data['errors'][0]['error']!!}" />
    @else
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-3">
                    <img src="{{$product['src']['images']}}" class="w-100 rounded" alt="{{$product['name']}}" />
                    <div class="text-center py-3">
                        {!! DNS1D::getBarcodeSVG($product['barcodes'], 'EAN13', 1.7,60) !!}
                    </div>
                    <div>
                    <x-button type="a" href="#" color="dark" text="В корзину" icon="shopping_cart" />
                    </div>
                </div>
                <div class="col-md-9">
                    <p class="mb-1">
                        <b>Обновлён:</b>
                        {{$time::parse($product['updated'])->locale('ru')->translatedFormat('d F Y, H:i')}}
                    </p>
                    <p class="mb-1">
                        <b>Артикул:</b>
                        {{$product['article']}}
                    </p>
                    <p class="mb-1">
                        <b>Внешний код:</b>
                        {{$product['externalCode']}}
                    </p>
                    <p class="mb-1">
                        <b>НДС:</b>
                        {{$product['vat']}}%
                    </p>
                    <!-- <p class="mb-1">
                        <b>Мин. цена:</b>
                        @php echo number_format(($product['minPrice']) / 100, 2, '.', ' ') @endphp ₽
                    </p> -->
                    <p class="mb-1">
                        <b>Цена <i class="fw-light text-muted">(за 1 шт.)</i>:</b>
                        @php echo number_format(($product['salePrices']) / 100, 2, '.', ' ') @endphp ₽
                    </p>
                    <p class="mb-1">
                        <b>Масса:</b>
                        {{$product['weight']}} кг.
                    </p>
                    <p class="mb-1">
                        <b>Объем:</b>
                        {{$product['volume']}}
                    </p>
                    <p class="mb-1">
                        <b>Тип маркеровки:</b>
                        {{$product['trackingType']}}
                    </p>
                    <div class="mb-3">
                        <label class="form-label fw-bold m-0">ID {{$product['paymentItemType']}}а:</label>
                        <input type="text" name="id" class="form-control" value="{{$product['id']}}" placeholder="Идентификатор..." />
                        <div class="form-text">Вы можете сообщить этот ID менеджеру при поиске данной позиции</div>
                    </div>
                    
                    <pre><?php //var_dump($product);?></pre>
                    <pre><?php // var_dump($data);?></pre>  
                </div>
            </div>            
        </div>
    </div>


    @endif
@endsection