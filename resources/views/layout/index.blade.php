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
                    
                    @include('layout.main.ui.menu.menu')

                    <div class="d-grid d-lg-flex gap-2 pb-4 pb-lg-0" role="search">
                        <button class="d-lg-flex align-items-center gap-2 btn d-none border ps-2 searchForm" data-bs-toggle="modal" data-bs-target="#searchForm">
                            <span class="material-symbols-outlined cp">search</span>
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
                    <button type="button" class="bg-transparent border-0 material-symbols-outlined text-white" data-bs-dismiss="modal">
                        close
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container position-relative">
                        <div class="row d-flex align-items-center vh-100 pb-5">
                            <form id="sendForm" action="/product" method="POST" class="col-12 position-relative mb-5">
                                @csrf
                                <label class="text-white mb-1" style="text-shadow: 1px 1px black">
                                    Горячие клавиши (Ctrl+F) - открыть поиск, (Ctrl+X) - закрыть поиск. Работает в сочитании c клавишей "Shift"
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
                                <span class="material-symbols-outlined position-absolute text-muted" onclick="getResult()" style="cursor: pointer;right: 28px;top: 40px">search</span>
                                @include('layout.main.ui.selest.list')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.main.ui.modal.subscription')

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>