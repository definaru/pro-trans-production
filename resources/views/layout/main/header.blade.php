<header class="d-flex gap-3 align-items-center justify-content-between bg-white py-3 px-4 shadow-sm">
    <div class="d-flex align-items-center gap-3 w-50">
        <span class="material-symbols-outlined cp" v-on:click="toggleMenu">menu</span>
        <div class="input-group">
            <span class="material-symbols-outlined input-group-text bg-light border-0 px-2 text-muted" id="basic-addon1">search</span>
            <input type="text" class="form-control bg-light border-0 ps-0" placeholder="Поиск по артиклу..." />
        </div>                    
    </div>
    <div class="d-flex align-items-center gap-1">
        <span class="material-symbols-outlined">call</span>
        <a href="tel:{{ config('app.phone') }}" class="fw-bold text-dark text-decoration-none">{{ config('app.phone') }}</a>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown">
                <span class="material-symbols-outlined fs-2 text-white bg-primary rounded-circle">account_circle</span>
                <div>
                    @if($user->customer->company)
                        {{$user->customer->company}}
                    @else
                        Нет данных
                    @endif
                </div>
            </div>     
            <ul class="dropdown-menu dropdown-menu-end profile-menu shadow">
                @foreach($usermenu as $list)
                <x-dropdown href="{{$list['href']}}" link="{{$list['link']}}" icon="{{$list['icon']}}" />
                @endforeach
            </ul>                   
        </div>
        <a href="/dashboard/card" class="dropdown text-decoration-none">
            <h6 class="position-absolute top-0 start-100 translate-middle">
                <span class="badge rounded-pill bg-danger px-1 py-0">3</span>
            </h6>
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown">
                <i class="material-symbols-outlined fs-5 text-secondary">shopping_cart</i>
            </div>
        </a>
        <div class="dropdown">
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown" title="Справочная информация">
                <span class="material-symbols-outlined fs-5 text-secondary">help</span>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                @foreach($helpmenu as $item)
                <x-dropdown href="{{$item['href']}}" link="{{$item['link']}}" icon="{{$item['icon']}}" />
                @endforeach
            </ul>
        </div>
    </div>
</header>