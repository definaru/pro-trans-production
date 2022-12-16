@extends('layout/main')

@section('title', 'Личный кабинет')

@section('content')
    <form action="" method="post" class="card shadow-sm border-0 mb-5 mt-3">
        @csrf
        <div id="type" class="card-body d-flex gap-2">
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="article" checked />
                <span>По артикулу</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="name" />
                <span>По наименованию</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="vin" />
                <span>Запрос по VIN</span>
            </label>
        </div>
        <div id="filter" class="card-body pt-0 d-flex gap-2">
            <!-- <label class="border rounded">
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
            </label> -->

            <input type="text" name="text" class="form-control" value="{{ old('text') }}" placeholder="Поиск..." />
            <x-button color="danger" icon="search" type="submit" text="Найти" />
        </div>
    </form>
    
    <pre><?php var_dump($search);?></pre>
    <?php if(isset($_POST)) { ?>
        <pre><?php var_dump($_POST);?></pre>
    <?php } ?>
    
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