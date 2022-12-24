@extends('layout/main')

@section('title', isset($catalog['name']) ? $catalog['name'] : array_column($catalogTrucks, 'name', 'href')[$name])

@section('content')
<div class="row mt-4">
    <div class="col">
        <div class="card border-0 w-100 rounded shadow-sm">
            <!-- <div class="card-header border-0 d-flex align-items-center py-3 px-4 justify-content-between bg-white">
                <h2 class="m-0 h6 fw-bold">Выберите нужный вариант автомобиля:</h2>
                <div class="dropdown ms-4">
                    <a href="javascript: void(0);" role="button" data-bs-toggle="dropdown" class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                            <g>
                                <circle cx="12" cy="3.25" r="3.25" style="fill: currentcolor;"></circle>
                                <circle cx="12" cy="12" r="3.25" style="fill: currentcolor;"></circle>
                                <circle cx="12" cy="20.75" r="3.25" style="fill: currentcolor;"></circle>
                            </g>
                        </svg>
                    </a>
                    <div class="dropdown-menu">
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Артикул</small> 
                        </label>
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Цена</small> 
                        </label>
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Наличие</small> 
                        </label>
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Бренд</small> 
                        </label>
                    </div>
                </div>
            </div> -->
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-white" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">
                                    #
                                </div>
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
                                <a href="javascript: void(0);" class="text-muted text-decoration-none" style="width: 120px;display: block">
                                    Артикул<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 90px;display: block;">
                                    Цена<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="display: block;width: 85px;">
                                    Наличие<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="display: block;width: 160px;">
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
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-5 text-secondary small">
                        Показано: 
                        <span>{{$offset == 0 ? 1 : $product['meta']['limit']}}</span> - 
                        <span>
                            @if($product['meta']['size']-$offset < $limit)
                                {{$offset+$product['meta']['size']-$offset}}
                            @else
                                {{$offset == 0 ? $limit : $offset}}
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