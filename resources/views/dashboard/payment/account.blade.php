@extends('layout/main')
@section('title', 'Предзаказы')

@section('content')
<h6 class="text-muted">Всего 2 товара</h6>

<ul class="list-group list-group-flush mt-4 d-grid gap-2">
    <li class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
        <small class="d-flex align-items-center gap-3" style="width: 320px;">
            <img src="/img/no_photo.jpg" alt="ПРОКЛАДКА СЕПАРАТОРА МАСЛ" class="rounded" style="width: 50px" /> 
            <a href="http://prospektrans.host/dashboard/product/details/42919327-5064-11ed-0a80-05bf003d0d2b" class="d-flex align-items-center text-muted text-decoration-none">
                <div class="d-flex justify-content-start flex-column">
                    <span>A5410150980</span> 
                    <p class="fw-bold text-dark m-0">ПРОКЛАДКА СЕПАРАТОРА МАСЛ</p>
                </div>
            </a>
        </small>
        <div class="position-relative" style="width: 180px;">
            Цена
            <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
        </div>
        <div style="width: 100px;">
            <span class="badge bg-soft-success text-success">
                <span class="legend-indicator bg-success"></span>
                По договорённости
            </span>
        </div>
        <div class="input-group" style="width: 140px;">
            <button class="btn btn-sm material-symbols-outlined pe-0">add</button> 
            <div class="form-control form-control-sm fs-6 border-0 text-center">1</div>
            <button class="btn btn-sm material-symbols-outlined ps-0">remove</button>
        </div>
        <div class="btn-group"><button class="btn text-danger rounded material-symbols-outlined">delete</button></div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
        <small class="d-flex align-items-center gap-3" style="width: 320px;">
            <img src="/img/no_photo.jpg" alt="КАРТРИДЖ ФИЛЬТРА ТОПЛИВНО" class="rounded" style="width: 50px" /> 
            <a href="http://prospektrans.host/dashboard/product/details/49f64444-5064-11ed-0a80-05bf003d1191" class="d-flex align-items-center text-muted text-decoration-none">
                <div class="d-flex justify-content-start flex-column">
                    <span>A9604770503</span> 
                    <p class="fw-bold text-dark m-0">КАРТРИДЖ ФИЛЬТРА ТОПЛИВНО</p>
                </div>
            </a>
        </small>
        <div class="position-relative" style="width: 180px;">
            Цена
            <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
        </div>
        <div style="width: 100px;">
            <span class="badge bg-soft-success text-success">
                <span class="legend-indicator bg-success"></span>
                По договорённости
            </span>
        </div>
        <div class="input-group" style="width: 140px;">
            <button class="btn btn-sm material-symbols-outlined pe-0">add</button> 
            <div class="form-control form-control-sm fs-6 border-0 text-center">1</div>
            <button class="btn btn-sm material-symbols-outlined ps-0">remove</button>
        </div>
        <div class="btn-group"><button class="btn text-danger rounded material-symbols-outlined">delete</button></div>
    </li>
</ul>
<div class="d-flex justify-content-between">
    <div class="col-md-6 mt-3">
        <p class="m-0 text-muted"><small>
            Нажимая кнопку "Оформить предзаказ" вы соглашаетесь с нашей 
            <a href="/doc/privatepolice" target="_blank" class="text-muted">политикой конфиденциальности</a> и
            <a href="/doc/license" target="_blank" class="text-muted">пользовательским соглашением</a></small>
        </p>
    </div>
    <div class="d-flex justify-content-end gap-4 align-items-center mt-3 mb-5">
        <div class="py-2"></div>
        <div class="py-2 fw-bold pe-4"></div>
        <div class="py-2">2 (шт.)</div>
        <div>
            <button class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center">
                <span class="material-symbols-outlined">check</span>
                Оформить предзаказ
            </button>
        </div>
    </div>
</div>
@endsection