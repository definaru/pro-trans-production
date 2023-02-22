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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
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
    <div class="parent">
        <nav class="navbar fixed-top navbar-expand-lg bg-white shadow">
            <div class="container">
                <a class="d-flex align-items-center gap-2 navbar-brand" href="/">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#about">
                                О компании
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bestsellers">
                                Хиты продаж
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#spareparts">
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
                            <a class="nav-link" href="#contact">
                                Контакты
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex" role="search">
                        <a href="/signin" class="btn btn-primary px-5 shadow-sm fw-bold d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined fs-6">login</span>
                            Войти
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="blue section"></header>
        <main>
        @yield('content')
        </main>

        <footer id="contact" class="bg-dark text-white" itemscope itemtype="http://schema.org/WPFooter">
            <meta itemprop="copyrightYear" content="<?=date('Y');?>">
            <meta itemprop="copyrightHolder" content="Проспект Транс">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <a class="d-flex align-items-center gap-3 logo-footer" href="/">
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
                        <div class="ps-5">
                            <h4 class="mb-4">Продукты</h4> 
                            <ul class="d-grid gap-3 list-unstyled">
                                <li><a href="#">Грузовые запчасти</a></li>
                                <li><a href="#">Оборудование для СТО</a></li>
                                <li><a href="#">Поставщикам</a></li>
                                <li><a href="#">Партнерам</a></li>
                                <li><a href="/contact">Клиентам</a></li>
                            </ul>                            
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <h4 class="mb-4">Условия сотрудничества</h4> 
                        <ul class="d-grid gap-3 list-unstyled">
                            <li><a href="/doc/guaranty">Условия гарантии</a></li>
                            <li><a href="/doc/return-policy">Правила возврата</a></li>
                            <li><a href="/doc/responsibility">Отказ от ответственности</a></li>
                            <li><a href="/doc/privatepolice">Политика конфиденциальности</a></li>
                            <li><a href="/doc/license">Пользовательское соглашение</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-3">
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
                                {{-- <a href="tel:+79672916470">
                                    <span itemprop="telephone">+7 (967) 291-64-70</span>
                                </a> --}}
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
                    <div class="col-12 pt-5">
                        <hr />
                    </div>
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                © <?=date('Y');?> <b>"{{ config('app.name') }}"</b>. Все права защищены.<br />
                                <small class="text-secondary">
                                    Сайт не является публичной офертой
                                    согласно положениям статьи 437 ГК РФ
                                </small>
                            </div>
                            <div class="w-50">
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
        </footer>
    </div>

    @verbatim
        <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header border-0 pb-0">
                        <h1 class="modal-title fs-5 text" id="login">Выбрать действие</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-grid gap-2">
                        <a href="/signin" class="btn btn-lg fw-bold d-flex justify-content-center align-items-center gap-2 btn-dark">
                            <span class="material-symbols-outlined fs-6">login</span>
                            Авторизоваться
                        </a>
                        <a href="/signup" class="btn btn-lg fw-bold d-flex justify-content-center align-items-center gap-2 btn-primary">
                            <span class="material-symbols-outlined">open_in_new</span>
                            Зарегистрироваться
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="order" data-bs-backdrop="static" data-bs-keyboard="false" v-cloak>
            <div class="modal-dialog modal-dialog-centered">

                <form novalidate @submit.prevent="onSubmit" v-if="!send" class="modal-content border-0">
                    <div class="modal-header border-0 pb-0">
                        <h1 class="modal-title fs-5 text" id="order">{{header}}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <input 
                                type="text" 
                                autocomplete="off" 
                                autocorrect="off" 
                                autocapitalize="words" 
                                spellcheck="false"
                                class="form-control" 
                                name="name" 
                                :class="[error_names && name === '' ? 'is-invalid' : '']"
                                placeholder="Ваше имя"
                                v-model.trim="name"
                            >
                            <small class="invalid-feedback" v-if="error_names && name === ''">
                                Напишите свое имя                            
                            </small>
                        </div>
                        <div class="mb-2">
                            <input 
                                type="text"
                                autocomplete="off" 
                                autocorrect="off" 
                                autocapitalize="words" 
                                spellcheck="false"
                                class="form-control" 
                                name="phone" 
                                :class="[error_phone && phone === '' ? 'is-invalid' : '']"
                                placeholder="Ваш телефон"
                                v-model.trim="phone"
                            >
                            <small class="invalid-feedback" v-if="error_phone && phone === ''">
                                Напишите свой телефон                            
                            </small>
                        </div>
                        <div class="mb-2">
                            <input 
                                type="text"
                                autocomplete="off" 
                                autocorrect="off" 
                                autocapitalize="words" 
                                spellcheck="false"
                                class="form-control" 
                                name="email" 
                                :class="[error_email && email === '' ? 'is-invalid' : '']"
                                placeholder="Ваш e-mail"
                                v-model.trim="email"
                            >
                            <small class="invalid-feedback" v-if="error_email && email === ''">
                                Напишите свою электронную почту                            
                            </small>                            
                            <small class="invalid-feedback" v-if="email_invalid">
                                Пожалуйста, введите действительный адрес электронной почты                            
                            </small>
                        </div>
                        <div>
                            <textarea 
                                class="form-control resize" 
                                rows="4" 
                                name="message" 
                                placeholder="Ваше сообщение..."
                                :class="[error_message && message === '' ? 'is-invalid' : '']"
                                v-model="message"
                            >
                            </textarea>
                            <small class="invalid-feedback" v-if="error_message && message === ''">
                                Напишите свое сообщение                            
                            </small>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light text px-4" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary text px-4" v-on:click="Send">
                            <span v-if="loading">
                                Загружаем...
                            </span>
                            <span class="d-flex gap-1" v-else>
                                <span class="material-symbols-outlined">send</span> 
                                Отправить                           
                            </span>
                        </button>
                    </div>
                </form>

                <div class="modal-content border-0" v-else>
                    <div class="modal-body bg-success text-white rounded d-flex justify-content-between">
                        <div class="modal-title d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined">check_circle</span>
                            <strong>Успешно!</strong> Ваше сообщение было получено.                        
                        </div>
                        <div 
                            type="button" 
                            class="btn-close" 
                            data-bs-dismiss="modal" 
                            aria-label="Close"
                        >  
                        </div>
                    </div>                    
                </div>

            </div>
        </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>