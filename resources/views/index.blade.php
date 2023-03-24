@extends('layout/index', [
    'title' => 'Prospekt Parts',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Интернет-магазин `Prospekt Parts` - уникальная торговая платформа, которая позволяет мгновенно, в режиме реального времени, получать информацию о реальных остатках и условиях поставки',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
])
@section('title', 'Prospekt Parts | Проспект Транс')
@section('content')
    <section id="about" class="bg-hero coral position-relative overflow-hidden">
        <div class="container h-100">
            <p class="d-none d-lg-inline copyright">© 2022 &middot; Все права защищены</p>
            <div class="row pt-4 h-100">
                <div class="col-12 col-lg-7 d-block d-lg-flex justify-content-start align-items-center align-self-center">
                    <div class="d-flex flex-column gap-3 position-relative z-3 p-3 p-lg-0">
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
                        <div class="d-grid d-lg-flex align-items-center gap-3 gap-lg-4 w-100">
                            <a href="/signup" class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <span class="material-symbols-outlined">open_in_new</span>
                                Зарегистрироваться
                            </a>
                            <a href="#bestsellers" class="btn btn-lg btn-dark px-5 py-3">
                                &#8618;&#160; Подробнее
                            </a>
                        </div>
                        <div class="d-flex align-items-center w-100 py-2">
                            <div class="border-end border-dark-subtle pe-3 pe-lg-4 lh-1">
                                <strong class="fs-1 text fw-bold">8+</strong>
                                <p class="m-0">Лет на рынке</p>
                            </div>
                            <div class="border-end border-dark-subtle px-3 px-lg-4 lh-1">
                                <strong class="fs-1 text fw-bold">3+</strong>
                                <p class="m-0">Производителей</p>
                            </div>
                            <div class="px-3 px-lg-4 lh-1">
                                <strong class="fs-1 text fw-bold">9K+</strong>
                                <p class="m-0">Запчастей</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="d-none d-lg-flex gap-2 position-absolute z-3">
                        <div class="card border-0 shadow" style="width: 17rem">
                            <div class="card-body pb-0 position-relative">
                                <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                    <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                    <small>5.0 рейтинг</small> 
                                </div>
                                <img 
                                    src="https://15.img.avito.st/image/1/1.png0qra5CpECA8iUdPTdRf8JDJuAiQJThQkIlYgDAJM.-ajyZ9476x-K-rxK332HIzGJmGK_7N6YPnidgcpnPu0" 
                                    class="card-img-top rounded" 
                                    alt="Цилиндр переключения КПП (AMT), Проспект Транс" 
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
                                    alt="Выжимной подшипник сцепления Actros MP4, Проспект Транс" 
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
        <div class="container" itemscope itemtype="https://schema.org/ItemList">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 text-center">
                    <h2 class="fw-bold display-5">Хиты продаж 🔥</h2>
                    <p class="text-muted text">
                        Самые ходовые товары из Германии с проверенным ГТД. 
                        У нас только новые запчасти от производителя. 
                        Мы специально не стали обрабатывать фотографии, чтобы вы видели что детали наши и в наличии.
                    </p>
                </div>
            </div>
            <div class="row g-2 py-4" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                @foreach ($bestsellers as $best)
                <div class="col-12 col-lg-3">
                    <div class="card card-data border-0 shadow order">
                        <a href="/product/mersedes-benz/<?=$best['href'];?>" class="card-body pb-0 position-relative">
                            <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                <small><?=$best['raiting'];?> рейтинг</small> 
                                <meta itemprop="worstRating" content="1" />
                                <meta itemprop="ratingValue" content="<?=$best['raiting'];?>" />
                                <meta itemprop="bestRating" content="5" />
                            </div>
                            <img 
                                itemprop="image"
                                src="<?=$best['image'];?>" 
                                class="card-img-top rounded"
                                alt="<?=$best['name'];?>, Проспект Транс" 
                            />
                        </a>
                        <div class="card-body pb-0">
                            <h5 class="card-title fw-bold fs-6" style="height: 38px">
                                <a itemprop="name" href="/product/mersedes-benz/<?=$best['href'];?>"><?=$best['name'];?></a>
                            </h5>
                            <hr style="color: #ddd" />
                            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="d-flex justify-content-between">
                                <div class="lh-sm">
                                    <small class="text-muted d-block w-100">Марка</small>
                                    <strong itemprop="brand" class="text-secondary">Mercedes-Benz</strong>
                                </div>
                                <div class="lh-sm">
                                    <meta itemprop="priceCurrency" content="RUB">
                                    <link itemprop="availability" href="http://schema.org/InStock">
                                    <small class="text-muted d-block w-100">Артикул</small>
                                    <strong itemprop="model" class="text-secondary">
                                        <?=$best['article'];?>
                                    </strong>
                                </div>
                            </div>
                            <hr class="mb-1" style="color: #ddd" />
                        </div>
                        <div class="card-footer border-top-0 bg-white d-grid">
                            <div 
                                id="card{{$loop->iteration}}" 
                                data-card="{{$best['href']}},{{$best['article']}},{{$best['name']}},1,{{$best['price']}},{{$best['price']}}" 
                                v-on:click="addToCard({{$loop->iteration}})"
                                class="btn btn-primary mb-2 text d-flex align-items-center justify-content-center gap-2 py-2"
                            >
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                                <strong>В корзину</strong> 
                            </div>
                        </div>
                    </div>
                </div>                                
                @endforeach
            </div>
            <div class="row">
                <div class="col-8 offset-2 text-center mt-4">
                    <a href="/products/mersedes-benz" class="btn btn-lg btn-dark px-5">
                        Показать всё &#160; &rarr;
                    </a>
                </div>
                <div class="col-12 mt-5">
                    <hr />
                </div>
            </div>
            <div class="row py-4">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center col-12 mt-5">
                    <h2 class="fw-bold display-6">
                        Расходные материалы
                        <span class="d-block w-100 fw-light fs-5 text-secondary text">Mercedes-Benz</span>
                    </h2>
                    <a href="/products/mersedes-benz" class="btn btn-sm btn-outline-dark px-4">
                        Смотреть все&#160; &rarr;
                    </a>
                </div>
            </div>
            <div class="row g-3" itemprop="itemListElement" itemtype="https://schema.org/Product">
                @foreach ($alllist as $detail)
                <div class="col-12 col-md-4">
                    <div class="consumables bg-white rounded p-2 shadow d-flex align-items-center">
                        <a href="/product/mersedes-benz/<?=$detail['href'];?>" class="rounded me-3" style="background: #ebcaa1">
                            <img
                                itemprop="image" 
                                src="<?=$detail['image'];?>" 
                                class="material rounded"
                                alt="<?=$detail['name'];?>, Проспект Транс"
                                style="opacity: 0.7;cursor:pointer" 
                            />
                        </a>
                        <div class="d-flex flex-column w-75">
                            <small class="w-75">
                                <strong>
                                    <a href="/product/mersedes-benz/<?=$detail['href'];?>" class="text-dark text-decoration-none" itemprop="name">
                                        <?=$detail['name'];?>
                                    </a> 
                                </strong>
                            </small>
                            <div itemscope itemprop="offers" itemtype="http://schema.org/Offer" class="d-flex align-items-center justify-content-between">
                                <meta itemprop="priceCurrency" content="RUB">
                                <meta itemprop="availability" content="http://schema.org/InStock" />
                                <span class="d-none" itemprop="brand">Mercedes-Benz</span>
                                <i itemprop="model"><?=$detail['article'];?></i>
                                <div class="d-flex align-items-center gap-1" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                                    <meta itemprop="worstRating" content="1">
                                    <meta itemprop="ratingValue" content="5" />
                                    <meta itemprop="bestRating" content="5" />
                                    
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
                <div class="col-12 col-lg-6 offset-lg-3 text-center">
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
                        <div class="card-body text-center pt-5">
                            <img src="/img/actros___kopiya.png" style="height: auto;opacity: 1" class="w-100" alt="Mercedes-Benz">
                            <h5 class="fw-bold mt-3">Mercedes-Benz</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-data border-light shadow-lg">
                        <div class="card-body text-center pt-5">
                            <img src="/img/volvo.png" style="height: auto;opacity: 1" class="w-100" alt="Volvo">
                            <h5 class="fw-bold mt-3">Volvo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 z-3 position-relative">
                    <div class="card card-data border-light shadow-lg">
                        <div class="card-body text-center pt-5">
                            <img src="/img/Renault.png" style="height: auto;opacity: 1" class="w-100" alt="Renault Trucks">
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
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center col-12">
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
            <div itemscope itemtype="https://schema.org/Product" class="row g-2 py-4 ng position-relative">
                @foreach ($listorder as $item)
                    <div class="col-lg-3 col-12">
                        <div class="card card-data border-0 shadow order">
                            <a href="/product/mersedes-benz/<?=$item['href'];?>" class="card-body pb-0 position-relative">
                                <div 
                                    itemprop="aggregateRating" 
                                    itemscope 
                                    itemtype="https://schema.org/AggregateRating" 
                                    class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2"
                                >
                                    <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                    <small><?=$item['raiting']?> рейтинг</small> 
                                    <meta itemprop="worstRating" content="1" />
                                    <meta itemprop="ratingValue" content="<?=$item['raiting'];?>" />
                                    <meta itemprop="bestRating" content="5" />
                                </div>
                                <img 
                                    itemprop="image"
                                    src="<?=$item['image']?>"
                                    class="card-img-top rounded" 
                                    alt="<?=$item['name']?>, Проспект Транс"
                                />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-6">
                                    <a itemprop="name" href="/product/mersedes-benz/<?=$item['href'];?>"><?=$item['name']?></a>
                                </h5>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p itemprop="offers" itemscope itemtype="https://schema.org/Offer" class="label">
                                            <link itemprop="availability" href="https://schema.org/InStock" />В наличии
                                        </p>                                           
                                    </div>
                                    <small>&#11088;&#11088;&#11088;&#11088;&#11088;</small> 
                                </div>
                                
                                <hr style="color: #ddd">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img 
                                                src="/img/mercedes-benz.png" 
                                                alt="Mercedes-Benz" 
                                                style="width: 37px;height: 37px"
                                            />
                                        </div>
                                        <div class="lh-sm">
                                            <small class="text-muted d-block w-100">
                                                <?=$item['article']?>
                                            </small>
                                            <strong class="text-secondary">Mercedes-Benz</strong>
                                        </div>
                                    </div>
                                    <div>
                                        <div onclick="addInCard()" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
                                            <span class="material-symbols-outlined">add_shopping_cart</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 text-center mt-3 mb-5">
                    <a href="/products/mersedes-benz" class="btn btn-lg btn-dark px-5">
                        Показать всё &nbsp; →
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-5">
                    <div class="p-5 bg-dark text-white rounded" 
                    style="background-image: url(/img/banner.png);background-size: cover;background-position: top right;box-shadow: inset 0px -48px 254px 86px #000000bf">
                        <h2 class="display-3 mb-4 fw-bold">Присоединяйтейсь<br> к нашему сообществу</h2>
                        <div class="d-grid d-lg-flex gap-3">
                            <a href="/signup" class="btn btn-lg btn-primary px-5 d-flex justify-content-center align-items-center gap-2">
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
                        class="w-100 rounded mb-5 mb-lg-0" 
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
                    <div class="p-5 bg-primary text-white rounded text-center mb-4 mb-lg-0">
                        <h4 class="fw-lighter text-warning">Скоро для мобильного</h4>
                        <h3 class="fw-bold text">Скачать и установить</h3>
                        <p class="text">Наш сервис на следующих платформах:</p>
                        <div class="d-flex justify-content-center flex-column flex-lg-row gap-3 pt-3">
                            <button class="d-flex justify-content-center gap-2 btn btn-dark px-4 py-2" disabled>
                                <img src="/img/google_play.svg" style="width: 40px" alt="Google Play">
                                <div class="d-flex align-self-center flex-column lh-sm text-start">
                                    <small class="text">Скачать на</small>
                                    <strong class="fw-bold text">Google Play</strong> 
                                </div>
                            </button>
                            <button class="d-flex justify-content-center gap-2 btn btn-dark px-4 py-2" disabled>
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
                        <div class="d-flex row justify-content-center gap-5 pt-4 brand" style="opacity: 0.6">
                            <img src="/img/logo-daf.png" class="col-6 col-lg-3" style="width: 100px" alt="DAF">
                            <img src="/img/renault.svg" class="col-6 col-lg-3" style="width: 60px;" alt="Renault">
                            <img src="/img/volvo.svg" class="col-6 col-lg-3" style="width: 62px;" alt="Volvo">
                            <img src="/img/mercedes-benz.svg" class="col-6 col-lg-3" style="width: 74px;" alt="Mercedes Benz">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection