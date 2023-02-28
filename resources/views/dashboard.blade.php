@php
    $options = [
        [
            'name' => 'По артикулу',
            'value' => 'article'
        ],
        [
            'name' => 'По наименованию',
            'value' => 'name'
        ]
    ];
    $size = session('search') ? session('search')['meta']['size'] : '';
@endphp
@extends('layout/main')

@section('title', $deal::status() === '1' ? 'Поиск запчастей' : 'Статус договора')

@section('content')

    @if($deal::status() === '0')
        <x-alert type="info" message="Договор составлен. Нужно прислать подписанный договор с печатю. Два экземпляра" />   
        <strong class="d-grid mb-3">Варианты отправки документов:</strong>
        
        <ul class="d-grid gap-3">
            <li>Скан документов с подписью и печатью в PDF - <i>{!!$contact::getEmail('manager@prospekt-parts.com', ['text-dark'])!!}</i></li>
            <li>На бумаге, формата А4, почтой - <i>100111, А/Я 1245, г. Мытищи</i> <br />
               <strong>Кому:</strong> &laquo;ООО Проспект Транс&raquo;</li>
        </ul>  
    @elseif($deal::status() === 'z')
        <x-alert type="danger" message="Договор не заключён" />    
    @elseif($deal::status() === '2')
        <x-alert type="danger" message="Договор расторгнут. Вы не можете пользоваться данной платформой" />    
    @elseif($deal::status() === '1')
    <form action="/dashboard/search" method="post" class="card shadow-sm border-0 mb-5 mt-3">
        @csrf
        <div id="type" class="card-body d-flex align-items-center gap-2">
            @foreach($options as $item)
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="{{$item['value']}}" @if ($item['value'] === old('type')) checked @endif />
                <span>{{$item['name']}}</span>
            </label>
            @endforeach
            <label class="border rounded" data-bs-toggle="modal" data-bs-target="#vinModal">
                <input type="radio" name="type" class="d-none" value="vin" />
                <span>Запрос по VIN</span>
            </label>
            <!-- error('type')
                <label class="d-flex align-items-center gap-2 text-danger font-monospace">
                    <span class="fs-3">←</span> 
                    укажите, по какому параметру искать
                </label>
            enderror -->
        </div>
        <div id="filter" class="card-body pt-0 d-flex gap-2">
            <input type="text" name="text" class="form-control" value="{{session('text') ? session('text') : old('text') }}" placeholder="Поиск..." />
            <x-button color="danger" icon="search" type="submit" text="Найти" />
        </div>
    </form>
    @endif

    @error('text')
        <p>Получен пустой запрос.</p>
    @enderror    
    @if(session('search'))
        @if($size === 0)
        <p>По запросу <strong>"{{session('text')}}"</strong> ничего не найдено</p>
        @else
        <p>{{$decl::search($size)}} <span class="badge bg-danger rounded-pill">{{$size}}</span> </p>        
        @endif

        @foreach(session('search')['rows'] as $item)
        <div class="d-flex justify-content-between w-100 bg-white px-3 py-2 my-1 shadow-sm rounded">
            <div>
                <span class="ps-1 pe-0 btn">{{$loop->iteration}}.</span>
                <a href="/dashboard/product/details/{{$item['id']}}" class="text-dark text-decoration-none btn">
                    <b>{{$item['code']}}</b> &#160;&#160; 
                    <?php
                        $str = str_replace(mb_strtolower(session('text')), '<mark class="rounded py-0">'.mb_strtolower(session('text')).'</mark>', mb_strtolower($item['name']));
                        $str = mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1, mb_strlen($str));
                        echo $str;
                    ?>
                </a>                
            </div>
            <div class="d-flex gap-2">
                
                <div class="btn">
                    @php echo number_format(($item['salePrices'][0]['value']) / 100, 2, '.', ' ') @endphp ₽
                </div> 
                <div 
                    id="card{{$loop->iteration}}" 
                    data-card="{{$item['id']}},{{$item['code']}},{{$item['name']}},1,{{$item['salePrices'][0]['value']}},{{$item['salePrices'][0]['value']}}" 
                    v-on:click="addToCard({{$loop->iteration}})"
                >
                    <x-button 
                        type="submit" 
                        icon="add_shopping_cart" 
                        color="dark" 
                        text="В корзину" 
                    />
                </div>
            </div>
        </div>
        @endforeach
    @endif

    @role('admin')
        <strong>Admin-Панель</strong> 
    @endrole

    
    <!-- @role('customer')
        <p>Project Manager Panel</p> 
    @endrole
    @role('admin')
        <strong>Admin Panel</strong> 
    @endrole -->

    <?php /*
    <div class="row">
        <div class="col-md-12">
            Список категорий
        </div>
    </div>    
    <div class="row">
        <div class="col-md-4">
            <x-category-card icon="oil_barrel" header="Масла" category="smtp" />
        </div>
    </div>    
    */ ?>


    <div class="modal fade" id="vinModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content border-0" novalidate @submit.prevent="Save" v-if="!send">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5">Заказ по VIN номеру</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div class="mt-2">
                        <input 
                            type="text" 
                            class="form-control" 
                            :class="[error.vin && vin === '' ? 'is-invalid' : '']"
                            v-model="vin" 
                            placeholder="Укажите VIN номер" 
                        />
                        <div class="invalid-feedback d-block m-0" v-if="error.vin && vin === ''">
                            Пожалуйста, укажите VIN номер модели
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea 
                            rows="5" 
                            class="form-control" 
                            :class="[error.spares && spares === '' ? 'is-invalid' : '']"
                            v-model="spares" 
                            placeholder="Укажите список запчастей"
                        >
                        </textarea>
                        <div class="invalid-feedback d-block m-0" v-if="error.spares && spares === ''">
                            Пожалуйста, напишите через запятую, какие запчасти вам нужны
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <div class="btn btn-outline-light text-dark" data-bs-dismiss="modal">Отмена</div>
                    <button type="submit" class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center" v-if="!loading">
                        <span class="material-symbols-outlined spin">autorenew</span>
                        Отправляю...
                    </button>
                    <x-button color="dark" icon="forward" type="submit" text="Отправить менеджеру" v-on:click="Send" v-else />
                </div>
            </form>
            <div class="modal-content border-0" v-else>
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5">Заказ по VIN номеру</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <x-alert type="success" message="Ваша заявка принята." close="false" />
                </div>
            </div>
        </div>
    </div>

@if($deal::status() === 'z')
    <div data-bs-backdrop="static" data-bs-keyboard="false" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold">Здравствуйте</h1>
                </div>
                <div class="modal-body py-0">
                    <p>
                        В настоящий момент, вы не можете пользоваться нашей платформой,
                        так как у вас не заключён договор. Чтобы начать пользоваться, нажмите кнопку:
                    </p>
                </div>
                <div class="modal-footer border-0">
                    <x-button type="a" href="/dashboard/document/agreement" color="dark" icon="quick_reference" text="Заключить договор" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
@endif

@endsection