@php
    $size = $search['meta']['size'];
@endphp
@extends('layout/main')
@section('title', 'Результат поиска: "'.$text.'"')

@section('content')
    <hr />
    @if($size === 0)
        <p class="text-muted">По запросу <strong>"{{$text}}"</strong> ничего не найдено</p>
    @else
        <p class="text-muted">{{$decl::search($size)}} <span class="badge bg-soft-danger text-danger rounded-pill">{{$size}}</span> </p>        
    @endif

    @foreach($search['rows'] as $item)
    <div class="d-flex justify-content-between w-100 bg-white px-3 py-2 my-1 shadow-sm rounded">
        <div>
            <span class="ps-1 pe-0 btn">{{$loop->iteration}}.</span>
            <a href="/dashboard/product/details/{{$item['id']}}" class="text-dark text-decoration-none btn">
                <b>
                    <?php
                        $str = str_replace(mb_strtolower($text), '<mark class="rounded py-0">'.mb_strtoupper($text).'</mark>', mb_strtolower($item['code']));
                        echo $str;                    
                    ?>
                </b> &#160;&#160; 
                <?php
                    //$str = str_replace(mb_strtolower(session('text')), '<mark class="rounded py-0">'.mb_strtolower(session('text')).'</mark>', mb_strtolower($item['name']));
                    $str = mb_strtolower($item['name']);
                    $str = mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1, mb_strlen($str));
                    echo $str;
                ?>
            </a>                
        </div>
        <div class="d-flex gap-2">
            <div class="btn">
                {!! $currency::summa($item['salePrices'][0]['value']) !!}
            </div> 
            <div class="btn">
                @if ($item['quantity'] == 0)
                    <x-badge color="danger" text="Нет в наличии" /> 
                @else
                    <x-badge color="34617" text="В наличии {{$item['quantity']}}" />  
                @endif 
            </div>
            <div>
                @if ($item['quantity'] == 0)
                <div
                    id="preorder{{$item['id']}}"
                    data-order="{{$item['id']}},{{$item['article']}},{{$item['name']}},1,{{$item['salePrices'][0]['value']}}"
                    v-on:click="addToOrder('{{$item['id']}}')"
                >
                    <x-button 
                        type="button"
                        icon="add_shopping_cart" 
                        color="secondary" 
                        text="В корзину" 
                    />             
                </div>
                @else
                    <div 
                        id="card{{$loop->iteration}}" 
                        data-card="{{$item['id']}},{{$item['article']}},{{$item['name']}},1,{{$item['salePrices'][0]['value']}},{{$item['salePrices'][0]['value']}},{{$images::src($item['id'])}}" 
                        v-on:click="addToCard({{$loop->iteration}})"
                    >
                        <x-button 
                            type="button" 
                            icon="add_shopping_cart" 
                            color="dark" 
                            text="В корзину"
                        />
                    </div>
                @endif 
            </div>
        </div>
    </div>
    @endforeach
@endsection