@extends('layout/auth')

@section('title', 'Авторизация')

@section('content')
@include('layout.main.logo')
@if (session('status'))
    <x-alert type="success" message="{{ session('status') }}" />
@endif
<form action="/login" method="post" class="mt-4">
    @csrf
    <div class="mt-2">
        <div class="input-group">
            <span class="input-group-text border-end-0 bg-white @error('password') border-danger @enderror">
                <i class="ionicons ion-android-person text-muted"></i>
            </span>
            <input 
                type="text" 
                name="email" 
                class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror" 
                value="{{ old('email') }}"
                placeholder="Ваш логин" 
            />
        </div>
        @error('email')
            <small class="valid-feedback d-block text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mt-2">
        <div class="input-group">
            <span class="input-group-text border-end-0 bg-white @error('password') border-danger @enderror">
                <i class="ionicons ion-locked text-muted"></i>
            </span>
            <input 
                type="password" 
                name="password" 
                class="form-control border-start-0 ps-0 @error('password') is-invalid @enderror" 
                value="{{ old('password') }}"
                placeholder="Ваш пароль" 
            />                
        </div>
        @error('password')
            <small class="valid-feedback d-block text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="mt-2 d-grid">
        <x-button id="loading" type="submit" text="Войти" />
    </div>
</form>
<div class="w-100 mt-3 text-center">
    <a href="/forgot-password">Восстановить пароль</a>
</div>
@endsection