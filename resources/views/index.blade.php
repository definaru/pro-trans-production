<!DOCTYPE html>
<html lang="ru">
    <head itemscope itemtype="http://schema.org/WPHeader">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос" />
        <meta name="description" content="Интернет-магазин `Prospekt Parts` - уникальная торговая платформа, которая позволяет мгновенно, в режиме реального времени, получать информацию о реальных остатках и условиях поставки" />
        
        <meta name="theme-color" content="#8630a3"/>
        <meta name="msapplication-navbutton-color" content="#8630a3"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="#8630a3"/>

        <title itemprop="headline">Prospekt Parts</title>

        <meta property="og:title" content="Prospekt Parts" />
        <meta property="og:description" content="Интернет-магазин `Prospekt Parts` - уникальная торговая платформа, которая позволяет мгновенно, в режиме реального времени, получать информацию о реальных остатках и условиях поставки"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http'). '://' .$_SERVER['HTTP_HOST'];?>" />
        <meta property="og:image" content="/img/logotype.jpg" />
        <meta property="og:site_name" content="Проспект Транс" />
        <meta property="og:locale" content="ru_RU" />

        <link rel="canonical" href="<?=((!empty($_SERVER['HTTPS'])) ? 'https' : 'http'). '://' .$_SERVER['HTTP_HOST'];?>" />
        <link rel="shortcut icon" href="/img/logotype.jpg" type='image/x-icon'/>
        <link rel="apple-touch-icon" href="/img/logotype.jpg" />	
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    </head>
    <body itemscope itemtype="http://schema.org/Organization">
        <div class="parent">
            <nav class="navbar fixed-top navbar-expand-lg bg-white shadow">
                <div class="container">
                    <a class="d-flex align-items-center gap-2 navbar-brand" href="/">
                        <img src="/img/logotype.jpg" class="rounded" alt="Prospekt Parts" style="width: 40px">
                        <span class="text-secondary">
                            <b class="text-dark">Prospekt</b> 
                            <span class="fw-lighter">Parts</span> 
                        </span> 
                        <span class="d-none" itemprop="name">
                            Prospekt Parts
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
                <section id="about" class="bg-hero coral position-relative overflow-hidden">
                    <div class="container h-100 ">
                        <p class="copyright">© 2022 &middot; Все права защищены</p>
                        <div class="row pt-4 h-100">
                            <div class="d-flex justify-content-start flex-column align-items-center gap-3 align-self-center col-7">
                                <h1 class="fw-bold lh-1 display-4">
                                    <span class="text-primary shock-wive">Поставляем запчасти</span>, комплектующие 
                                    и расходные материалы 
                                    <br />
                                    <span class="fw-light display-5 shock-wive-inline">для грузовых автомобилей.</span> 
                                </h1>
                                <p class="fs-6 w-100 text">
                                    Широкий ассортимент инструментов и оборудования 
                                    <br />для станций технического обслуживания.
                                </p>
                                <div class="d-flex align-items-center gap-4 w-100">
                                    <a href="/signup" class="btn btn-lg btn-primary px-5 py-3 d-flex align-items-center gap-2">
                                        <span class="material-symbols-outlined">open_in_new</span>
                                        Зарегистрироваться
                                    </a>
                                    <a href="#bestsellers" class="btn btn-lg btn-dark px-5 py-3">
                                        &#8618;&#160; Подробнее
                                    </a>
                                </div>
                                <div class="d-flex align-items-center w-100 py-2">
                                    <div class="border-end border-dark-subtle pe-4 lh-1">
                                        <strong class="fs-1 text fw-bold">8+</strong>
                                        <p class="m-0">Лет на рынке</p>
                                    </div>
                                    <div class="border-end border-dark-subtle px-4 lh-1">
                                        <strong class="fs-1 text fw-bold">3+</strong>
                                        <p class="m-0">Производителей</p>
                                    </div>
                                    <div class="px-4 lh-1">
                                        <strong class="fs-1 text fw-bold">9K+</strong>
                                        <p class="m-0">Запчастей</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex gap-2 position-absolute z-3">
                                    <div class="card border-0 shadow" style="width: 17rem">
                                        <div class="card-body pb-0 position-relative">
                                            <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                                <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                                <small>5.0 рейтинг</small> 
                                            </div>
                                            <img 
                                                src="https://15.img.avito.st/image/1/1.png0qra5CpECA8iUdPTdRf8JDJuAiQJThQkIlYgDAJM.-ajyZ9476x-K-rxK332HIzGJmGK_7N6YPnidgcpnPu0" 
                                                class="card-img-top rounded" 
                                                alt="Цилиндр переключения КПП (AMT)" 
                                            />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold fs-6">Цилиндр переключения КПП (AMT)</h5>
                                            <hr style="color: #ddd" />
                                            <div class="d-flex justify-content-between">
                                                <div class="lh-sm">
                                                    <small class="text-muted d-block w-100">Марка</small>
                                                    <strong class="text-secondary">Mercedes-Benz</strong>
                                                </div>
                                                <div class="lh-sm">
                                                    <small class="text-muted d-block w-100">Артикул</small>
                                                    <strong class="text-secondary">A9302600263</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0 shadow" style="width: 17rem">
                                        <div class="card-body pb-0 position-relative">
                                            <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                                <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                                <small>5.0 рейтинг</small> 
                                            </div>
                                            <img 
                                                src="https://12.img.avito.st/image/1/1.ZS3G7raBycSwSzvCgINEEg1NzcJkS8nCAy7NwrBLO8JwScXAcE_JgA.YWu7zfyXYrHK9QPbDAZC7OHgPT8gmE-GGuGqVK5ALKg" 
                                                class="card-img-top rounded" 
                                                alt="Выжимной подшипник сцепления Actros MP4" 
                                            />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold fs-6">Выжимной подшипник сцепления Actros MP4</h5>
                                            <hr style="color: #ddd">
                                            <div class="d-flex justify-content-between">
                                                <div class="lh-sm">
                                                    <small class="text-muted d-block w-100">Марка</small>
                                                    <strong class="text-secondary">Mercedes-Benz</strong>
                                                </div>
                                                <div class="lh-sm">
                                                    <small class="text-muted d-block w-100">Артикул</small>
                                                    <strong class="text-secondary">A0032502115</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="bestsellers" class="bg-secondary-subtle">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 offset-2 text-center">
                                <h2 class="fw-bold display-5">Хиты продаж 🔥</h2>
                                <p class="text-muted text">
                                    Самые ходовые товары из Германии с проверенным ГТД. 
                                    У нас только новые запчасти от производителя. 
                                    Мы специально не стали обрабатывать фотографии, чтобы вы видели что детали наши и в наличии.
                                </p>
                            </div>
                        </div>
                        <div class="row py-4">
                            @foreach ($bestsellers as $best)
                            <div class="col-12 col-lg-3">
                                <div class="card card-data border-0 shadow order">
                                    <div class="card-body pb-0 position-relative">
                                        <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                            <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                            <small><?=$best['raiting'];?> рейтинг</small> 
                                        </div>
                                        <img 
                                            src="<?=$best['image'];?>" 
                                            class="card-img-top rounded" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#order"
                                            alt="<?=$best['name'];?>" 
                                        />
                                    </div>
                                    <div class="card-body pb-0">
                                        <h5 class="card-title fw-bold fs-6" data-bs-toggle="modal" data-bs-target="#order">
                                            <?=$best['name'];?>
                                        </h5>
                                        <hr style="color: #ddd" />
                                        <div class="d-flex justify-content-between">
                                            <div class="lh-sm">
                                                <small class="text-muted d-block w-100">Марка</small>
                                                <strong class="text-secondary">Mercedes-Benz</strong>
                                            </div>
                                            <div class="lh-sm">
                                                <small class="text-muted d-block w-100">Артикул</small>
                                                <strong class="text-secondary">
                                                    <?=$best['article'];?>
                                                </strong>
                                            </div>
                                        </div>
                                        <hr class="mb-1" style="color: #ddd" />
                                    </div>
                                    <div class="card-footer border-top-0 bg-white d-grid">
                                        <button 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#order" 
                                            class="btn btn-primary mb-2 text d-flex align-items-center justify-content-center gap-2 py-2"
                                        >
                                            <span class="material-symbols-outlined">add_shopping_cart</span>
                                            <strong>В корзину</strong> 
                                        </button>
                                    </div>
                                </div>
                            </div>                                
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-8 offset-2 text-center mt-4">
                                <button 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#login" 
                                    class="btn btn-lg btn-dark px-5"
                                >
                                    Показать всё &#160; &rarr;
                                </button>
                            </div>
                            <div class="col-12 mt-5">
                                <hr />
                            </div>
                        </div>
                        <div class="row py-4">
                            <div class="d-flex justify-content-between align-items-center col-12 mt-5">
                                <h2 class="fw-bold display-6">Расходные материалы</h2>
                                <button 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#login"
                                    class="btn btn-sm btn-primary px-4"
                                >
                                    Смотреть все&#160; &rarr;
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($alllist as $detail)
                            <div class="col-12 col-md-4">
                                <div class="consumables bg-white rounded p-2 shadow d-flex align-items-center mb-4">
                                    <div class="rounded me-3" style="background: #ebcaa1">
                                        <img 
                                            src="<?=$detail['image'];?>" 
                                            class="material rounded" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#order"
                                            alt="<?=$detail['name'];?>"
                                            style="opacity: 0.7;cursor:pointer" 
                                        />
                                    </div>
                                    <div class="d-flex flex-column w-75">
                                        <small class="w-75">
                                            <strong data-bs-toggle="modal" data-bs-target="#order">
                                                <?=$detail['name'];?>
                                            </strong>
                                        </small>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <i><?=$detail['article'];?></i>
                                            <div class="d-flex align-items-center gap-1">
                                                <span class="material-symbols-outlined text-warning fs-6">star_rate</span>
                                                <span class="material-symbols-outlined text-warning fs-6">star_rate</span>
                                                <span class="material-symbols-outlined text-warning fs-6">star_rate</span>
                                                <span class="material-symbols-outlined text-warning fs-6">star_rate</span>
                                                <span class="material-symbols-outlined text-warning fs-6">star_rate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                
                            @endforeach
                        </div>
                    </div>
                </section>

                <section id="spareparts" class="bg-white">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="col-6 offset-3 text-center">
                                <h2 class="fw-bold display-5">Запасные части</h2>
                                <p class="text-muted text">
                                    В наличии и под заказ есть запчасти
                                    на следующие бренды грузовых автомобилей: 
                                    <i>Mercedes-Benz</i>, 
                                    <i>Volvo</i>, 
                                    <i>Renault Trucks</i>.
                                </p>
                            </div>
                        </div>
                        <div class="row pt-4 spates">
                            <div class="col-12 col-md-4 mb-4">
                                <div class="card card-data border-light shadow-lg">
                                    <div class="card-body text-center pt-5" data-bs-toggle="modal" data-bs-target="#order">
                                        <img src="/img/actros___kopiya.png" style="opacity: 1" class="w-100" alt="Mercedes-Benz">
                                        <h5 class="fw-bold mt-3">Mercedes-Benz</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4">
                                <div class="card card-data border-light shadow-lg">
                                    <div class="card-body text-center pt-5" data-bs-toggle="modal" data-bs-target="#order">
                                        <img src="/img/volvo.png" style="opacity: 1" class="w-100" alt="Volvo">
                                        <h5 class="fw-bold mt-3">Volvo</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-4 z-3 position-relative">
                                <div class="card card-data border-light shadow-lg">
                                    <div class="card-body text-center pt-5" data-bs-toggle="modal" data-bs-target="#order">
                                        <img src="/img/Renault.png" style="opacity: 1" class="w-100" alt="Renault Trucks">
                                        <h5 class="fw-bold mt-3">Renault Trucks</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="brand" class="bg-secondary-subtle pb-3">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-between align-items-center col-12">
                                <h2 class="fw-bold display-6">Товары в наличии</h2>
                                <div>
                                    <select class="form-control px-5" name="brand">
                                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                                        <option value="Volvo">Volvo</option>
                                        <option value="Renault Trucks">Renault Trucks</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row py-4 ng position-relative">
                            @foreach ($listorder as $item)
                                <div class="col-lg-3 col-12 mb-3">
                                    <div class="card card-data border-0 shadow order">
                                        <div class="card-body pb-0 position-relative">
                                            <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                                <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                                <small><?=$item['raiting']?> рейтинг</small> 
                                            </div>
                                            <img 
                                                src="<?=$item['image']?>" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#order"
                                                class="card-img-top rounded" 
                                                alt="<?=$item['name']?>"
                                            />
                                        </div>
                                        <div class="card-body">
                                            <h5 data-bs-toggle="modal" data-bs-target="#order" class="card-title fw-bold fs-6">
                                                <?=$item['name']?>
                                            </h5>
                                            <p class="label">В наличии</p>
                                            <hr style="color: #ddd">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center gap-2">
                                                    <div>
                                                        <img src="/img/mercedes-benz.svg" style="width: 40px;height: 40px">
                                                    </div>
                                                    <div class="lh-sm">
                                                        <small class="text-muted d-block w-100">
                                                            <?=$item['article']?>
                                                        </small>
                                                        <strong class="text-secondary">Mercedes-Benz</strong>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button data-bs-toggle="modal" data-bs-target="#order" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
                                                        <span class="material-symbols-outlined">add_shopping_cart</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-8 offset-2 text-center mt-3 mb-5">
                                <button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-lg btn-dark px-5">
                                    Показать всё &nbsp; →
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-5">
                                <div class="p-5 bg-dark text-white rounded" style="background-image: url(/img/banner.png);background-size: cover;background-position: top right">
                                    <h2 class="display-3 mb-4 fw-bold">Присоединяйтейсь<br> к нашему сообществу</h2>
                                    <div class="d-flex gap-3">
                                        <a href="/signup" class="btn btn-lg btn-primary px-5 d-flex align-items-center gap-2">
                                            <span class="material-symbols-outlined">add</span>
                                            Присоедиится
                                        </a>
                                        <button 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#subscription"
                                            class="btn btn-lg btn-outline-light px-5" 
                                        >
                                            Подписаться
                                        </button>
                                    </div>
                                    <p class="text text-light mb-0 mt-3">
                                        <b class="text-danger">*</b> Не нашли нужной детали? Подпишитесь, 
                                        и мы сообщим вам о её поступлении!
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </section>

                <section id="advantages" class="bg-secondary-subtle">
                    <div class="container position-relative spates">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <img 
                                    src="/img/stacey-gabrielle-koenitz-rozells.jpg" 
                                    style="filter: saturate(250%);opacity: 0.7" 
                                    alt="Наши преимущества" 
                                    class="w-100 rounded" 
                                />
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="ps-4">
                                    <h2 class="display-3 mb-4">Наши преимущества</h2>
                                    <ul class="d-grid gap-4 list-unstyled">
                                        <li class="d-flex feat">
                                            <span class="material-symbols-outlined text-primary fs-1 mt-2 me-4">switch_access_shortcut_add</span>
                                            <div>
                                                <strong class="fs-2 text-secondary">Запасные части</strong>
                                                <p class="fs-5 text">1) Мы поставляем только оригинальные новые запчасти</p> 
                                            </div>
                                        </li>
                                        <li class="d-flex feat">
                                            <span class="material-symbols-outlined text-primary fs-1 mt-2 me-4">shield_with_heart</span>
                                            <div>
                                                <strong class="fs-2 text-secondary">Репутация</strong>
                                                <p class="fs-5 text">2) У нас очень хорошая репутация, нам доверяют многие компании</p>
                                            </div>
                                        </li>
                                        <li class="d-flex feat">
                                            <span class="material-symbols-outlined text-primary fs-1 mt-2 me-4">currency_ruble</span>
                                            <div>
                                                <strong class="fs-2 text-secondary">Цены</strong>
                                                <p class="fs-5 text">3) Мы не занимаемся перепродажами, поэтому у нас приемлемые цены</p>
                                            </div>
                                            
                                        </li>
                                        <li class="d-flex feat">
                                            <span class="material-symbols-outlined text-primary fs-1 mt-2 me-4">pallet</span>
                                            <div>
                                                <strong class="fs-2 text-secondary">Доставка</strong>
                                                <p class="fs-5 text">4) Качественная доставка в срок</p>
                                            </div>
                                        </li>
                                    </ul>                                    
                                </div>

                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12 col-lg-6">
                                <div class="p-5 bg-primary text-white rounded text-center">
                                    <h4 class="fw-lighter text-warning">Скоро для мобильного</h4>
                                    <h3 class="fw-bold text">Скачать и установить</h3>
                                    <p class="text">Наш сервис на следующих платформах:</p>
                                    <div class="d-flex gap-3 pt-3">
                                        <button class="d-flex gap-2 btn btn-dark w-50 px-4 py-2" disabled>
                                            <img src="/img/google_play.svg" style="width: 40px" alt="Google Play">
                                            <div class="d-flex align-self-center flex-column lh-sm text-start">
                                                <small class="text">Скачать на</small>
                                                <strong class="fw-bold text">Google Play</strong> 
                                            </div>
                                        </button>
                                        <button class="d-flex gap-2 btn btn-dark w-50 px-4 py-2" disabled>
                                            <img src="/img/apple_store.svg" style="width: 40px" alt="App Store" />
                                            <div class="d-flex align-self-center flex-column lh-sm text-start">
                                                <small class="text">Скачать на</small>
                                                <strong class="fw-bold text">App Store</strong> 
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 z-3 position-relative">
                                <div class="p-5 bg-white text-dark rounded text-center shadow">
                                    <h4 class="fw-lighter text-primary">Наши партнёры</h4>
                                    <h3 class="fw-bold text">В наличии и под заказ</h3>
                                    <p class="text">мы работаем со следующими брендами:</p>
                                    <div class="d-flex justify-content-center gap-5" style="opacity: 0.6">
                                        <img src="/img/logo-daf.png" style="width: 100px" alt="DAF">
                                        <img src="/img/renault.svg" style="width: 60px;" alt="Renault">
                                        <img src="/img/volvo.svg" style="width: 62px;" alt="Volvo">
                                        <img src="/img/mercedes-benz.svg" style="width: 74px;" alt="Mercedes Benz">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </main>

            <footer id="contact" class="bg-dark text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <a class="d-flex align-items-center gap-3 logo-footer" href="/">
                                <img src="/img/logotype.jpg" class="rounded" alt="Prospekt Parts" style="filter: invert(100%);width: 60px;">
                                <span class="text-white fs-2">
                                    <b class="text-white">Prospekt</b> 
                                    <span class="fw-lighter">Parts</span> 
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
                        <div class="col-12 col-md-3 ps-5">
                            <h4 class="mb-4">Продукты</h4> 
                            <ul class="d-grid gap-3 list-unstyled">
                                <li><a href="#">Грузовые запчасти</a></li>
                                <li><a href="#">Оборудование для СТО</a></li>
                                <li><a href="#">Поставщикам</a></li>
                                <li><a href="#">Партнерам</a></li>
                                <li><a href="/contact">Клиентам</a></li>
                            </ul>
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
                            <ul class="d-grid gap-3 list-unstyled">
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">location_on</span>
                                    <a href="https://yandex.ru/maps/-/CCUCFDAwwA" target="_blank">
                                        MO, г. Мытищи, проезд 4536, с 10
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">call</span>
                                    <a href="tel:+79672916470">
                                        +7 (967) 291-64-70
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">mark_as_unread</span>
                                    <a href="mailto:info@prospekt-parts.com">
                                        info@prospekt-parts.com
                                    </a>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <span class="material-symbols-outlined fs-5 text-primary">alarm</span>
                                    Время работы:
                                </li>
                                <li><b>Пн-Пт, 09:00 - 19:00</b></li>
                            </ul>
                        </div>
                        <div class="col-12 pt-5">
                            <hr />
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    © <?=date('Y');?> <b>"Prospekt Parts"</b>.  Все права защищены.<br />
                                    <small>
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

        <!-- Modal -->
        <div class="modal fade" id="order" data-bs-backdrop="static" data-bs-keyboard="false" v-cloak>
            <div class="modal-dialog modal-dialog-centered">

                <form novalidate @submit.prevent="onSubmit" v-if="!send" class="modal-content border-0">
                    <div class="modal-header border-0 pb-0">
                        <h1 class="modal-title fs-5 text" id="order">@{{header}}</h1>
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
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="Ваше имя" />
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" placeholder="Ваш e-mail" />
                        </div>                        
                        <div class="mb-2">
                            <input type="text" class="form-control" placeholder="VIN номер" />
                        </div>
                        <div>
                            <textarea name="message" class="form-control" rows="3" placeholder="Список запчастей..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light text px-4" data-bs-dismiss="modal">Закрыть</button>
                        <button type="button" class="btn btn-primary text px-4 d-flex gap-1">
                            <span class="material-symbols-outlined">send</span> 
                            Отправить
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/vue.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>