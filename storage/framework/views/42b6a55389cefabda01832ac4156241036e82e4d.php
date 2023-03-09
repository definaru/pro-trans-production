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

    <title itemprop="headline"><?php echo $__env->yieldContent('title'); ?></title>

    <?php echo $__env->make('layout.main.seo.data', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <link rel="shortcut icon" href="/img/logotype.jpg" type='image/x-icon'/>
    <link rel="apple-touch-icon" href="/img/logotype.jpg" />	
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>" /> 
    
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />

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
    <div id="shop" class="parent">
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
                        <?php echo $names::company('Prospekt Parts'); ?>

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
                    <?php if($_SERVER['REQUEST_URI'] === '/'): ?>
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
                            <a class="nav-link" href="/contact">
                                Контакты
                            </a>
                        </li>
                    </ul>                        
                    <?php else: ?>
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
                    <?php endif; ?>

                    <div class="d-grid d-lg-flex gap-2 pb-4 pb-lg-0" role="search">
                        <button class="material-symbols-outlined btn d-none d-lg-block" data-bs-toggle="modal" data-bs-target="#searchForm">search</button>
                        <?php if(auth()->guard()->guest()): ?>
                        <a href="/signin" class="btn btn-primary px-5 shadow-sm fw-bold d-flex justify-content-center align-items-center gap-2">
                            <span class="material-symbols-outlined fs-6">login</span>
                            Войти
                        </a>                        
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <a href="/dashboard" class="material-symbols-outlined btn">
                            person
                        </a>
                        <a href="/dashboard/card" class="material-symbols-outlined btn position-relative">
                            shopping_cart
                            <small 
                                class="position-absolute translate-middle badge rounded-pill bg-danger text" 
                                style="font-size: 10px;top: 8px;left: 35px;"
                            >
                                9
                            </small>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <header class="blue section"></header>
        <main>
        <?php echo $__env->yieldContent('content'); ?>
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
                                <?php echo $names::company('Prospekt Parts'); ?>

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
                                <li><a href="#">Грузовые запчасти</a></li>
                                <li><a href="#">Оборудование для СТО</a></li>
                                <li><a href="#">Поставщикам</a></li>
                                <li><a href="#">Партнерам</a></li>
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
                                    
                                    <?php echo $contact::getPhone(config('app.phone'), [], true); ?>

                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">mark_as_unread</span>
                                    <?php echo $contact::getEmail(config('app.email'), [], true); ?>

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
                                © <?=date('Y');?> <b>"<?php echo e(config('app.name')); ?>"</b>. Все права защищены.<br />
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
                                <?php echo csrf_field(); ?>
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
                                <datalist id="searchlist">
                                    <option value="Насос-форсунка топливная цилиндра"></option>
                                    <option value="Ресивер воздушный"></option>
                                    <option value="Поршень-гильза комплект"></option>
                                    <option value="Водяной насос с муфтой"></option>
                                    <option value="Насос водяной с прокладкой"></option>
                                    <option value="Тормозной шланг переднего моста"></option>
                                    <option value="Трос открывания"></option>
                                    <option value="Втулка шатуна верхняя"></option>
                                    <option value="Кольцо гильзы"></option>
                                    <option value="Прокладка блока цилиндров"></option>
                                    <option value="Комплект щеток стеклоочистителя"></option>
                                    <option value="Комплект сцепления"></option>
                                    <option value="Датчик уровня топлива в баке"></option>
                                    <option value="Цапфа задней полуоси"></option>
                                    <option value="Кронштейн стабилизатора"></option>
                                    <option value="Гайка шестигранная"></option>
                                    <option value="Напорный трубопровод турбины"></option>
                                    <option value="Усилитель привода сцепления"></option>
                                    <option value="Фильтр топливный"></option>
                                    <option value="Радиатор охлаждения"></option>
                                    <option value="Панель кабины боковая левая"></option>
                                    <option value="Прокладка выпускного коллектора"></option>
                                    <option value="Кольцо уплотнительное"></option>
                                    <option value="Втулка распредвала"></option>
                                    <option value="Сальник ступицы"></option>
                                    <option value="Фиттинг ГБЦ"></option>
                                    <option value="Трубка топливная"></option>
                                    <option value="Вискомуфта вентилятора"></option>
                                    <option value="Втулка распредвала с буртиком"></option>
                                    <option value="Насос ГУР"></option>
                                    <option value="Прокладка"></option>
                                    <option value="Фильтр масляный"></option>
                                    <option value="Комплект топливных фильтров"></option>
                                    <option value="Фиттинг электропроводки"></option>
                                    <option value="Блок переключения передач"></option>
                                    <option value="Уплотнение"></option>
                                    <option value="Уплотнение масляного насоса"></option>
                                    <option value="Щетки стеклоочистителя"></option>
                                    <option value="Клапан обратный"></option>
                                    <option value="Рычаг стеклоочистителя"></option>
                                    <option value="Стартер"></option>
                                    <option value="Вилка блокировки"></option>
                                    <option value="Генератор"></option>
                                    <option value="Трубка"></option>
                                    <option value="Прокладка коллектора"></option>
                                    <option value="Втулка стабилизатора"></option>
                                    <option value="Вязкостная муфта"></option>
                                    <option value="Подушка передняя кабины"></option>
                                    <option value="Блок подготовки воздуха"></option>
                                    <option value="Термостат охлаждения двигателя"></option>
                                </datalist>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('js/vue.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/index.blade.php ENDPATH**/ ?>