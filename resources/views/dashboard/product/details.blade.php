@php
    $datetime = $time::now()->addHours(3)->locale('ru')->translatedFormat('l, j F Y, H:i');
    $uuid = auth()->user()->verified;
@endphp

@extends('layout/main')
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
                    @role('customer')
                        <img 
                            src="<?=isset($image[0]['image']) ? trim($image[0]['image'], '.') : '/img/placeholder.png';?>" 
                            alt="{{$product['name']}}" 
                            class="w-100 rounded" 
                        /> 
                    @endrole
                    @role('admin')
                    <form id="loaderphoto" onchange="loadPfoto()" action="/api/files" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="position-relative">
                            @if (session('text'))
                                <div id="successphoto" class="d-none">{{ session('text') }}</div>
                            @endif
                            <img 
                                src="<?=isset($image[0]['image']) ? trim($image[0]['image'], '.') : '/img/placeholder.png';?>" 
                                alt="{{$product['name']}}" 
                                class="w-100 rounded" 
                            />
                            <div class="position-absolute delete-image">
                                <span class="material-symbols-outlined">delete</span>
                            </div>
                            <input type="file" name="file" accept="image/png, image/jpeg" class="d-none" />
                            <input type="hidden" name="uuid" value="{{$id}}" />
                            <div id="isloader" class="d-flex align-items-center gap-1 mt-2"></div>
                        </label>
                    </form>
                    @endrole
                    <div class="text-center py-3">
                        @if($product['barcodes'] === 'Нет данных')
                        @else
                        {!! DNS1D::getBarcodeSVG($product['barcodes'], 'EAN13', 1.7,60) !!}
                        @endif
                    </div>
                </div>
                <div class="col-md-9">

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
                    <p class="mb-1">
                        <b>Обновлён:</b>
                        <small class="fw-light text-muted">
                            {{$time::parse($product['updated'])->locale('ru')->translatedFormat('d F Y, H:i')}}
                        </small>
                    </p>
                    <!-- <div class="mb-3">
                        <label class="form-label fw-bold m-0">ID {{--$product['paymentItemType']--}}а:</label>
                        <input type="text" name="id" class="form-control" value="{{--$product['id']--}}" placeholder="Идентификатор..." />
                        <div class="form-text">Вы можете сообщить этот ID менеджеру при поиске данной позиции</div>
                    </div> -->

                    <p>
                        @if($product['quantity'] == 0 || $product['quantity'] < 0)
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
                    <div class="d-grid w-25">
                    @if($product['quantity'] == 0 || $product['quantity'] < 0)
                        <div  
                            id="preorders1"
                            data-order="{{$product['id']}},{{$product['article']}},{{$product['name']}},1,{{$product['salePrices']}}"
                            v-on:click="addToOrder('s1')"
                        >
                            <x-button type="button" color="secondary" text="Предзаказ" icon="shopping_cart" />
                        </div>
                    @else
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
                </div>
            </div>            
        </div>
    </div>
    @endif
    <pre><?php //var_dump($_COOKIE);?></pre>
@endsection