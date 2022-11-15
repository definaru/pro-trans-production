@extends('layout/main')

@section('title', $name)

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
                    <thead class="thead-light bg-light">
                        <tr>
                            <th class="w-60px ps-4">
                                <div class="form-check mb-0"><input type="checkbox" value="" id="checkAllCheckboxes" class="form-check-input"></div>
                            </th>
                            <th><a href="javascript: void(0);" data-sort="name" class="text-muted text-decoration-none" style="display: block; width: 300px;">
                                Название <span class="list-sort"></span></a>
                            </th>
                            <th><a href="javascript: void(0);" class="text-muted text-decoration-none">Артикул<span class="list-sort"></span></a></th>
                            <th><a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 90px;display: block;">Цена<span class="list-sort"></span></a></th>
                            <th><a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="display: block;width: 85px;">Наличие<span class="list-sort"></span></a></th>
                            <th><a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="display: block;width: 198px;">Бренд<span class="list-sort"></span></a></th>
                            <th style="text-align: center;display: block;width: 110px;">Опции</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <x-product-card 
                            name="CINQUECENTO ABARTH [NUOVA 500 ABARTH (2008-2012)]"
                            vendorcode="150695001000"
                            price="8792.43"
                            availability="0"
                            :modifications="$name"
                            power="1.4 180 HP (KW132)"
                            drive="LEFT (GSX)"
                            bodyworktype="BN.W/ REAR END DOOR (TC2V)"
                            fuel="БЕНЗИН (CMBBZ)"
                            trimlevel="LEV.10 (FERRARI TRIBUTE) (LL10)"
                        />
                        <x-product-card 
                            name="CINQUECENTO ABARTH [NUOVA 500 ABARTH (2008-2012)]"
                            vendorcode="150695001260"
                            price="10792.43"
                            availability="16"
                            :modifications="$name"
                            power="1.4 180 HP (KW132)"
                            drive="LEFT (GSX)"
                            bodyworktype="BN.W/ REAR END DOOR (TC2V)"
                            fuel="БЕНЗИН (CMBBZ)"
                            trimlevel="LEV.10 (FERRARI TRIBUTE) (LL10)"
                        />                 
                        <x-product-card 
                            name="CINQUECENTO ABARTH [NUOVA 500 ABARTH (2008-2012)]"
                            vendorcode="150695051870"
                            price="108792.43"
                            availability="7"
                            :modifications="$name"
                            power="1.4 180 HP (KW132)"
                            drive="RIGHT (GDX)	"
                            bodyworktype="BN.W/ REAR END DOOR (TC2V)"
                            fuel="БЕНЗИН (CMBBZ)	"
                            trimlevel="LEV.10 (FERRARI TRIBUTE) (LL10)"
                        />
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-5 text-secondary small">
                        Показано: 
                        <span>1</span> - <span>8</span> из <span>20</span>
                    </div>
                    <ul class="pagination list-pagination mb-0 d-flex">
                        <li class="page-item active"><a href="javascript: void(0);" class="page page-link">1</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">2</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection