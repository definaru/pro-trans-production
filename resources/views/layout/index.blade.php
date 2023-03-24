<!DOCTYPE html>
<html lang="ru">
    <head itemscope itemtype="http://schema.org/WPHeader">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />

    <meta name="theme-color" content="#8630a3"/>
    <meta name="msapplication-navbutton-color" content="#8630a3"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#8630a3"/>

    <title itemprop="headline">@yield('title')</title>

    @include('layout.main.seo.data')
    <link rel="shortcut icon" href="/img/logotype.jpg" type='image/x-icon'/>
    <link rel="apple-touch-icon" href="/img/logotype.jpg" />	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.29/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> 
    
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
        ym(92391099, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/92391099" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body itemscope itemtype="http://schema.org/Organization">
    <div class="progress">
        <div id="progressbar"></div>
    </div>
    <div id="shop" class="parent" v-cloak>
        <nav class="d-print-none navbar fixed-top navbar-expand-lg bg-white shadow">
            <div class="container">
                <a class="d-flex align-items-center gap-2 navbar-brand ps-2 ps-lg-0" href="/">
                    <img 
                        src="/img/logotype/dark-logo.png" 
                        class="rounded" 
                        alt="Prospekt Parts" 
                        style="width: 54px" 
                    />
                    <span class="text-dark">
                        {!!$names::company('Prospekt Parts')!!}
                    </span> 
                    <span class="d-none" itemprop="name">
                        Проспект Транс
                    </span>
                </a>
                <button class="material-symbols-outlined btn d-lg-none d-block ms-4 ms-sm-4" data-bs-toggle="modal" data-bs-target="#searchForm">search</button>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @if ($_SERVER['REQUEST_URI'] === '/')
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/about">
                                О компании
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bestsellers">
                                Хиты продаж
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products/mersedes-benz">
                                Запасные части
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#brand">
                                Бренды
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#advantages">
                                Преимущества
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                Контакты
                            </a>
                        </li>
                    </ul>                        
                    @else
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/about') ? ' active' : '';?>" href="/about">
                                О компании
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/products/mersedes-benz') ? ' active' : '';?>" href="/products/mersedes-benz">
                                Запасные части
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/customers') ? ' active' : '';?>" href="/customers">
                                Клиентам
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/doc') ? ' active' : '';?>" href="/doc">
                                Документы
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link<?=($_SERVER['REQUEST_URI'] === '/contact') ? ' active' : '';?>" href="/contact">
                                Контакты
                            </a>
                        </li>
                    </ul> 
                    @endif

                    <div class="d-grid d-lg-flex gap-2 pb-4 pb-lg-0" role="search">
                        <button class="d-lg-flex align-items-center gap-2 btn d-none border ps-2" data-bs-toggle="modal" data-bs-target="#searchForm" style="cursor: text">
                            <span class="material-symbols-outlined">search</span>
                            <span>Поиск...</span>
                        </button>
                        @guest
                        <a href="/signin" class="btn btn-primary px-3 shadow-sm fw-bold d-flex justify-content-center align-items-center gap-2">
                            <span class="material-symbols-outlined fs-6">login</span>
                            Войти
                        </a>   
                        <template v-if="card.length">
                            <a href="/card" class="material-symbols-outlined btn position-relative">
                                shopping_cart
                                <small 
                                    class="position-absolute translate-middle badge rounded-pill bg-danger text" 
                                    style="font-size: 10px;top: 8px;left: 35px;"
                                >
                                    @{{card.length}}
                                </small>
                            </a>                             
                        </template>
                        
                        @endguest
                        @auth
                        <a href="/dashboard" class="material-symbols-outlined btn">
                            person
                        </a>
                        <template v-if="card.length">
                            <a href="/dashboard/card" class="material-symbols-outlined btn position-relative">
                                shopping_cart
                                <small 
                                    class="position-absolute translate-middle badge rounded-pill bg-danger text" 
                                    style="font-size: 10px;top: 8px;left: 35px;"
                                >
                                    @{{card.length}}
                                </small>
                            </a>
                        </template>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        <header class="blue section"></header>
        <main>
            @yield('content')
        </main>

        <footer id="contact" class="d-print-none bg-dark text-white" itemscope itemtype="http://schema.org/WPFooter">
            <meta itemprop="copyrightYear" content="<?=date('Y');?>">
            <meta itemprop="copyrightHolder" content="Проспект Транс">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 text-center text-lg-start">
                        <a href="/" class="d-flex justify-content-lg-start justify-content-center align-items-center gap-3 logo-footer" style="text-decoration: none">
                            <img src="/img/logotype/light-logo.png" class="rounded" alt="Prospekt Parts" style="width: 60px" />
                            <span class="text-white fs-2">
                                {!!$names::company('Prospekt Parts')!!}
                            </span> 
                        </a>
                        <p class="mt-4 text">
                            <small>
                                <b>Интернет-магазин "Prospekt Parts"</b> - уникальная торговая платформа, 
                                которая позволяет мгновенно, в режиме реального 
                                времени, получать информацию о реальных остатках и условиях поставки                                    
                            </small>
                        </p>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-4 ps-lg-5 pt-lg-0 pt-5">
                            <h4 class="mb-4">Продукты</h4> 
                            <ul class="d-grid gap-3 list-unstyled">
                                <li><a href="/products/mersedes-benz">Грузовые запчасти</a></li>
                                <li><a href="/developers">Разработчикам</a></li>
                                <li><a href="/shipper">Поставщикам</a></li>
                                <li><a href="/partner">Партнерам</a></li>
                                <li><a href="/customers">Клиентам</a></li>
                            </ul>                            
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-4 ps-lg-0 pt-lg-0 pt-5">
                            <h4 class="mb-4">Условия сотрудничества</h4> 
                            <ul class="d-grid gap-3 list-unstyled">
                                <li><a href="/doc/guaranty">Условия гарантии</a></li>
                                <li><a href="/doc/return-policy">Правила возврата</a></li>
                                <li><a href="/doc/responsibility">Отказ от ответственности</a></li>
                                <li><a href="/doc/privatepolice">Политика конфиденциальности</a></li>
                                <li><a href="/doc/license">Пользовательское соглашение</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-4 ps-lg-0 pt-lg-0 pt-5">
                            <h4 class="mb-4">Контакты</h4> 
                            <ul class="d-grid gap-3 list-unstyled" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">location_on</span>
                                    <a href="https://yandex.ru/maps/-/CCUCFDAwwA" target="_blank">
                                        <span itemprop="postalCode">141006</span>, 
                                        <span itemprop="addressRegion">Московская обл</span>,
                                        <span itemprop="addressLocality">г Мытищи</span>, 
                                        <span itemprop="streetAddress">проезд 4536, стр 10</span>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">call</span>
                                    {!! $contact::getPhone(config('app.phone'), [], true) !!}
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">mark_as_unread</span>
                                    {!! $contact::getEmail(config('app.email'), [], true) !!}
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">alarm</span>
                                    Время работы:
                                </li>
                                <li itemscope itemtype="http://schema.org/LocalBusiness">
                                    <time itemprop="openingHours" datetime="Mo-Fr, 09:00-19:00">
                                        <b>Пн-Пт, 09:00 - 19:00</b>
                                    </time>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 pt-5">
                        <hr />
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center flex-wrap flex-lg-nowrap justify-lg-content-between">
                            <div class="text-center text-lg-start">
                                © <?=date('Y');?> <b>"{{ config('app.name') }}"</b>. Все права защищены.<br />
                                <small class="text-secondary">
                                    Сайт не является публичной офертой
                                    согласно положениям статьи 437 ГК РФ
                                </small>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4"></div>
                                <div class="col-12 col-lg-8 text-center text-lg-end mt-lg-0 mt-4">
                                    <small>
                                        Мы используем cookies для сбора обезличенных персональных данных. 
                                        Они помогают настраивать рекламу и анализировать трафик. Оставаясь 
                                        на сайте, вы соглашаетесь на сбор таких данных.
                                    </small>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <ul id="contextmenu" class="dropdown-menu shadow">
            <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                    <span class="material-symbols-outlined fs-5 text-secondary">headset_mic</span>
                    <strong class="text">Написать в тех.поддержку</strong> 
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center gap-2" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#hotkey">
                    <span class="material-symbols-outlined fs-5 text-secondary">keyboard_option_key</span>
                    <strong class="text">Горячие клавиши</strong> 
                </a>
            </li>
            <li>
                <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                    <span class="material-symbols-outlined fs-5 text-secondary">help</span>
                    <strong class="text">Помощь</strong> 
                </a>
            </li>
        </ul>
        @include('layout.main.ui.cookie.cookie')
    </div>

    <div class="modal fade d-print-none" id="hotkey">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="hotkey">Горячие клавиши</h1>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <details open="">
                        <summary>Справочник</summary>
                        <p>Из любой страницы сайта, вы можете вызвать поисковую строку.</p>
                        <p>
                            Поисковая строка ищет по артикулам и по названию. <br />
                            <em class="text-danger">если ищите по артикулам, указывайте в начале "N" или "A"</em>    
                        </p>
                    </details>
                    <hr />
                    <dl class="row">
                        <dt class="col-sm-4"><kbd>Ctrl+F</kbd></dt>
                        <dd class="col-sm-8">- Вызов окна поиска</dd>
                        <dt class="col-sm-4"><kbd>Ctrl+Shift+F</kbd></dt>
                        <dd class="col-sm-8">- Вызов окна поиска</dd>
                        <dt class="col-sm-4"><kbd>Shift+F</kbd></dt>
                        <dd class="col-sm-8">- Вызов окна поиска</dd>
                        <dt class="col-sm-12"><hr /></dt>
                        <dt class="col-sm-4"><kbd>Ctrl+X</kbd></dt>
                        <dd class="col-sm-8">- Закрытие окна поиска</dd>
                        <dt class="col-sm-4"><kbd>Ctrl+Shift+X</kbd></dt>
                        <dd class="col-sm-8">- Закрытие окна поиска</dd>
                        <dt class="col-sm-4"><kbd>Shift+X</kbd></dt>
                        <dd class="col-sm-8">- Закрытие окна поиска</dd>
                        <dt class="col-sm-12"><hr /></dt>
                        <dt class="col-sm-4"><kbd>Ctrl+S</kbd></dt>
                        <dd class="col-sm-8">- Выбор для печати или сохранения страницы</dd>
                        <dt class="col-sm-4"><kbd>Ctrl+P</kbd></dt>
                        <dd class="col-sm-8">- Выбор для печати страницы</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade d-print-none" id="searchForm" aria-hidden="true" aria-labelledby="searchForm" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="background-color: transparent">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="searchForm"></h1>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container position-relative">
                        <div class="row d-flex align-items-center vh-100 pb-5">
                            <form id="sendForm" action="/product" method="POST" class="col-12 position-relative mb-5">
                                @csrf
                                <input 
                                    type="search" 
                                    list="searchlist"
                                    id="search" 
                                    name="text" 
                                    class="form-control form-control-lg ps-4 pe-5 text border-0 shadow" 
                                    placeholder="Введите Артикул или Название запчасти..." 
                                    autofocus 
                                />
                                <span class="material-symbols-outlined position-absolute text-muted" onclick="getResult()" style="cursor: pointer;right: 28px;top: 11px">search</span>
                                @include('layout.main.ui.selest.list')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @verbatim
        <div class="modal fade" id="subscription" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header border-0 pb-0">
                        <h1 class="modal-title fs-5 text" id="subscription">Оформление подписки</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2 text-secondary">
                            Если у нас по какой-то причине не оказалось нужной вам запчасти, 
                            вы можете <u>подписаться</u>, и мы <b>пришлём</b> вам актуальную 
                            информацию по ожидаймой позиции.
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" placeholder="Ваш e-mail" />
                        </div>
                        <div>
                            <textarea name="message" class="form-control" rows="3" placeholder="Список запчастей..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light text px-4" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary text px-4 d-flex gap-1">
                            <span class="material-symbols-outlined">mark_email_read</span> 
                            Подписаться
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endverbatim

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>