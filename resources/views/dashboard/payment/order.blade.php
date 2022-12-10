@php
    error_reporting (E_ALL ^ E_NOTICE);
    $invoiceout = $order === '' ? '' : parse_url($order['order']['customerOrder']['meta']['href'])["path"];
    $invoiceout = explode('/', $invoiceout);
@endphp

@extends('layout/main')
@section('title', $order === '' ? 'Счета' : 'Счет покупателю №'.$order['order']['name'])

@section('breadcrumbs')
<div class="d-flex gap-2">
    <a href="/dashboard/payment/order" class="text-muted">Счета</a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали счёта</span>
</div>
@endsection
@section('content')
<div class="row mt-2">
    @if($order === '')
    <div class="col-md-12">
        <div class="card bg-white border-0 shadow-sm">
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <form>
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text bg-white border-end-0 border-light ps-2 pe-0">
                            <span class="material-symbols-outlined text-secondary fs-5">search</span>
                        </div> 
                        <input id="datatableSearch" type="search" placeholder="Поиск счетов..." class="form-control border-light border-start-0" />
                    </div>
                </form>
                <div class="dropdown">
                    <button id="showHideDropdown" data-bs-toggle="dropdown" class="d-flex align-items-center gap-1 btn btn-white btn-sm w-100">
                        <span class="material-symbols-outlined text-secondary fs-6">table</span>
                        Столбцы
                        <span class="badge bg-soft-dark text-dark rounded-circle ms-1">7</span>
                    </button> 
                    <div aria-labelledby="showHideDropdown" class="dropdown-menu dropdown-menu-end dropdown-card" style="width: 15rem">
                        <div class="card card-sm border-0">
                            <div class="card-body py-1 pe-0">
                                <div class="d-grid gap-2 ms-2">
                                    <label for="toggleColumn_order" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Заказ</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_order" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_date" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Дата</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_date" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_payment_status" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Статус платежа</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_payment_status" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_fulfillment_status" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span>Статус выполнения</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_fulfillment_status" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_payment_method" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Способ оплаты</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_payment_method" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_total" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Всего</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_total" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_actions" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Действия</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_actions" checked="checked" class="form-check-input" />
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover m-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="text-muted"><div class="ms-3">№</div></th>
                            <th scope="col" class="text-muted"><small>Заказ</small></th>
                            <th scope="col" class="text-muted"><small>Контрагент</small></th>
                            <th scope="col" class="text-muted"><small>Сумма</small></th>
                            <th scope="col" class="text-muted"><small>План. дата оплаты</small></th>
                            <th scope="col" class="text-muted"><small>Оплачено</small></th>
                            <th scope="col" class="text-muted"><small>Статус</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="order/b87526b8-6ff5-11ed-0a80-056400477101" class="ms-3 text-decoration-none">#0003</a></th>
                            <td><small class="text-secondary">29.11.2022 17:54</small></td>
                            <td><small>АО "КОЛЫМСКАЯ РОССЫПЬ"</small></td>
                            <td><small>16 897,40 ₽</small></td>
                            <td></td>
                            <td>0,00 ₽</td>
                            <td>
                                <span class="badge bg-soft-danger text-danger">
                                    <span class="legend-indicator bg-danger"></span>
                                    Не оплачено
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="ms-3 text-decoration-none">#0002</a></th>
                            <td><small class="text-secondary">29.11.2022 17:50</small></td>
                            <td><small>АО "КОЛЫМСКАЯ РОССЫПЬ"</small></td>
                            <td><small>10 400,00 ₽</small></td>
                            <td><small class="text-muted">30.11.2022 17:51</small></td>
                            <td>0,00 ₽</td>
                            <td>
                                <span class="badge bg-soft-success text-success">
                                    <span class="legend-indicator bg-success"></span>
                                    Оплачено
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="ms-3 text-decoration-none">#00001</a></th>
                            <td><small class="text-secondary">09.11.2022 13:15</small></td>
                            <td>ООО "ЗВЕЗДА СИБИРИ"</td>
                            <td><small>1 083 172,22 ₽</small></td>
                            <td></td>
                            <td>0,00 ₽</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white border-0">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="text-secondary me-2">Показано:</span> 
                            <div class="tom-select-custom">
                                <select id="datatableEntries" autocomplete="off" class="border-0 form-select text-secondary w-auto">
                                    <option value="12" selected="selected">12</option> 
                                    <option value="14">14</option> 
                                    <option value="16">16</option> 
                                    <option value="18">18</option>
                                </select>
                            </div> 
                            <span class="text-secondary me-2">из</span> 
                            <span class="text-secondary">20</span>
                        </div>
                    </div> 
                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <nav id="datatablePagination">
                                <div id="datatable_paginate">
                                    <ul id="datatable_pagination" class="pagination m-0">
                                        <li class="paginate_item page-item disabled">
                                            <a id="datatable_previous" class="paginate_button previous page-link">
                                                <span aria-hidden="true">Пред.</span>
                                            </a>
                                        </li> 
                                        <li class="paginate_item page-item active">
                                            <a class="paginate_button page-link">1</a>
                                        </li> 
                                        <li class="paginate_item page-item">
                                            <a class="paginate_button page-link">2</a>
                                        </li> 
                                        <li class="paginate_item page-item">
                                            <a id="datatable_next" class="paginate_button next page-link">
                                                <span aria-hidden="true">След.</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="col-lg-12 mb-5 mb-lg-0">
        <div class="card border-0 shadow-sm card-lg mb-5">
            <div class="card-body">
                <div class="row justify-content-lg-between">
                    <div class="col-sm order-2 order-sm-1 mb-3">
                        <div class="mb-2">
                            <img src="/img/color_logo.png" alt="Logo" style="width: 10rem" />
                        </div> 
                        <!-- <h1 class="h2 text-primary">Front Inc.</h1> -->
                    </div> 
                    <div class="col-sm-auto order-1 order-sm-2 text-sm-end mb-3">
                        <div class="mb-3">
                            <h2>
                                <a 
                                    href="/dashboard/payment/reports/{{$invoiceout[6]}}" 
                                    class="text-decoration-none" 
                                    data-bs-toggle="tooltip" 
                                    title="Перейти к отчету"
                                >
                                    #{{$order['order']['name']}}
                                </a>
                            </h2>
                            ООО "ПРОСПЕКТ ТРАНС"
                        </div> 
                    <address class="row text-muted">
                    <div class="col-6"></div>  
                    <div class="col-6">{{ config('app.address') }}</div>
                    </address>
                </div>
            </div> 
            <div class="row justify-content-md-between mb-3">
                <div class="col-md">
                    <strong>Плательщик:</strong> 
                    <h5>{{$order['company']['name']}}</h5>
                    <!-- <h5>@if($user->customer->superintendant) {{$user->customer->superintendant}} @else Нет данных @endif</h5>  -->
                    <address class="row text-muted">
                        <div class="col-6">
                            <!-- @if($user->customer->address) {{$user->customer->address}} @else Нет данных @endif -->
                            {{$order['company']['address']}}
                        </div>
                        <div class="col-6"></div>
                    </address>
                </div> 
                <div class="col-md text-md-end">
                    <dl class="row">
                        <dt class="col-sm-8">Дата счета:</dt> 
                        <dd class="col-sm-4">{{date_format(date_create($order['order']['updated']), 'd/m/Y')}}</dd>
                        
                    </dl> 
                    <dl class="row">
                        <dt class="col-sm-8">Срок оплаты:</dt> 
                        <dd class="col-sm-4">{{date_format(date_create($order['order']['moment']), 'd/m/Y')}}</dd>
                    </dl>
                </div>
            </div> 
            <div class="table-responsive">
                <table class="table table-borderless table-nowrap table-align-middle">
                    <thead class="thead-light">
                        <tr class="border-bottom border-light text-muted">
                            <th>#</th> 
                            <th>Наименование</th>
                            <th class="text-center">Кол-во</th> 
                            <!-- <th>Доступно</th>  -->
                            <th>НДС</th>
                            <th class="text-center">Скидка</th>
                            <th class="text-end">Цена</th>
                        </tr>
                    </thead> 
                    <tbody>
                        @foreach($order['invoice'] as $invoice)
                        <tr class="border-bottom border-light">
                            <td>{{$loop->iteration}}</td> 
                            <th>
                                <div>
                                    <span class="me-2">{{$invoice['product']['article']}}</span>
                                    <span class="fw-light">{{$invoice['product']['name']}}</span>
                                </div>
                            </th>
                            <td class="text-center">{{$invoice['quantity']}} шт</td> 
                            <!-- <td>5</td>  -->
                            <td class="table-text-end">{{$invoice['vat']}}%</td>
                            <td class="text-center">{{$invoice['discount']}}%</td>
                            <td class="text-end fw-bold">
                                @php echo number_format(($invoice['price']) / 100, 2, '.', ' ') @endphp ₽
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <hr class="my-4" /> 
            <div class="row justify-content-md-end mb-3">
                <div class="col-md-4 col-lg-5">
                    <div class="mb-3 text-secondary">
                        <p>Если у вас есть какие-либо вопросы относительно этого счета, используйте следующую контактную информацию:</p>
                        <p>{{ $contact::format_phone(config('app.phone')) }}<br />
                        {{ config('app.email') }}</p>
                    </div> 
                </div>
                <div class="col-md-8 col-lg-7">
                    <dl class="row text-sm-end">
                        <dt class="col-sm-6 text-muted">Промежуточный итог:</dt> 
                        <dd class="col-sm-6">
                            @php echo number_format(($order['order']['sum']) / 100, 2, '.', ' ') @endphp ₽
                        </dd> 
                        <dt class="col-sm-6 text-muted">Кол-во:</dt> 
                        <dd class="col-sm-6">{{$order['order']['positions']['meta']['size']}}</dd> 
                        <dt class="col-sm-6 text-muted">НДС:</dt> 
                        <dd class="col-sm-6">
                            @php echo number_format(($order['order']['vatSum']) / 100, 2, '.', ' ') @endphp ₽
                        </dd> 
                        <dt class="col-sm-6 text-muted">Итого:</dt> 
                        <dd class="col-sm-6 fw-bold">
                            @php echo number_format(($order['order']['sum']) / 100, 2, '.', ' ') @endphp ₽
                        </dd>  
                    </dl>
                </div>
            </div> 
            <p class="small mb-0">© 2021 {{ config('app.name') }}.</p>
        </div>
    </div> 
    <!-- <div class="d-flex justify-content-end d-print-none gap-3">
        <a href="#" class="btn btn-white">
            <i class="bi-file-earmark-arrow-down me-1"></i> PDF
        </a> 
        <a href="javascript:;" onclick="window.print(); return false;" class="btn btn-primary">
            <i class="bi-printer me-1"></i> 
            Распечатать
        </a>
    </div> -->
    @endif
</div>
@endsection