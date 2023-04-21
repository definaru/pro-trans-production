@php
    $result = array_merge($listorder, $bestsellers, $alllist);
    $size = session('search') ? session('search')['meta']['size'] : '';
@endphp
@extends('layout/index', [
    'title' => 'Каталог запчастей Mercedes-Benz | Проспект Транс',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Каталог запчастей Mercedes-Benz, широкий ассортимент комплектующих и расходных материалов для грузовых автомобилей',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])

@section('title', 'Каталог запчастей Mercedes-Benz | Проспект Транс')

@section('content')
<section class="bg-secondary-subtle catalog">
    <div class="container position-relative">
        <div class="d-print-none row">
            <div id="loadingpage" class="d-flex gap-2 text"></div>
            <form onsubmit="loadingPage()" id="sendForm" action="/product" method="POST" class="col-12 my-4 position-relative">
                @csrf
                <input 
                    type="search" 
                    list="searchlist" 
                    min="5"
                    max="5"
                    id="search" 
                    name="text" 
                    class="form-control form-control-lg ps-4 pe-5 text border-0 shadow" 
                    placeholder="Введите Артикул или Название запчасти..." 
                    autofocus
                />
                <span class="position-absolute" onclick="getResult()" style="cursor: pointer;right: 28px;top: 11px">
                    <x-icon-search color="#333" />
                </span>
                @include('layout.main.ui.selest.list')
            </form>
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
                <p class="w-100" style="height: 600px">По запросу <strong>"{{session('text')}}"</strong> ничего не найдено</p>
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
                                    <x-icon-favorite color="#b02a37" />
                                    <small>{{rand(4, 5)}}.{{rand(0, 9)}} рейтинг</small> 
                                    <meta itemprop="worstRating" content="1">
                                    <meta itemprop="ratingValue" content="4.9">
                                    <meta itemprop="bestRating" content="5">
                                </div>
                                <img 
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
            <div class="row g-2" itemscope itemtype="https://schema.org/Product">
                <div class="col-12">
                    <p class="text text-muted">Всего {{$product['meta']['size']}} товаров</p>
                </div>
                @foreach ($product["rows"] as $item)
                    <div class="col-lg-3 col-12">
                        <div class="card card-data border-0 shadow-sm order">
                            <a href="/product/mersedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
                                <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                    <x-icon-favorite color="#b02a37" />
                                    <small>{{rand(4, 5)}}.{{rand(0, 9)}} рейтинг</small> 
                                    <meta itemprop="worstRating" content="1">
                                    <meta itemprop="ratingValue" content="4.9">
                                    <meta itemprop="bestRating" content="5">
                                </div>
                                <img 
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
                                        @if($item['quantity'] == 0)
                                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label-danger">
                                            Нет наличии
                                        </p>
                                        @else
                                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                                            <link itemprop="availability" href="https://schema.org/InStock">В наличии {{$item['quantity']}}
                                        </p>  
                                        @endif
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
                                 
                @endforeach

                {{-- <div class="col-12 mt-3">
                    <hr />
                    <div class="d-flex justify-content-center pt-4">
                        <ul class="d-flex pagination pagination-lg gap-3">
                            <li class="page-item">
                                <a class="material-symbols-outlined shadow border-0 page-link text-dark d-flex align-items-center rounded px-3" href="#" style="height: 54px" disabled>
                                    line_start_arrow_notch
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link text-dark rounded shadow border-0" href="../products/mersedes-benz/32/32">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link text-dark rounded shadow border-0" href="../products/mersedes-benz/32/{{32+$limit}}">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link text-dark rounded shadow border-0" href="../products/mersedes-benz/32/32+{{$limit}}">3</a>
                            </li>
                            <li class="page-item">
                                <a class="material-symbols-outlined shadow border-0 page-link text-dark d-flex align-items-center rounded px-3" href="#" style="height: 54px">
                                    line_end_arrow_notch
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                    {{-- <p>{{$limit}}, {{$offset}}</p> --}}
                    
                    {{-- @for ($i = 1; $i <= $product['meta']['size']/$limit; $i++)
                        <pre><?php //var_dump(explode(" ", array_slice($limit*$i, 0, 3)));?></pre> --}}
                        <?php
                            //$arr = $limit*$i.',';
                            //$str = substr($arr, 0, -1);
                            //echo $str;


                            //$arr = explode('', $str);
                            //echo '<pre>'.var_dump($arr).'</pre>';
                            //$arr = array_slice($arr, 0, 3);
                        ?>
                    {{-- @endfor --}}
                    <?php //var_dump(array_slice((array)$limit*$i, 0, 3));?>
            </div>        
        @endif
    </div>
</section>
@endsection