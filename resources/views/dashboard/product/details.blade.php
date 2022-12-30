@extends('layout/main')

@php
    $datetime = $time::now()->addHours(3)->locale('ru')->translatedFormat('l, j F Y, H:i');
    $uuid = auth()->user()->verified;
@endphp

@section('title', $product['name'])

@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    @if($product['name'] === 'Товар не найден')
    <span class="text-muted">{{$product['name']}}</span>
    @else
    <a href="/dashboard/catalog/category/{{$product['catalog']['id']}}" class="text-muted">
        {{$product['catalog']['name']}}
    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали {{$product['paymentItemType']}}а</span>    
    @endif
</div>
@endsection


@section('content')
    @if($product['name'] === 'Товар не найден')
        @if (session('status'))
            <x-alert type="success" close="false" message="{{ session('status') }}" />
        @else
            <x-alert type="danger" close="false" message="Товар удалён или не верно указан ID товара" />
            <form action="" method="post" class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="fw-bold m-0">Связаться с менеджером</h5>
                </div>
                <div class="card-body">
                    @csrf
                    <input type="hidden" name="date" value="{{$datetime}}">
                    <input type="hidden" name="company" value="{{$uuid}}">
                    <input type="hidden" name="message" value="ID товар {{$id}} не найден">
                    <input type="hidden" name="id" value="{{$id}}" />
                    <input type="hidden" name="num" value="{{time()}}" />
                    <div class="mb-2">
                        <label>Ваше имя</label>
                        <input type="text" class="form-control" name="name" value="" />
                    </div>
                    <div>
                        <label>Ваш телефон</label>
                        <input type="text" class="form-control" name="phone" value="" />
                    </div>
                </div>
                <div class="card-footer bg-white border-light">
                    <x-button type="submit" color="dark" text="Отправить" icon="forward_to_inbox" />
                </div>
            </form>        
        @endif

    @else
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-3">
                    <img src="{{$product['src']['images']}}" class="w-100 rounded" alt="{{$product['name']}}" />
                    <div class="text-center py-3">
                        @if($product['barcodes'] === 'Нет данных')
                        @else
                        {!! DNS1D::getBarcodeSVG($product['barcodes'], 'EAN13', 1.7,60) !!}
                        @endif
                    </div>
                    @if($product['quantity'] != 0)
                    <div 
                        id="cards1" 
                        class="d-flex flex-column"
                        data-card="{{$product['id']}},{{$product['article']}},{{$product['name']}},1,{{$product['salePrices']}},{{$product['salePrices']}}" 
                        v-on:click="addToCard('s1')"
                    >
                    <x-button type="button" color="dark" text="В корзину" icon="shopping_cart" />
                    </div>
                    @endif
                    
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
                    <!-- <p class="mb-1">
                        <b>Внешний код:</b>
                        {{--$product['externalCode']--}}
                    </p> -->
                    <p class="mb-1">
                        <b>НДС:</b>
                        {{$product['vat']}}%
                    </p>

                    <p class="mb-1">
                        <b>Цена <i class="fw-light text-muted">(за 1 шт.)</i>:</b>
                        @php echo number_format(($product['salePrices']) / 100, 2, '.', ' ') @endphp ₽
                    </p>

                    <p class="mb-1">
                        <b>Тип маркеровки:</b>
                        {{$product['trackingType']}}
                    </p>
                    <!-- <div class="mb-3">
                        <label class="form-label fw-bold m-0">ID {{--$product['paymentItemType']--}}а:</label>
                        <input type="text" name="id" class="form-control" value="{{--$product['id']--}}" placeholder="Идентификатор..." />
                        <div class="form-text">Вы можете сообщить этот ID менеджеру при поиске данной позиции</div>
                    </div> -->
                    <p>
                        @if($product['quantity'] == 0)
                        <div class="badge bg-soft-danger text-danger px-3">
                            Нет в наличии
                        </div>
                        @else
                        <div class="badge bg-soft-success px-3">
                            <div class="d-flex align-items-center gap-2 text-success">
                                В наличии 
                                <span class="badge bg-success">
                                {{$product['quantity']}}
                                </span>                                
                            </div>
                        </div>
                        @endif
                    </p>
                </div>
            </div>            
        </div>
    </div>
    @endif
    <pre><?php //var_dump($_COOKIE);?></pre>
@endsection