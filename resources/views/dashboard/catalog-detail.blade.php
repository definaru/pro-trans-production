@extends('layout/main')

@section('title', 'MERCEDES-BENZ')
@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    <span class="text-muted">{{$product['rows'][0]['pathName']}}</span>    
</div>
@endsection

@section('content')
<h6 class="text-muted">Всего {{$product['meta']['size']}} {{$decl::cart($product['meta']['size'])}}</h6>
<div class="row mt-4">
    <div class="col">
        <div class="card border-0 w-100 rounded shadow-sm">
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-white" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">#</div>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="text-muted text-decoration-none" 
                                    style="display: block; width: 250px;"
                                >
                                    Название <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="d-block text-muted text-decoration-none" style="width: 120px">
                                    Артикул<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="d-block text-muted text-decoration-none" style="width: 80px">
                                    Цена<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="d-block text-muted text-decoration-none" style="width: 85px">
                                    Наличие<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted text-decoration-none" style="width: 160px">
                                    Бренд<span class="list-sort"></span>
                                </a>
                            </th>
                            <th class="d-flex align-items-center gap-2 text-center border-0" style="width: 165px;height: 40px">
                                Опции
                                <span class="material-symbols-outlined fs-6 text-secondary">settings</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        @foreach($product['rows'] as $item)
                            @if(empty($item['code']))
                            @else
                                <x-product-card 
                                    :id="$offset+$loop->iteration"
                                    :image="$item['images']['rows']"
                                    href="{{$item['id']}}"
                                    name="{{$item['name']}}"
                                    vendorcode="{{$item['code']}}"
                                    price="{{$item['salePrices'][0]['value']}}"
                                    availability="{{$item['quantity']}}"
                                    :modifications="$name"
                                />
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <select id="selectOffset" class="form-select" onchange="selectOffset()">
                            @foreach ([15, 25, 50, 100] as $key)
                                <option value="/dashboard/catalog/category/8854033a-48ad-11ed-0a80-0c87007f4175/{{$key}}/0" @if($key == $limit) selected @endif >
                                    {{$key}}
                                </option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="me-5 text-secondary small">
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
                    <!-- <ul class="pagination list-pagination mb-0 d-flex">
                        <li class="page-item active"><a href="javascript: void(0);" class="page page-link">1</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">2</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">3</a></li>
                    </ul> -->
                    <nav aria-label="...">
                        <ul class="pagination m-0">
                            @if($offset != 0)
                            <li class="page-item">
                                <!-- <span class="page-link">Previous</span> disabled -->
                                <a class="page-link text-muted" href="{{$offset-$limit}}">&larr; Предыдущие</a>
                            </li>
                            @endif

                            @if($product['meta']['size']-$offset > $limit)
                            <li class="page-item">
                                <a class="page-link text-muted" href="{{$offset === 0 ? $name.'/'.($limit+$offset).'/'.$offset : $limit+$offset}}">Далее &rarr;</a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection