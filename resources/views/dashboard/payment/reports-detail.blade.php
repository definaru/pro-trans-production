@extends('layout/main')
@section('title', 'Заказ #'.$order)

@section('breadcrumbs')
<div class="d-flex gap-2">
    <a href="/dashboard/payment/reports">Заказы</a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали заказа</span>
</div>
@endsection
@section('content')
<div class="d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center">
        <span class="badge bg-soft-success text-success">
            <span class="legend-indicator bg-success"></span>
            Оплачено 
        </span> 
        <span class="badge bg-soft-info text-info ms-2 ms-sm-3">
            <span class="legend-indicator bg-info"></span>
            Выполнено
        </span> 
        <span class="d-flex align-items-center gap-2 ms-2 ms-sm-3 text-secondary">
            <span class="material-symbols-outlined">calendar_month</span> 
            Сен. 17, 2020, 5:48
        </span>
    </div>
    <div class="d-flex gap-3 d-print-none">
        <a 
            href="javascript:;" 
            onclick="window.print(); return false;" 
            class="d-flex align-items-center gap-2 text-body text-decoration-none"
        >
            <span class="material-symbols-outlined text-secondary">print</span>
            Распечатать
        </a> 
        <x-button type="a" href="#" size="sm" text="Запросить счёт" icon="credit_score" />
        
        <div class="dropdown">
            <a 
                href="javascript:;" 
                id="moreOptionsDropdown" 
                data-bs-toggle="dropdown" 
                class="d-flex align-items-center gap-1 text-body text-decoration-none"
            >
                <span class="material-symbols-outlined text-secondary">more_vert</span>
            </a> 
            <div aria-labelledby="moreOptionsDropdown" class="dropdown-menu mt-1" style="">
                <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                    <span class="material-symbols-outlined fs-6 text-secondary">difference</span>
                    Дублировать
                </a> 
                <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                    <span class="material-symbols-outlined fs-6 text-secondary">block</span>
                    Отменить заказ
                </a> 
                <!-- <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                    <span class="material-symbols-outlined fs-6 text-secondary">inventory_2</span>
                    В архив
                </a> -->
            </div>
        </div>
    </div>
</div>

<hr />
<div class="row">
    <div class="col-lg-8 mb-3 mb-lg-0">
        <div class="card border-0 shadow-sm mb-3 mb-lg-5">
            <div class="card-header border-light bg-white d-flex align-items-center justify-content-between">
                <h5 class="fw-bold mb-0 mt-1">
                    Информация по заказу 
                    <span class="badge bg-soft-success text-dark rounded-circle ms-1">4</span>
                </h5>
                <!-- <a href="javascript:;" class="text-secondary"><span class="material-symbols-outlined fs-6">edit</span></a> -->
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-xl">
                            <img src="/img/no_photo.jpg" alt="..." class="img-fluid rounded" />
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <a href="#" class="h5 m-0 d-block text-decoration-none">
                                    Topman shoe in green
                                </a>   
                                <div class="fs-6 text-body">
                                    <span>Артикул:</span> 
                                    <span class="fw-semibold">UK 7</span>
                                </div>
                            </div>
                            <div class="col col-md-2 px-0 align-self-center text-center">
                                <small>1 021.00 ₽</small>
                            </div>
                            <div class="col col-md-2 align-self-center">
                                <h5 class="m-0">2</h5>
                            </div>
                            <div class="col col-md-2 ps-0 align-self-center text-end">
                                <h6 class="m-0">2 042.00 ₽</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-muted my-2">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-xl"><img src="/img/no_photo.jpg" alt="..." class="img-fluid rounded"></div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <a href="./ecommerce-product-details.html" class="h5 m-0 d-block text-decoration-none">Office Notebook</a> 
                                <div class="fs-6 text-body"><span>Артикул:</span> <span class="fw-semibold">Gray</span></div>
                            </div>
                            <div class="col col-md-2 align-self-center"><small>2 000.00 ₽</small></div>
                            <div class="col col-md-2 align-self-center">
                                <h5 class="m-0">1</h5>
                            </div>
                            <div class="col col-md-2 ps-0 align-self-center text-end">
                                <h6 class="m-0">2 000.00 ₽</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-muted my-2">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <div class="avatar avatar-xl"><img src="/img/no_photo.jpg" alt="..." class="img-fluid rounded"></div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <a href="./ecommerce-product-details.html" class="h5 m-0 d-block text-decoration-none">RayBan sunglasses</a> 
                                <div class="fs-6 text-body"><span>Артикул:</span> <span class="fw-semibold">Unisex</span></div>
                            </div>
                            <div class="col col-md-2 align-self-center"><small>1 900.00 ₽</small></div>
                            <div class="col col-md-2 align-self-center">
                                <h5>1</h5>
                            </div>
                            <div class="col col-md-2 ps-0 align-self-center text-end">
                                <h6 class="m-0">1 900.00 ₽</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border-secondary">
                <div class="row justify-content-md-end">
                    <div class="col-md-8 col-lg-9">
                        <dl class="row text-sm-end m-0">
                            <dt class="col-sm-6 text-muted fw-light">Промежуточный итог:</dt>
                            <dd class="col-sm-6 fw-bold">5 942.00 ₽</dd>
                            <dt class="col-sm-6 text-muted fw-light">Стоимость доставки:</dt>
                            <dd class="col-sm-6 fw-bold">0.00 ₽</dd>
                            <dt class="col-sm-6 text-muted fw-light">Налог:</dt>
                            <dd class="col-sm-6 fw-bold">700.00 ₽</dd>
                            <dt class="col-sm-6 text-muted fw-light">Общий:</dt>
                            <dd class="col-sm-6 fw-bold">5 942.00 ₽</dd>
                            <dt class="col-sm-6 text-muted fw-light">Выплаченная сумма:</dt>
                            <dd class="col-sm-6 fw-bold">5 942.00 ₽</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header border-light bg-white">
                <h5 class="fw-bold mb-0 mt-1">Покупатель</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush list-group-no-gutters">
                    <li class="list-group-item border-light">
                        <a href="./ecommerce-customer" class="d-flex align-items-center text-decoration-none">
                            <div class="avatar"><img src="https://randomuser.me/api/portraits/women/47.jpg" alt="..." class="avatar-img rounded-circle"></div>
                            <div class="flex-grow-1 ms-3"><span class="text-body text-inherit">Исакова Диана</span></div>
                            <div class="flex-grow-1 text-end"><i class="bi-chevron-right text-body"></i></div>
                        </a>
                    </li>
                    <!-- <li class="list-group-item">
                        <a href="./ecommerce-customer-details.html" class="d-flex align-items-center text-muted text-decoration-none">
                            <div style="
                                height: 20px;
                                "><span class="material-symbols-outlined fs-5 text-secondary">shopping_cart_checkout</span></div>
                            <div class="flex-grow-1 ms-3"><span class="text-body text-inherit">7 заказов</span></div>
                            <div class="d-flex align-items-center text-end"><span class="material-symbols-outlined text-secondary">keyboard_arrow_right</span></div>
                        </a>
                    </li> -->
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bold">Контактная информация</h6>
                            <a href="javascript:;" class="text-secondary"><span class="material-symbols-outlined fs-6">edit</span></a>
                        </div>
                        <ul class="list-unstyled list-py-2 text-body">
                            <li class="d-flex gap-2 align-items-center">
                                <span class="material-symbols-outlined fs-6 text-secondary">mail</span>
                                ella@site.com
                            </li>
                            <li class="d-flex gap-2 align-items-center">
                                <span class="material-symbols-outlined fs-6 text-secondary">phone_iphone</span>
                                +1 (609) 972-22-22
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bold">Фактический адрес</h6>
                            <a href="javascript:;" class="text-secondary"><span class="material-symbols-outlined fs-6">edit</span></a>
                        </div>
                        <small class="d-block text-muted">
                        45 Roker Terrace<br>
                        Latheronwheel<br>
                        KW5 8NW, London<br>
                        UK 
                        <img src="/img/flags/russia_flag.svg" alt="Great Britain Flag" class="border rounded-circle avatar avatar-xss avatar-circle ms-1"></small>
                    </li>
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="fw-bold">Адрес для выставления счета</h6>
                            <a href="javascript:;" class="link"><span class="material-symbols-outlined">edit</span></a>
                        </div>
                        <small class="d-block text-muted">
                        45 Roker Terrace<br>
                        Latheronwheel<br>
                        KW5 8NW, London<br>
                        UK 
                        <img src="/img/flags/russia_flag.svg" alt="Great Britain Flag" class="border rounded-circle avatar avatar-xss avatar-circle ms-1"></small> 
                        <div class="mt-3">
                            <!-- <h6 class="fw-bold mb-0">Mastercard</h6>
                            <span class="d-block text-body">
                            Номер карты: 
                            <span class="text-muted"><sub class="h5">**** **** ****</sub> 4291</span>
                            </span> -->
                            <x-button type="a" href="#" color="dark" text="связаться с менеджером" icon="headset_mic" />
                        </div>
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection