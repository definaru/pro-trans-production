@php
    $str = mb_convert_case($product['name'], MB_CASE_TITLE, "UTF-8");
    $result = array_merge($listorder, $bestsellers, $alllist);
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $image = $images::src($id);
    $price = number_format(($product['salePrices']) / 100, 2, '.', ' ');
    //isset($data[0]['image']) && $data[0]['image'] !== ''  ? trim($data[0]['image'], '.') : '/img/placeholder.png';
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
                    <div class="d-flex align-items-center justify-content-start gap-3">
                        <p class="fs-4 text m-0">{!!$currency::summa($product['salePrices'])!!}</p>
                        <div class="vr" v-if="count !== 1"></div>
                        <div v-html="resultSumma('{{$product['salePrices']}}', count)" v-if="count !== 1" class="text text-success fw-bold"></div>                        
                    </div>

                    
                    <p class="fs-6 w-100 text text-secondary">Описания нет</p>
                    <div class="w-100">
                        @if($product['quantity'] == 0 || $product['quantity'] < 0)
                        <p class="label-danger">
                            Нет в наличии
                        </p>&#160;
                        <span class="badge bg-secondary text">Деталь на заказ</span>
                        @else
                        <p 
                            itemprop="offers" 
                            itemscope 
                            itemtype="https://schema.org/Offer" 
                            :class="[{{$product['quantity']}}-count <= 0 ? 'label-danger' : 'label']"
                        >
                            <link itemprop="availability" href="https://schema.org/InStock"> 
                            <template v-if="{{$product['quantity']}}-count <= 0">
                                Больше нет в наличии
                            </template>
                            <template v-else>
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
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                                В корзину
                            </button>   
                        @else
                            <div class="d-flex justify-content-center rounded p-3 bg-white">
                                <span v-on:click="inCrementOne()" class="material-symbols-outlined btn py-1">add</span>
                                <span class="btn py-1" v-html="count"></span>
                                <button class="btn btn-sm material-symbols-outlined py-1" v-if="count == 1">remove</button>
                                <button class="btn btn-sm material-symbols-outlined py-1" v-on:click="deCrementOne()" v-else>remove</button>
                            </div>
                            <div 
                                id="card<?=$id?>"
                                :data-card="['<?=$id?>,<?=$product['article']?>,<?=$str?>,'+count+',<?=$product['salePrices']?>,'+<?=$product['salePrices']?>*count]"
                                v-on:click="addToCard('<?=$id?>')"
                                class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2"
                            >
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                                В корзину
                            </div>    
                                             
                        @endif
                    </div>
                    <div class="d-flex justify-content-start mt-3">
                        <div class="rating-area">
                            <input type="radio" id="star-5" name="rating" value="5">
                            <label for="star-5" title="Оценка «5»"></label>	
                            <input type="radio" id="star-4" name="rating" value="4">
                            <label for="star-4" title="Оценка «4»"></label>    
                            <input type="radio" id="star-3" name="rating" value="3">
                            <label for="star-3" title="Оценка «3»"></label>  
                            <input type="radio" id="star-2" name="rating" value="2">
                            <label for="star-2" title="Оценка «2»"></label>    
                            <input type="radio" id="star-1" name="rating" value="1">
                            <label for="star-1" title="Оценка «1»"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection