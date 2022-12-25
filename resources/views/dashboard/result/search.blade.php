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
                @php echo number_format(($item['salePrices'][0]['value']) / 100, 2, '.', ' ') @endphp ₽
            </div> 
            <div 
                id="card{{$loop->iteration}}" 
                data-card="{{$item['id']}},{{$item['code']}},{{$item['name']}},1,<?=number_format(($item['salePrices'][0]['value']) / 100, 2, '.', '')?>" 
                v-on:click="addToCard({{$loop->iteration}})"
            >
                <x-button 
                    type="submit" 
                    icon="add_shopping_cart" 
                    color="dark" 
                    text="В корзину" 
                />
            </div>
        </div>
    </div>
    @endforeach
@endsection