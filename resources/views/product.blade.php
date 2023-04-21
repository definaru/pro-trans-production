@php
    $str = mb_convert_case($product['name'], MB_CASE_TITLE, "UTF-8");
    $result = array_merge($listorder, $bestsellers, $alllist);
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $image = $images::src($id);
    $price = $currency::rubl($product['salePrices']);
    $keywords = $seo::keywords($images::text($id)['description']);
    $description = isset($product['description']) ? 
        $product['article'] . ' | ' . $product['description'] : 
        $product['article']. ', MERCEDES-BENZ \ '.$price;
@endphp
@extends('layout/index', [
    'title' => $str,
    'keywords' => $keywords.', ремонт, ремонт машин в мытищи, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => $description,
    'image' => $url.$image
])
@section('title', $str.' | Проспект Партс')
@section('content')
    <section class="bg-secondary-subtle" itemscope itemtype="http://schema.org/Product">
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
                            class="w-100 rounded" 
                            itemprop="image"
                            style="height: 450px;object-fit: cover"
                            alt="{{$str}}" 
                        />
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h1 itemprop="name" class="fw-bold lh-1 display-5 mt-5 mt-lg-0">{{$str}}</h1>
                    <meta itemprop="brand" content="MERCEDES-BENZ" />
                    <p class="d-flex align-items-center gap-2 fs-5 w-100 text text-secondary">
                        <strong itemprop="model">Артикул:</strong> {{$product['article']}}
                        <span 
                            data-bs-toggle="tooltip" 
                            data-bs-title="Деталь на заказ"
                            class="text-primary cp mb-1" 
                        >
                            <x-icon-help color="#8630a3" />
                        </span>
                    </p>
                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <meta itemprop="price" content="{{$currency::rubl($product['salePrices'], '')}}" /> 
                        <meta itemprop="priceCurrency" content="RUB" /> 
                        <div class="d-flex align-items-center justify-content-start gap-3">
                            <p class="fs-4 text m-0">{!!$currency::summa($product['salePrices'])!!}</p>
                            <div class="vr" v-if="count !== 1"></div>
                            <div v-html="resultSumma('{{$product['salePrices']}}', count)" v-if="count !== 1" class="text text-success fw-bold"></div>                        
                        </div>                        
                    </div>


                    <div class="w-25">
                        @if ($images::text($id)['description'])
                            <a href="#more" class="fs-6 text text-secondary d-block mb-3">Описание</a>
                        @else
                            <p class="fs-6 w-100 text text-secondary">Описания нет</p>
                        @endif
                    </div>
                    <div class="w-100">
                        @if($product['quantity'] == 0 || $product['quantity'] < 0)
                        <p class="label-danger">
                            Нет в наличии
                        </p>&#160;
                        <span class="badge bg-secondary text">Деталь на заказ</span>
                        @else
                        <p :class="[{{$product['quantity']}}-count >= 0 || {{$product['quantity']}}-count == 1 ? 'label' : 'label-danger']">
                            <link itemprop="availability" href="https://schema.org/InStock"> 
                            <template>
                                В наличии
                                <span v-html="{{$product['quantity']}}" v-if="count == 1"></span>
                                <span v-html="{{$product['quantity']}}-count" v-else></span>
                            </template>
                        </p>                        
                        @endif
                    </div>
                    <hr style="color: #ddd" />
                    <div class="d-grid d-lg-flex align-items-center gap-4 w-100">
                        @if($product['quantity'] == 0 || $product['quantity'] < 0)
                            <button onclick="isUserSubscribe()" class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <x-icon-add-card size="25px" color="#fff" />
                                В корзину
                            </button>   
                        @else
                            <div class="d-flex justify-content-center rounded p-3 bg-white">
                                <span v-on:click="inCrementOne()" class="btn py-1">
                                    <x-icon-add color="#000" />
                                </span>
                                <span class="btn py-1" v-html="count"></span>
                                <button class="btn py-1" v-if="count == 1">
                                    <x-icon-remove color="#000" />
                                </button>
                                <button class="btn py-1" v-on:click="deCrementOne()" v-else>
                                    <x-icon-remove color="#000" />
                                </button>
                            </div>
                            <div 
                                id="card<?=$id?>"
                                :data-card="['<?=$id?>,<?=$product['article']?>,<?=$str?>,'+count+',<?=$product['salePrices']?>,'+<?=$product['salePrices']?>*count+',<?=$image;?>']"
                                v-on:click="addToCard('<?=$id?>')"
                                class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2"
                            >
                                <x-icon-add-card size="25px" color="#fff" />
                                В корзину
                            </div>    
                                             
                        @endif
                    </div>
                    <div class="d-flex justify-content-start mt-3" onclick="getReviewYandex()">
                        <div class="rating-area">
                            <input type="radio" id="star-5" name="rating" value="5">
                            <label for="star-5" data-bs-toggle="tooltip" data-bs-title="Оценка «5»"></label>	
                            <input type="radio" id="star-4" name="rating" value="4">
                            <label for="star-4" data-bs-toggle="tooltip" data-bs-title="Оценка «4»"></label>    
                            <input type="radio" id="star-3" name="rating" value="3">
                            <label for="star-3" data-bs-toggle="tooltip" data-bs-title="Оценка «3»"></label>  
                            <input type="radio" id="star-2" name="rating" value="2">
                            <label for="star-2" data-bs-toggle="tooltip" data-bs-title="Оценка «2»"></label>    
                            <input type="radio" id="star-1" name="rating" value="1">
                            <label for="star-1" data-bs-toggle="tooltip" data-bs-title="Оценка «1»"></label>
                        </div>
                    </div>
                </div>
                <div id="more" class="col-12 mt-4">
                    <div class="mt-5 pt-5 text" itemprop="description">
                        {!!$images::text($id)['description']!!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection