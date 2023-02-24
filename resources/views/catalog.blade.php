@php
    $result = array_merge($listorder, $bestsellers, $alllist);
@endphp
@extends('layout/index', [
    'title' => 'Каталог запчастей Mercedes-Benz | Проспект Транс',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Каталог запчастей Mercedes-Benz, широкий ассортимент комплектующих и расходных материалов для грузовых автомобилей',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])
@section('title', 'Каталог запчастей Mercedes-Benz | Проспект Транс')
@section('content')
<section class="bg-secondary-subtle">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <p class="text text-muted">Всего {{$product['meta']['size']}} товаров</p>
            </div>
        </div>
        <div class="row" itemscope itemtype="https://schema.org/Product">
            @foreach ($product["rows"] as $item)
            <div class="col-lg-3 col-12 mb-3">
                <div class="card card-data border-0 shadow order">
                    <a href="/product/mersedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
                        <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                            <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                            <small>4.9 рейтинг</small> 
                            <meta itemprop="worstRating" content="1">
                            <meta itemprop="ratingValue" content="4.9">
                            <meta itemprop="bestRating" content="5">
                        </div>
                        <img 
                            itemprop="image" 
                            {{-- src="{{$deal::image($result, $item['id'])}}"  --}}
                            src="/img/placeholder.png" 
                            class="card-img-top rounded" 
                            alt="{{$item['name']}}, Проспект Транс, {{$item['pathName']}}"
                        />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-6" style="height: 39px">
                            <a itemprop="name" href="/product/mersedes-benz/{{$item['id']}}">
                                {{mb_convert_case($item['name'], MB_CASE_TITLE, "UTF-8")}}
                            </a>
                        </h5>
                        <hr style="color: #ddd">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                                    <link itemprop="availability" href="https://schema.org/InStock">В наличии {{$item['quantity']}}
                                </p>                                
                            </div>
                            <strong>
                                {!!$currency::summa($item['salePrices'][0]['value'])!!}
                            </strong>                            
                        </div>
                        
                        <hr style="color: #ddd">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <img src="/img/mercedes-benz.png" alt="Mercedes-Benz" style="width: 37px;height: 37px">
                                </div>
                                <div class="lh-sm">
                                    <small class="text-muted d-block w-100">
                                        {{$item['article']}}                                            
                                    </small>
                                    <strong class="text-secondary">Mercedes-Benz</strong>
                                </div>
                            </div>
                            <div>
                                <a href="/signup" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
                                    <span class="material-symbols-outlined">add_shopping_cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>               
            @endforeach
        </div>
    </div>
</section>
@endsection