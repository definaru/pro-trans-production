@extends('layout/main')
@section('title', 'Счета')

@section('content')
<h6 class="text-muted">Всего {{$decl::orders($model['count'])}}</h6>
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card bg-white border-0 shadow-sm">
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <form>
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text bg-white border-end-0 border-light ps-2 pe-0">
                            <span class="material-symbols-outlined text-secondary fs-5">search</span>
                        </div> 
                        <input type="search" placeholder="Поиск счетов..." class="form-control border-light border-start-0" />
                    </div>
                </form>
                <div>...</div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover m-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="ps-3 text-muted"><small>#</small></td>
                            <th scope="col" class="text-muted"><small class="ms-3">№ Счёта</small></th>
                            <th scope="col" class="text-muted"><small>Контрагент</small></th>
                            <th scope="col" class="text-muted"><small>Сумма</small></th>
                            <th scope="col" class="text-muted"><small>Оплачено</small></th>
                            <th scope="col" class="text-muted"><small>Статус</small></th>
                            <th scope="col" style="width: 190px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($model['list'] as $item)
                        <tr class="align-middle">
                            <td class="ps-3" style="vertical-align: middle">
                                {{$loop->iteration}}.
                            </td>
                            <td>
                                <a href="/dashboard/payment/order/{{$item['id']}}" class="ms-3 text-decoration-none fw-bold text-dark">
                                    #{{$item['name']}}
                                </a>
                            </td>
                            <td>
                                {{$item['agent']}}
                            </td>
                            <td>
                                <small>
                                    {!!$currency::summa($item['sum'])!!}
                                </small>
                            </td>
                            <td>
                                <small>
                                    {!!$currency::summa($item['payedSum'])!!}
                                </small>
                            </td>
                            <td>
                                <x-badge color="{{$item['state']['color']}}" text="{{$item['state']['name']}}" />
                            </td>
                            <td>
                                <x-button 
                                    type="a" 
                                    size="sm" 
                                    color="dark"
                                    href="/dashboard/doc/{{$item['id']}}/{{$item['name']}}.pdf"
                                    text="Скачать в PDF" 
                                    icon="download" 
                                />
                            </td>
                        </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>

            <pre><?php //var_dump($model);?></pre>
        </div>
    </div>
</div>
@endsection