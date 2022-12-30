@php
    $start = $deal::status() === '1' ? $usermenu : $nouser;
@endphp
<header class="d-flex gap-3 align-items-center justify-content-between border-bottom border-light bg-white py-3 px-4 shadow-sm d-print-none">
    <div class="d-flex align-items-center gap-3 w-50">
        <span class="material-symbols-outlined cp" v-on:click="toggleMenu">menu</span>
        @if($url !== '/dashboard' && $deal::status() === '1')
        <form action="/dashboard/result/search" method="post" class="input-group">
            @csrf
            <span class="material-symbols-outlined input-group-text bg-light border-0 px-2 text-muted" id="basic-addon1">search</span>
            <input type="text" name="text" value="<?=isset($_POST['text']) ? $_POST['text'] : '';?>" class="form-control search bg-light border-0 ps-0" placeholder="Поиск по артиклу..." />
            <span></span>
        </form>
        @endif                    
    </div>
    <div class="d-flex align-items-center gap-1">
        <span class="material-symbols-outlined text-secondary">call</span>
        <a href="tel:{{ config('app.phone') }}" class="fw-bold text-dark text-decoration-none">{{ $contact::format_phone(config('app.phone')) }}</a>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown">
                <span class="material-symbols-outlined fs-2 text-white bg-soft-danger rounded-circle">account_circle</span>
                @include('layout.main.company.name')
            </div>
            <ul class="dropdown-menu dropdown-menu-end profile-menu shadow">
                @foreach($start as $list)
                <x-dropdown href="{{$list['href']}}" link="{{$list['link']}}" icon="{{$list['icon']}}" />
                @endforeach
            </ul>                   
        </div>
        <a href="/dashboard/card" class="dropdown text-decoration-none">
            <h6 class="position-absolute top-0 start-100 translate-middle" v-if="card.length">
                <span class="badge rounded-pill bg-danger px-1 py-0">
                @{{card.length}}
                </span>
            </h6>
            @if($deal::status() === '1')
            <div class="d-flex align-items-center gap-2 cp py-0">
                <i class="material-symbols-outlined fs-5 text-secondary">shopping_cart</i>
            </div>
            @endif
        </a>
        <div class="dropdown">
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown" style="cursor: help">
                <span class="material-symbols-outlined fs-5 text-secondary" data-bs-toggle="tooltip" title="Справочная информация">help</span>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                @foreach($helpmenu as $item)
                <x-dropdown 
                    href="{{$item['href']}}" 
                    link="{{$item['link']}}" 
                    icon="{{$item['icon']}}" 
                    target="{{$item['target']}}" 
                />
                @endforeach
            </ul>
        </div>
    </div>
</header>