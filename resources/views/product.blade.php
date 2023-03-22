@php
    $str = mb_convert_case($product['name'], MB_CASE_TITLE, "UTF-8");
    $result = array_merge($listorder, $bestsellers, $alllist);
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

    // try {
    //     $first_names = array_column($result, 'image', 'href')[$id];
    //     $image = $first_names; 
    // } catch (Exception $e) {
    //     $image = $product['src']['images'];
    // }
    $image = $data[0]['image'] !== '' ? trim($data[0]['image'], '.') : '/img/placeholder.png';
@endphp
@extends('layout/index', [
    'title' => $str.' | Проспект Транс',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => $product['article']. ', MERCEDES-BENZ \ '.number_format(($product['salePrices']) / 100, 2, '.', ' ').' ₽',
    'image' => $url.$image
])
@section('title', $str.' | Проспект Транс')
@section('content')
    <section class="bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 mt-5 mt-lg-0">
                    <div class="d-flex justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item">
                                    <a href="/products/mersedes-benz">
                                        {{$product['catalog']['name']}}
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{$str}}
                                </li>
                            </ol>
                        </nav>                        
                        @role('admin')
                            <a href="/dashboard/product/details/{{$id}}">ред.</a>
                        @endrole
                    </div>

                </div>
                <div class="col-12 col-lg-6">
                    <div class="pe-0 pe-lg-5">
                        <img 
                            src="{{$image}}" 
                            class="w-100 rounded " 
                            style="height: 450px;object-fit: cover"
                            alt="{{$str}}" 
                        />
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="fw-bold lh-1 display-5 mt-5 mt-lg-0">{{$str}}</h1>
                    <p class="fs-5 w-100 text text-secondary"><strong>Артикул:</strong> {{$product['article']}}</p>
                    <span id="price" class="d-none">@php echo number_format(($product['salePrices']) / 100, 2, '.', '') @endphp</span>
                    <p class="fs-4 w-100 text">{!!$currency::summa($product['salePrices'])!!} <span id="summa"></span></p>
                    <p class="fs-6 w-100 text text-secondary">Описания нет</p>
                    <div class="w-100">
                        @if($product['quantity'] == 0 || $product['quantity'] < 0)
                        <p class="label-danger">
                            Нет в наличии
                        </p>
                        @else
                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                            <link itemprop="availability" href="https://schema.org/InStock"> 
                            В наличии
                            <span id="quantity">{{$product['quantity']}}</span>
                            <span class="d-none" id="total">{{$product['quantity']}}</span>
                        </p>                        
                        @endif
                    </div>
                    <hr style="color: #ddd" />
                    <div class="d-grid d-lg-flex align-items-center gap-4 w-100">
                        @if($product['quantity'] == 0 || $product['quantity'] < 0)
                            <button onclick="isUserSubscribe()" class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <span class="material-symbols-outlined">drive_file_rename_outline</span>
                                Подписаться на товар
                            </button>   
                        @else
                            <div class="d-flex justify-content-center rounded p-3 bg-white">
                                <span onclick="changeTotal('add');" class="material-symbols-outlined btn py-1">add</span>
                                <span id="count" class="btn py-1">1</span>
                                <button id="remove" onclick="changeTotal('remove');" class="material-symbols-outlined btn py-1 border-0" disabled>remove</button>
                            </div>
                            <div onclick="addInCard()" class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                                В корзину
                            </div>                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection