@extends('layout/main')
@section('title', 'Пользователи')

@section('content')
      
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-light" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">#</div>
                            </th> 
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 205px">
                                    Название компании&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>                            
                            {{-- <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 210px">
                                    Ген.директор&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th> --}}
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 170px">
                                    E-mail&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 135px">
                                    Дата создания&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 100px">
                                    Статус&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 80px">
                                    ОКВЭД&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 88px">
                                    ИНН&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 85px">
                                    КПП&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 111px">
                                    ОГРН&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>                            
                            {{-- <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 112px">
                                    ОГРН дата&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th> --}}
                            <th class="d-flex align-items-center gap-2 text-center border-0" style="width: 165px; height: 40px">
                                Опции
                                <span class="material-symbols-outlined fs-6 text-secondary">settings</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        @foreach ($model as $item)
                        <tr>
                            <td>
                                <div class="ms-2">1</div>
                            </td> 
                            <td>
                                <a href="/dashboard/admin/user/{{$item['uuid']}}" class="text-danger text-decoration-none">
                                    {{$item['company']}}
                                </a>
                            </td>                             
                            {{-- <td>
                                <div>
                                    {{$item['name']}}
                                </div>
                            </td>  --}}

                            <td onclick="alert('E-mail письма пока отправить нельзя')">{!!$contact::getEmail($item['email'])!!}</td> 
                            <td>
                                <small>
                                    {{date('d/m/Y, H:i', strtotime($item['created_at']))}}
                                </small>
                            </td>
                            <td>
                                @if ($item['id_card'] === 'z' || $item['id_card'] === 0)
                                    <x-badge color="40931" text="На рассмотрении" />
                                @elseif ($item['id_card'] === 2)
                                    <x-badge color="danger" text="Заблокирован" /> 
                                @else
                                    <x-badge color="34617" text="Активирован" />  
                                @endif
                            </td> 
                            <td>
                                <a href="/dashboard/admin/users/okved/{{$item['okved']}}">{{$item['okved']}}</a> 
                            </td> 
                            <td>
                                {{$item['inn']}}
                            </td> 
                            <td>
                                {{$item['kpp']}}
                            </td> 
                            <td>
                                {{$item['ogrn']}}
                            </td>                             
                            {{-- <td>
                                {{date('d.m.Y', $item['ogrn_date'])}} г.
                            </td>  --}}
                            
                            <td>
                                <div id="card3292240d-5e7f-11ed-0a80-0eca004678fc" data-card="3292240d-5e7f-11ed-0a80-0eca004678fc,A9061800109,Фильтр масляный,1,133006,133006">
                                    <a href="/dashboard/admin/user/{{$item['uuid']}}" type="button" class="btn btn-dark px-4 btn-sm">
                                        Посмотреть
                                    </a>
                                </div>
                            </td>
                            
                        </tr>                            
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{-- <pre><?php //var_dump($model);?></pre> --}}
        </div>          
    </div>
</div>

@endsection