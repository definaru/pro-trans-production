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
    <template v-else>
        <form>
            <div class="mt-4 mb-2">
                <input type="text" class="form-control" name="inn" v-model.trim="inn" v-on:change="onChange" placeholder="Ваш ИНН" />
                <label>
                    <small class="d-block w-100 text-muted" style="font-size: 12px">
                        Данные организации будут заполнены автоматически
                    </small>
                </label>
            </div>
            <div class="mt-2 d-grid">
                <div class="btn btn-primary" id="loading" type="submit">Подтвердить</div>
            </div>
        </form>        
    </template>
</div>
@endverbatim
@endsection