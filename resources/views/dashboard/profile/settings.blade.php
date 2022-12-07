@extends('layout/main')
@section('title', 'Настройки')

@section('content')

<div class="w-100 pb-5 pt-2 d-block">
    <ul class="nav nav-tabs border-0 nav-justified">
        <li class="nav-item">
            <button class="nav-link border-0 active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane">
                Данные о компании
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link border-0 fw-bold" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane">
                Смена пароля
            </button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane rounded-bottom fade show active" id="home-tab-pane">
            <x-card icon="business_center" header="Покупатель {{$profile['name']}}">
                <form action="" class="d-flex gap-3 flex-column" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$profile['id']}}" />
                    <div>
                        <label class="fw-bold">Адрес компании <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="legalAddress" value="{{$profile['legalAddress']}}" />
                    </div>
                    <div>
                        <label class="fw-bold">Фактический адрес компании <span class="fw-light">(опционально)</span></label>
                        <input type="text" class="form-control" name="actualAddress" value="{{$profile['actualAddress']}}" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="fw-bold">E-mail <span class="fw-light">(фактический \ рабочий)</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" placeholder="E-mail" value="{{$profile['email']}}" />
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold">Телефон <span class="fw-light">(фактический \ рабочий)</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" value="{{$profile['phone']}}" />
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="fw-bold">Способ получения <span class="fw-light">(опционально)</span></label>
                            <select class="form-control" name="delivery">
                                <option value="" disabled selected>Выберите способ получения...</option>
                                <option value="FOB">Доставка</option>
                                <option value="EXW">Самовывоз</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold">Контактное лицо <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="person" value="Некрасов Марк" />
                        </div>                         
                    </div>
                    <div class="border-top pt-3">
                        <x-button type="submit" color="dark" icon="done" text="Сохранить" />
                    </div>
                </form>
            </x-card>
        </div>

        <div class="tab-pane rounded-bottom fade" id="disabled-tab-pane">
            <x-card icon="lock_person" header="Смена пароля">
            @if (session('status'))
                <x-alert type="success" message="{{ session('status') }}" />
            @else
                <div>
                    <x-alert type="warning" message="Вам необходимо сменить пароль!" />
                    <x-alert type="danger" message="Новый пароль не должен совпадать со старым!" />
                    <x-alert type="info" header="Требования к паролю:" message="8 и более символов, хотя бы одна буква, хотя бы одна цифра" />                    
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-3 py-4">
                        <form action="/confirm-reset-password" class="d-flex gap-3 flex-column" method="post">
                            @csrf
                            <div>
                                <div class="input-group">
                                    <span class="input-group-text material-symbols-outlined bg-white">
                                        password
                                    </span>
                                    <input 
                                        type="password" 
                                        class="form-control border-start-0 border-end-0 @error('password') is-invalid @enderror" 
                                        placeholder="Новый пароль" 
                                        name="password" 
                                    />
                                    <span class="material-symbols-outlined bg-white input-group-text cp text-secondary">
                                        visibility
                                    </span>
                                </div>
                                @error('password')
                                    <small class="valid-feedback d-block text-danger">{{ $message }}</small>
                                @enderror                                
                            </div>

                            <div>
                                <x-button type="submit" color="dark" icon="done" text="Сохранить" />
                            </div>
                        </form>                        
                    </div>
                </div>            
            @endif

            </x-card>
        </div>
    </div>
</div>
<pre><?php var_dump($_POST);?></pre>
@endsection