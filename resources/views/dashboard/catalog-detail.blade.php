@extends('layout/main')

@section('title', $catalog['name'])

@section('content')

    @foreach ($catalogTrucks as $item)
        @if($item['name'] === $name)
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-2">
                        <p class="m-0">Найденные модификации автомобиля</p>
                        <img src="{{$item['image']}}" alt="{{$item['name']}}" style="width: 30px" />
                    </div>   
                    <a href="/dashboard/catalogs" class="d-flex align-items-center gap-2 text-decoration-none">
                        <span class="material-symbols-outlined fs-6 text-secondary">undo</span>
                        <small>Выбрать другой автомобиль</small> 
                    </a>         
                </div>                
            </div>
        </div>
        @endif
    @endforeach
    <pre><?php //var_dump($catalog);?></pre>

<div class="row mt-4">
    <div class="col">
        <div class="card border-0 w-100 rounded shadow-sm">
            <div class="card-header border-0 d-flex align-items-center py-3 px-4 justify-content-between bg-white">
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
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="thead-light bg-light" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="form-check mb-0">
                                    <input type="checkbox" id="checkAllCheckboxes" class="form-check-input" />
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
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="display: block;width: 198px;">
                                    Бренд<span class="list-sort"></span>
                                </a>
                            </th>
                            <th style="text-align: center;display: block;width: 110px;">Опции</th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        @foreach($data['rows'] as $item)
                        <x-product-card 
                            href="{{$item['id']}}"
                            name="{{$item['name']}}"
                            vendorcode="{{$item['code']}}"
                            price="{{$item['salePrices'][0]['value']}}"
                            availability="{{$item['volume']}}"
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
                        <span>1</span> - <span>{{$data['meta']['limit']}}</span> из <span>{{$data['meta']['size']}}</span>
                    </div>
                    <ul class="pagination list-pagination mb-0 d-flex">
                        <li class="page-item active"><a href="javascript: void(0);" class="page page-link">1</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">2</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">3</a></li>
                    </ul>
                </div>
            </div>
          
            <pre><?php //var_dump($data);?></pre>

        </div>
    </div>
</div>
@endsection