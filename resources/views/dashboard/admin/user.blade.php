@extends('layout/main')
@section('title', 'Подробнее о пользователе')
@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    <a href="/dashboard/admin/users" class="text-muted">
        Пользователи
    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">{{$model[0]['company']}}</span>    
</div>
@endsection
@section('content')  
<h6 class="text-muted">ID: (МойСклад) {{$uuid}}</h6>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td><strong>Ф.И.О. директора</strong></td>
                            <td>{{$model[0]['name']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>E-mail:</strong></td>
                            <td onclick="alert('E-mail письма пока отправить нельзя')">{!!$contact::getEmail($model[0]['email'])!!}</td> 
                            <td>
                                @if ($model[0]['email_verified_at'] === null)
                                    <b class="text-danger d-flex gap-1 align-items-center">
                                        <span class="material-symbols-outlined">emergency_home</span> 
                                        <small>Не подтверждён</small> 
                                    </b>
                                @else
                                    <b class="text-success d-flex gap-1 align-items-center">
                                        <span class="material-symbols-outlined">verified_user</span> 
                                        <small>Подтверждён</small> 
                                    </b>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Дата создания аккаунта:</strong></td>
                            <td>
                                {{$timer::datatime($model[0]['created_at'])}}
                            </td>
                            <td>{{$timer::difference($model[0]['created_at'])}}</td>
                        </tr>
                        <tr>
                            <td><strong>Статус клиента:</strong></td>
                            <td>
                                @if ($model[0]['id_card'] === 'z' || $model[0]['id_card'] === 0)
                                    <x-badge color="40931" text="На рассмотрении" />
                                @elseif ($model[0]['id_card'] === 2)
                                    <x-badge color="danger" text="Заблокирован" /> 
                                @else
                                    <x-badge color="34617" text="Активирован" />  
                                @endif
                            </td>
                            <td>
                                <select class="form-control">
                                    <option value="" selected disabled>Выбрать статус...</option>
                                    <option value="0">На рассмотрение</option>
                                    <option value="2">Заблокировать</option>
                                    <option value="1">Активировать</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Название компании:</strong></td>
                            <td>{{$model[0]['company']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>ОКВЭД:</strong></td>
                            <td><a href="/dashboard/admin/users/okved/{{$model[0]['okved']}}">{{$model[0]['okved']}}</a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>ИНН:</strong></td>
                            <td>{{$model[0]['inn']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>ОГРН:</strong></td>
                            <td>{{$model[0]['ogrn']}}</td>
                            <td>
                                <div class="d-flex gap-1 align-items-center text-muted">
                                    <span class="material-symbols-outlined fs-5">calendar_month</span>
                                    {{date('d.m.Y', $model[0]['ogrn_date'])}} г.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>КПП:</strong></td>
                            <td>{{$model[0]['kpp']}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Юридический адрес:</strong></td>
                            <td>
                                <a href="https://www.google.ru/maps/place/{{urlencode($model[0]['address'])}}" target="_blank" rel="noopener noreferrer">
                                    {{$model[0]['address']}}
                                </a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection