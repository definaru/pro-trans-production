<!DOCTYPE html>
<html lang="ru">
    <head itemscope itemtype="http://schema.org/WPHeader">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />

    <meta name="theme-color" content="#310062"/>
    <meta name="msapplication-navbutton-color" content="#310062"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#310062"/>

    <title itemprop="headline">@yield('title')</title>

    @include('layout.main.seo.data')

    <link rel="shortcut icon" href="/img/favicon.png" type='image/x-icon' />
    <link rel="apple-touch-icon" href="/img/logotype.jpg" />
    <link rel="stylesheet" href="{{ asset('css/jost.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/pt.sans.narrow.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}" />
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
            <div class="container py-1">
                <a class="d-flex align-items-center gap-2 navbar-brand ps-2 ps-lg-0 me-lg-4 me-0" href="/">
                    <img 
                        src="/img/logotype/dark-logo.png" 
                        class="rounded" 
                        alt="Prospekt Parts" 
                        style="width: 45px" 
                    />
                    <span class="text-dark logo" style="font-size: 16px">
                        {!!$names::company('Prospekt Parts')!!}
                    </span> 
                    <span class="d-none" itemprop="name">
                        Проспект Партс
                    </span>
                </a>
                <form onsubmit="loadingPage()" id="sendForm" action="/product" method="POST" class="d-lg-flex d-none position-relative" style="width: 310px">
                    @csrf
                    <input 
                        type="search" 
                        list="searchlist" 
                        min="5"
                        max="5"
                        id="search" 
                        name="text" 
                        class="form-control searchForm ps-3 pe-5 text border-0" 
                        placeholder="Артикул или Название запчасти..." 
                        autofocus
                    />
                    <span class="position-absolute" onclick="getResult()" style="cursor: pointer;right: 9px;top: 5px">
                        <x-icon-search color="#333" />
                    </span>
                </form>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    @include('layout.main.ui.menu.menu')

                    <div class="d-grid d-lg-flex gap-2 pb-4 pb-lg-0" role="search">
                        @guest
                            <a href="/signin" class="btn btn-primary px-3 shadow-sm fw-bold d-flex justify-content-center align-items-center gap-2">
                                <x-icon-login size="24px" color="#fff" />
                                Войти
                            </a>   
                            <template v-if="card.length > 0">
                                <a href="/card" class="btn bg-body-tertiary position-relative">
                                    <x-icon-shopping-cart size="24px" />
                                    <span class="d-inline-table d-lg-none">Корзина</span>
                                    <small 
                                        class="position-absolute translate-middle badge rounded-pill bg-danger text indicator"
                                    >
                                        @{{card.length}}
                                    </small>
                                </a>                             
                            </template>
                            <template v-else>
                                <div class="btn bg-body-tertiary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ваша корзина пуста">
                                    <x-icon-shopping-cart size="24px" />
                                    <span class="d-inline-table d-lg-none">Корзина</span>
                                </div>
                            </template>
                            
                            @endguest
                        @auth
                            <a href="/dashboard" class="btn pe-0">
                                <x-icon-person size="27px" />
                            </a>
                            <template v-if="card.length > 0">
                                <a href="/dashboard/card" class="btn bg-body-tertiary position-relative">
                                    <x-icon-shopping-cart size="25px" />
                                    <span class="d-inline-table d-lg-none">Корзина</span>
                                    <small 
                                        class="position-absolute translate-middle badge rounded-pill bg-danger text indicator"
                                    >
                                        @{{card.length}}
                                    </small>
                                </a>
                            </template>
                            <template v-else>
                                <div class="btn bg-body-tertiary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ваша корзина пуста">
                                    <x-icon-shopping-cart size="24px" />
                                    <span class="d-inline-table d-lg-none">Корзина</span>
                                </div>
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


        @include('layout.main.ui.footer.footer')
        @include('layout.main.ui.menu.contextmenu')
        @include('layout.main.ui.cookie.cookie')
    </div>

    @include('layout.main.ui.hotkey')


    <div class="modal fade d-print-none" id="searchForm" aria-hidden="true" aria-labelledby="searchForm" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="background-color: transparent">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="searchForm"></h1>
                    <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal">
                        <x-icon-close color="#fff" />
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container position-relative">
                        <div class="row d-flex align-items-center vh-100 pb-5">
                            <form id="sendForm" action="/product" method="POST" class="col-12 position-relative mb-5">
                                @csrf
                                <label class="text-white mb-1" style="text-shadow: 1px 1px black">
                                    Горячие клавиши (Ctrl+F) - открыть поиск, (Ctrl+X) - закрыть поиск.
                                </label>
                                <input 
                                    type="search" 
                                    list="searchlist"
                                    id="search" 
                                    name="text" 
                                    class="form-control form-control-lg ps-4 pe-5 text border-0 shadow" 
                                    placeholder="Введите Артикул или Название запчасти..." 
                                    autofocus 
                                />
                                <span class="position-absolute text-muted" onclick="getResult()" style="cursor: pointer;right: 30px;top: 38px;">
                                    <x-icon-search color="#333" />
                                </span>
                                @include('layout.main.ui.selest.list')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.main.ui.modal.subscription')

    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>