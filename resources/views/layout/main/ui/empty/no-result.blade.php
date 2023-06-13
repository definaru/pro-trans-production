@php
    $parts = $replacement::parts(); // A5410501222
    $key = array_search($text, array_column($parts, 'part'));
    $isEmpty = $replacement::getReplacementPart($parts[$key]['analog']);
@endphp



@if (in_array($text, array_column($parts, 'part')))

    <x-alert type="warning" header=" " message="По запросу <strong>{{$text}}</strong> нашлась одна замена:" />

    {{-- <pre><?php // var_dump($isEmpty);?></pre> --}}
    <div class="row g-2">
        @foreach($isEmpty['rows'] as $item)
            @if(isset($item['article']))
            <div class="col-lg-3 col-12">
                <div class="card card-data border-0 shadow order">
                    <a href="/product/mercedes-benz/{{$item['id']}}" class="card-body pb-0 position-relative">
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
                            <a itemprop="name" href="/product/mercedes-benz/{{$item['id']}}">
                                {{ $item['name'] }}
                            </a>
                        </h5>
                        <hr style="color: #ddd" />
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <p class="{{$images::quantity($item['quantity'])['class']}}">
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


    {{-- <div class="row">
        <div class="col-12 col-lg-4">
            <div class="text bg-white rounded ps-4 pe-4 py-3 shadow-sm mb-4">
                <strong>Артикул:</strong>
                <a href="/product/mercedes-benz/{{$isEmpty["rows"][0]["id"]}}">{{$parts[$key]['analog']}}</a> 
            </div>            
        </div>
    </div> --}}
@else
    <p class="w-100 bg-body-secondary rounded px-4 py-3">
        По запросу <strong>"{{$text}}"</strong> ничего не найдено
    </p>
@endif
<ul class="text bg-white rounded ps-5 pe-4 py-3 shadow-sm mt-4">
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
                    <a href="{{$link ?? '/products/mercedes-benz'}}" class="text-primary text-decoration-none text-uppercase">
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