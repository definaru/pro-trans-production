@php
    $result = array_merge($listorder, $bestsellers, $alllist);
    $size = session('search') ? session('search')['meta']['size'] : '';
    //$size = session('search') ? session('search')['count'] : '';
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
        <div class="d-print-none row">
            <form id="sendForm" action="/product" method="POST" class="col-12 my-4 position-relative">
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
                />
                <span class="material-symbols-outlined position-absolute text-muted" onclick="getResult()" style="cursor: pointer;right: 28px;top: 11px">search</span>
                <datalist id="searchlist">
                    <option value="Насос-форсунка топливная цилиндра"></option>
                    <option value="Ресивер воздушный"></option>
                    <option value="Поршень-гильза комплект"></option>
                    <option value="Водяной насос с муфтой"></option>
                    <option value="Насос водяной с прокладкой"></option>
                    <option value="Тормозной шланг переднего моста"></option>
                    <option value="Трос открывания"></option>
                    <option value="Втулка шатуна верхняя"></option>
                    <option value="Кольцо гильзы"></option>
                    <option value="Прокладка блока цилиндров"></option>
                    <option value="Комплект щеток стеклоочистителя"></option>
                    <option value="Комплект сцепления"></option>
                    <option value="Датчик уровня топлива в баке"></option>
                    <option value="Цапфа задней полуоси"></option>
                    <option value="Кронштейн стабилизатора"></option>
                    <option value="Гайка шестигранная"></option>
                    <option value="Напорный трубопровод турбины"></option>
                    <option value="Усилитель привода сцепления"></option>
                    <option value="Фильтр топливный"></option>
                    <option value="Радиатор охлаждения"></option>
                    <option value="Панель кабины боковая левая"></option>
                    <option value="Прокладка выпускного коллектора"></option>
                    <option value="Кольцо уплотнительное"></option>
                    <option value="Втулка распредвала"></option>
                    <option value="Сальник ступицы"></option>
                    <option value="Фиттинг ГБЦ"></option>
                    <option value="Трубка топливная"></option>
                    <option value="Вискомуфта вентилятора"></option>
                    <option value="Втулка распредвала с буртиком"></option>
                    <option value="Насос ГУР"></option>
                    <option value="Прокладка"></option>
                    <option value="Фильтр масляный"></option>
                    <option value="Комплект топливных фильтров"></option>
                    <option value="Фиттинг электропроводки"></option>
                    <option value="Блок переключения передач"></option>
                    <option value="Уплотнение"></option>
                    <option value="Уплотнение масляного насоса"></option>
                    <option value="Щетки стеклоочистителя"></option>
                    <option value="Клапан обратный"></option>
                    <option value="Рычаг стеклоочистителя"></option>
                    <option value="Стартер"></option>
                    <option value="Вилка блокировки"></option>
                    <option value="Генератор"></option>
                    <option value="Трубка"></option>
                    <option value="Прокладка коллектора"></option>
                    <option value="Втулка стабилизатора"></option>
                    <option value="Вязкостная муфта"></option>
                    <option value="Подушка передняя кабины"></option>
                    <option value="Блок подготовки воздуха"></option>
                    <option value="Термостат охлаждения двигателя"></option>
                </datalist>
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
                <p>{{$decl::search($size)}} <span class="badge bg-soft-danger text-danger rounded-pill">{{$size}}</span></p>
                {{-- <pre><?php //var_dump(session('search')['rows']);?></pre> --}}
                <div class="row">
                @foreach(session('search')['rows'] as $item)
                    {{-- @if (array_key_exists('rows', $item)) --}}
                    <div class="col-lg-3 col-12 mb-3">
                        <div class="card card-data border-0 shadow order">
                            <a href="/product/mersedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
                                <div 
                                    itemprop="aggregateRating" 
                                    itemscope 
                                    itemtype="https://schema.org/AggregateRating" 
                                    class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2"
                                >
                                    <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                    <small>4.9 рейтинг</small> 
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
                                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                                            <link itemprop="availability" href="https://schema.org/InStock">В наличии 
                                            {{-- {{$item['quantity']}} --}}
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
                    {{-- @endif --}}
                @endforeach
                </div>
            @endif

        @else
            <div class="row" itemscope itemtype="https://schema.org/Product">
                <div class="col-12">
                    <p class="text text-muted">Всего {{$product['meta']['size']}} товаров</p>
                </div>
                @foreach ($product["rows"] as $item)
                    @if($item['quantity'] == 0)
                    @else
                    <div class="col-lg-3 col-12 mb-4">
                        <div class="card card-data border-0 shadow-sm order">
                            <a href="/product/mersedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
                                <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                    <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
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
                    @endif             
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