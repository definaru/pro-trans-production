@extends('layout/main')
@section('title', $order === '' ? 'Счета' : 'Счет покупателю №'.$order['order']['name'])

@section('content')
<div class="row mt-2">
    @if($order === '')
    ...
    @else
    <div class="col-lg-12 mb-5 mb-lg-0">
        <div class="card border-0 shadow-sm card-lg mb-5">
            <div class="card-body">
                <div class="row justify-content-lg-between">
                    <div class="col-sm order-2 order-sm-1 mb-3">
                        <div class="mb-2">
                            <img src="/img/logo.svg" alt="Logo" style="position: absolute;top: -80px;left: -43px;width: 19rem;height: 19rem" />
                        </div> 
                        <!-- <h1 class="h2 text-primary">Front Inc.</h1> -->
                    </div> 
                    <div class="col-sm-auto order-1 order-sm-2 text-sm-end mb-3">
                        <div class="mb-3">
                            <h2>#{{$order['order']['name']}}</h2>
                            @if($user->customer->company)
                                {{$user->customer->company}}
                            @else
                                Нет данных
                            @endif
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
                        <tr class="border-bottom border-light">
                            <th>#</th> 
                            <th>Наименование</th>
                            <th>Кол-во</th> 
                            <!-- <th>Доступно</th>  -->
                            <th>НДС</th>
                            <th>Скидка</th>
                            <th class="table-text-end">Цена</th>
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
                            <td>{{$invoice['quantity']}} шт</td> 
                            <!-- <td>5</td>  -->
                            <td class="table-text-end">{{$invoice['vat']}}%</td>
                            <td class="table-text-end">{{$invoice['discount']}}%</td>
                            <td class="table-text-end fw-bold">
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