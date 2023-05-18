@php
    $result = array_merge($listorder, $bestsellers, $alllist);
    $size = session('search') ? session('search')['meta']['size'] : '';
@endphp
@extends('layout/index', [
    'title' => 'Каталог запчастей Mercedes-Benz | Проспект Партс',
    'keywords' => 'ремонт в москве, ремонт машин в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Каталог запчастей Mercedes-Benz, широкий ассортимент комплектующих и расходных материалов для грузовых автомобилей',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])

@section('title', 'Каталог запчастей Mercedes-Benz | Проспект Партс')

@section('content')
<section class="bg-secondary-subtle catalog">
    <div class="container position-relative py-4 py-lg-2">
        <div class="d-print-none row">
            <div id="loadingpage" class="d-flex gap-2 text"></div>
        </div>
        <div class="row">
            <div class="col-12">
                @error('text')
                    <p>Получен пустой запрос.</p>
                @enderror
            </div>
        </div>
        @if(session('search'))
            @if($size === 0)
                <p class="w-100 bg-body-secondary rounded px-4 py-3">
                    По запросу <strong>"{{session('text')}}"</strong> ничего не найдено
                </p>
                <ul class="text bg-white rounded ps-5 pe-4 py-3 shadow-sm">
                    <li>Попробуйте поискать запчасть без буквы в начале артикула</li>
                    <li>Попробуйте указать латинскую букву в начале артикула</li>
                </ul>
                <div class="row g-2 py-5">
                    <div class="col-12 col-lg-4">
                        <div class="bg-body-secondary rounded px-4 py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text text-muted">Каталог</span> 
                                    <h3>Mercedes-Benz</h3>
                                    <a href="/products/mersedes-benz" class="text-primary text-decoration-none text-uppercase">
                                        <span style="font-family: ui-monospace">←</span>
                                        Назад в каталог
                                    </a>
                                </div>
                                <img src="/img/mercedes-benz.png" class="w-25 h-25" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="bg-body-secondary rounded px-4 py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text text-muted">Написать</span> 
                                    <h3 class="text">Менеджеру</h3>
                                    <a href="mailto:info@prospekt-parts.com" class="text-primary text-decoration-none">info@prospekt-parts.com</a>
                                </div>
                                <img src="/img/contact/newsletter.png" class="w-25" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="bg-body-secondary rounded px-4 py-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <span class="text text-muted">Позвонить</span> 
                                    <h3 class="text">Менеджеру</h3>
                                    <a href="tel:89017331866" class="text-primary text-decoration-none">+7 (901) 733-18-66</a>
                                </div>
                                <img src="/img/headphones.png" class="w-25" />
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <p>{{$decl::search($size)}} <span class="badge bg-danger text-white rounded-pill">{{$size}}</span></p>
                <div class="row g-2">
                @foreach(session('search')['rows'] as $item)
                    @if(isset($item['article']))
                    <div class="col-lg-3 col-12">
                        <div class="card card-data border-0 shadow order">
                            <a href="/product/mersedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
                                <div 
                                    itemprop="aggregateRating" 
                                    itemscope 
                                    itemtype="https://schema.org/AggregateRating" 
                                    class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2"
                                >
                                    {{-- <x-icon-favorite color="#b02a37" />
                                    <small>{{rand(4, 5)}}.{{rand(0, 9)}} рейтинг</small>  --}}
                                    <meta itemprop="worstRating" content="1">
                                    <meta itemprop="ratingValue" content="4.9">
                                    <meta itemprop="bestRating" content="5">
                                </div>
                                <img 
                                    loading="lazy"
                                    itemprop="image"
                                    src="{{$images::src($item['id'])}}" 
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
                                        <p 
                                            itemprop="offers" 
                                            itemscope
                                            itemtype="https://schema.org/Offer" 
                                            class="{{$images::quantity($item['quantity'])['class']}}"
                                        >
                                            <link itemprop="availability" href="https://schema.org/InStock">
                                            {{$images::quantity($item['quantity'])['text']}}
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
                                        @if($item['quantity'] == 0)
                                        <div onclick="isNotSignUp()" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
                                            <x-icon-add-card size="25px" color="#fff" />
                                        </div>
                                        @else
                                        <div
                                            id="card{{$item['id']}}" 
                                            data-card="{{$item['id']}},{{$item['article']}},{{$item['name']}},1,{{$item['salePrices'][0]['value']}},{{$item['salePrices'][0]['value']}},{{$images::src($item['id'])}}" 
                                            v-on:click="addToCard('{{$item['id']}}')"
                                            class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2"
                                        >
                                            <x-icon-add-card size="25px" color="#fff" />
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            @endif
        @else
            <div class="row" itemscope itemtype="https://schema.org/Product">
                <div class="col-12 d-flex align-items-center justify-content-between py-3">
                    <p class="text text-muted m-0">Всего {{$product['meta']['size']}} товаров</p>
                    <div>
                        <select id="selectOffset" class="form-select" onchange="selectOffset()">
                            @foreach ([12, 24, 48, 64, 100] as $key)
                                <option value="/products/mersedes-benz/{{$key}}/0" @if($key == $limit) selected @endif >
                                    {{$key}}
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="btn-group">
                        <button class="btn border-0" :class="[design === 'grid' ? 'bg-dark-subtle' : 'bg-white']" v-on:click="isGrid()">
                            <x-icon-grid size="27px" />
                        </button>
                        <button class="btn border-0" :class="[design === 'line' ? 'bg-dark-subtle' : 'bg-white']" v-on:click="isLine()">
                            <x-icon-line size="27px" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="row g-2 grid-design"> 
                @include('layout.main.ui.card.card-empty')
            </div>
            <div class="row g-2" itemscope itemtype="https://schema.org/Product">
                    @foreach ($product["rows"] as $item)
                        <template v-if="design === 'line'">
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between bg-white py-2 px-3 shadow-sm mb-1 rounded">
                                    <div class="d-flex gap-3 w-50 align-items-center">
                                        <div style="width: 50px;height: 50px;overflow: hidden;background: #ddd;border-radius: 5px">
                                            @include('layout.main.ui.card.card-image')
                                        </div>
                                        <div class="text-start">
                                            @include('layout.main.ui.card.card-title') 
                                        </div>                                    
                                    </div>
                                    <div class="w-25">
                                        @include('layout.main.ui.quantity.quantity')
                                    </div>
                                    <div class="px-4">
                                        @include('layout.main.ui.logo.car-logo')
                                    </div>
                                    <div>
                                        @include('layout.main.ui.button.card-button')
                                    </div>
                                </div>
                            </div>                        
                        </template>
                        <template v-else>
                            <div class="col-lg-3 col-12">
                                <div class="card card-data border-0 shadow-sm order">
                                    @include('layout.main.ui.card.card-image')
                                    <div class="card-body">
                                        <div style="height: 39px">
                                            @include('layout.main.ui.card.card-title')                                    
                                        </div>
                                        <hr style="color: #ddd">
                                        @include('layout.main.ui.quantity.quantity')
                                        <hr style="color: #ddd">
                                        <div class="d-flex align-items-center justify-content-between">
                                            @include('layout.main.ui.logo.car-logo')
                                            <div>
                                                @include('layout.main.ui.button.card-button')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    @endforeach                    


                @if (isset($product['meta']['nextHref']) || $offset > 0)
                    <div class="mt-5 d-flex align-items-center justify-content-between">
                        <div>
                            <select id="selectOffset" class="form-select" onchange="selectOffset()">
                                @foreach ([12, 24, 48, 64, 100] as $key)
                                    <option value="/products/mersedes-benz/{{$key}}/0" @if($key == $limit) selected @endif >
                                        {{$key}}
                                    </option>
                                @endforeach
                            </select>                        
                        </div>
                        <nav>
                            <ul class="pagination m-0">
                                @if (isset($product['meta']['previousHref']))
                                    <?php 
                                        $url_previous = parse_url($product['meta']['previousHref'], PHP_URL_QUERY);
                                        parse_str($url_previous, $previous);
                                    ?>
                                    <li class="page-item p-0">
                                        <a class="page-link text-primary border-0" href="/products/mersedes-benz/{{$previous['limit']}}/{{$previous['offset']}}">
                                            <span>&laquo;</span> Назад
                                        </a>
                                    </li>  
                                @else
                                    <li class="page-item p-0 disabled">
                                        <a class="page-link border-0">
                                            <span>&laquo;</span> Назад
                                        </a>
                                    </li>                                
                                @endif

                                @if (isset($product['meta']['nextHref']))
                                    <?php 
                                        $url_next = parse_url($product['meta']['nextHref'], PHP_URL_QUERY);
                                        parse_str($url_next, $next);
                                    ?>
                                    <li class="page-item p-0">
                                        <a class="page-link text-primary border-0" href="/products/mersedes-benz/{{$next['limit']}}/{{$next['offset']}}">
                                            Далее <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>                                
                                @else
                                @endif

                            </ul>
                        </nav>
                        <div>
                            Показано: 
                            <span>
                                @if($product['meta']['size']-$offset < $limit)
                                    {{$offset+$product['meta']['size']-$offset}}
                                @else
                                    {{$offset == 0 ? $limit : $limit+$offset}}
                                @endif
                            </span> из 
                            <span>{{$product['meta']['size']}}</span>
                        </div>
                    </div>
                @endif
            </div>        
        @endif
    </div>
</section>
@endsection