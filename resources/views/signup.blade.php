@extends('layout/auth')

@section('title', 'Регистрация')

@section('content')
@include('layout.main.logo')

@verbatim
<div class="text-center">
    <template v-if="result.length > 0">
        <span 
            class="material-symbols-outlined fs-1 py-3" 
            :class="[result.data.state.status == 'LIQUIDATED' ? 'text-danger' : 'text-success']"
        >
            {{result.data.state.status == 'LIQUIDATED' ? 'lock' : 'check_circle'}}
        </span>
        
        <template v-if="result.data.state.status == 'LIQUIDATED'">
            <p class="text-secondary">Извините, Вам в доступе отказано.</p>
        </template>
        <template v-else-if="email.email">
            <h6>Поздравляем</h6>
            <p class="text-secondary m-0 fw-bold">Ваша компания подтверждена</p>
            <a href="/" @click="Login">Войти</a>
        </template> 
    </template>
    <template v-else></template>
</div>
@endverbatim
<form v-if="result.length === 0">
    <div class="mt-4 mb-2">
        <input type="text" class="form-control" name="inn" v-model.trim="inn" v-on:change="onChange" placeholder="Ваш ИНН" />
        <label>
            <small class="d-block w-100 text-muted" style="font-size: 12px">
                Данные организации будут заполнены автоматически
            </small>
        </label>
    </div>
    <div class="mt-2 d-grid">
        <div class="btn btn-danger" id="loading" type="submit">Подтвердить</div>
    </div>
</form>  
<div v-else>
    <div class="d-flex justify-content-center" style="position: relative;z-index: 100">
        <a href="/signup" @click="aStepBack()" class="text-primary text-decoration-none">
            ← на шаг назад
        </a>        
    </div>

    <form action="/api/counterparty" method="post" class="signup py-2">
        <input type="hidden" name="_token" value="<?=csrf_token();?>" />
        <input type="hidden" name="company" :value="JSON.stringify(moysklad)" />
        <div class="mt-2">
            <div class="position-relative">
                <input 
                    type="text" 
                    name="email"
                    autocomplete="off"
                    autocorrect="off"
                    spellcheck="false"
                    autocapitalize="words"
                    v-model="email"
                    v-on:change="onChangeContact"
                    class="form-control ps-5 @error('email') is-invalid @enderror" 
                    placeholder="Укажите ваш рабочий e-mail" 
                />
                <i class="material-symbols-outlined fs-5" style="position: absolute;top: 8px;left: 11px;color: #999">mark_as_unread</i>
            </div>
            @error('email')
                <small class="valid-feedback d-block text-danger m-0">{{ $message }}</small>
            @enderror
        </div>
        <div class="mt-2">
            <div class="position-relative">
                <input 
                    type="text" 
                    name="phone"
                    autocomplete="off"
                    autocorrect="off"
                    spellcheck="false"
                    v-model="phone"
                    v-on:change="onChangeContact"
                    class="form-control ps-5 @error('phone') is-invalid @enderror" 
                    placeholder="Укажите ваш рабочий телефон" 
                />
                <i class="material-symbols-outlined fs-5" style="position: absolute;top: 8px;left: 11px;color: #999">call</i>
            </div>
            @error('phone')
                <small class="valid-feedback d-block text-danger m-0">{{ $message }}</small>
            @enderror
        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-danger" id="loading" type="submit">Завершить регистрацию</button>
        </div>
    </form>    
</div>

<pre>@{{ moysklad.length ? JSON.stringify(moysklad, null, 4) : '' }}</pre>
@endsection