@extends('layout/main')
@section('title', 'Личный кабинет')

@section('content')
    <div>
        <div class="d-flex gap-2">
            <div class="badge bg-warning text-dark cp">Поиск</div>
            <div class="badge bg-white shadow-sm text-dark cp">Ассортимент</div>
            <div class="badge bg-white shadow-sm text-dark cp">Оригинальные каталоги</div>
            <div class="badge bg-white shadow-sm text-dark cp">TecDoc</div>
            <div class="badge bg-white shadow-sm text-dark cp">ACat</div>
            <div class="badge bg-white shadow-sm text-dark cp">По брендам</div>
            <div class="badge bg-white shadow-sm text-dark cp">Шины и диски</div>
            <div class="badge bg-white shadow-sm text-dark cp">Гараж</div>
            <div class="badge bg-white shadow-sm text-dark cp">Фавориты</div>
            <div class="badge bg-white shadow-sm text-dark cp">Уценка</div>
        </ul>
    </div>
    <div class="card shadow-sm border-0 mb-5 mt-3">
        <div id="type" class="card-body d-flex gap-2">
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" checked />
                <span>Точный по номеру</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" />
                <span>С начала номера</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" />
                <span>По наименованию</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" />
                <span>По размерам</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" />
                <span>По штрих-коду</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" />
                <span>Поиск по VIN</span>
            </label>
        </div>
        <div id="filter" class="card-body pt-0 d-flex gap-2">
            <label class="border rounded">
                <input type="checkbox" name="filter" class="d-none"> 
                <span class="btn material-symbols-outlined">tune</span>
            </label>
            <label class="border rounded">
                <input type="checkbox" name="filter" class="d-none"> 
                <span class="btn material-symbols-outlined">table_view</span>
            </label>
            <label class="border rounded">
                <input type="checkbox" name="filter" class="d-none"> 
                <span class="btn material-symbols-outlined">photo_camera</span>
            </label>

            <input type="text"  class="form-control" placeholder="Поиск..." />
            <bottom class="btn btn-warning border">Найти</bottom>
        </div>
    </div>
    <!-- @role('customer')
        <p>Project Manager Panel</p> 
    @endrole
    @role('admin')
        <strong>Admin Panel</strong> 
    @endrole -->
    <div class="row">
        <div class="col-md-12">
            Список категорий
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <x-category-card icon="oil_barrel" header="Масла" category="smtp" />
        </div>
        <div class="col-md-4">
            <x-category-card icon="hotel_class" header="Оригинальные каталоги" category="smtpq" />
        </div>
        <div class="col-md-4">
            <x-category-card icon="settings_suggest" header="TecDoc Inside" category="smtpw" />
        </div>
        <div class="col-md-4">
            <x-category-card icon="motion_photos_auto" header="Каталоги ACat" category="smtpa" />
        </div>
        <div class="col-md-4">
            <x-category-card icon="view_in_ar_new" header="Бренды запчастей" category="smtps" />
        </div>
        <div class="col-md-4">
            <x-category-card icon="copyright" header="Неоригинальные каталоги" category="smtpc" />
        </div>
        <div class="col-md-4">
            <x-category-card icon="tire_repair" header="Подбор шин и дисков" category="smtpt" />
        </div>
    </div>
@endsection