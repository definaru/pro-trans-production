
<?php $__env->startSection('title', 'Prospekt Parts'); ?>
<?php $__env->startSection('content'); ?>
    <section id="about" class="bg-hero coral position-relative overflow-hidden">
        <div class="container h-100">
            <p class="d-none d-lg-inline copyright">© 2022 &middot; Все права защищены</p>
            <div class="row pt-4 h-100">
                <div class="col-12 col-lg-7 d-block d-lg-flex justify-content-start align-items-center align-self-center">
                    <div class="d-flex flex-column gap-3 position-relative z-3 p-3 p-lg-0">
                        <h1 class="fw-bold lh-1 display-4">
                             
                            <span class="text-primary">Поставляем запчасти</span>, комплектующие 
                            и расходные материалы 
                            <br />
                            <span class="fw-light display-5">для грузовых автомобилей.</span> 
                             
                        </h1>
                        <p class="fs-6 w-100 text">
                            Широкий ассортимент инструментов и оборудования 
                            <br />для станций технического обслуживания.
                        </p>
                        <div class="d-grid d-lg-flex align-items-center gap-3 gap-lg-4 w-100">
                            <a href="/signup" class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <?php if (isset($component)) { $__componentOriginal5403088a3b621a00dd17eee36a9948a82af5908b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconOpenInNew::class, ['size' => '25px','color' => '#fff']); ?>
<?php $component->withName('icon-open-in-new'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5403088a3b621a00dd17eee36a9948a82af5908b)): ?>
<?php $component = $__componentOriginal5403088a3b621a00dd17eee36a9948a82af5908b; ?>
<?php unset($__componentOriginal5403088a3b621a00dd17eee36a9948a82af5908b); ?>
<?php endif; ?>
                                Зарегистрироваться
                            </a>
                            <a href="#bestsellers" class="btn btn-lg btn-dark px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <?php if (isset($component)) { $__componentOriginal5b27657aad8a4141494e165719ea42a6aae2a0c3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconSubdirectoryArrowRight::class, ['size' => '25px','color' => '#fff']); ?>
<?php $component->withName('icon-subdirectory-arrow-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b27657aad8a4141494e165719ea42a6aae2a0c3)): ?>
<?php $component = $__componentOriginal5b27657aad8a4141494e165719ea42a6aae2a0c3; ?>
<?php unset($__componentOriginal5b27657aad8a4141494e165719ea42a6aae2a0c3); ?>
<?php endif; ?>
                                Подробнее
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
                    <?php if (isset($component)) { $__componentOriginalbad31bcf8c228bbd8c39e525ce623d47dec5f519 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\HeroCard::class, []); ?>
<?php $component->withName('hero-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbad31bcf8c228bbd8c39e525ce623d47dec5f519)): ?>
<?php $component = $__componentOriginalbad31bcf8c228bbd8c39e525ce623d47dec5f519; ?>
<?php unset($__componentOriginalbad31bcf8c228bbd8c39e525ce623d47dec5f519); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="bestsellers" class="bg-secondary-subtle">
        <div class="container" itemscope itemtype="https://schema.org/ItemList">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 text-center">
                    <h2 class="fw-bold display-5">Хиты продаж <img src="/img/index/fire.png" style="width: 35px" alt="Хиты продаж" /></h2>
                    <p class="text-muted text">
                        Самые ходовые товары из Германии с проверенным ГТД. 
                        У нас только новые запчасти от производителя. 
                        Мы специально не стали обрабатывать фотографии, чтобы вы видели что детали наши и в наличии.
                    </p>
                </div>
            </div>
            <div class="row g-2 py-4" itemprop="itemListElement" itemscope itemtype="http://schema.org/Product">
                <?php $__currentLoopData = $bestsellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $best): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-12 col-lg-3">
                    <div class="card card-data border-0 shadow order">
                        <a href="/product/mersedes-benz/<?=$best['href'];?>" class="card-body pb-0 position-relative">
                            <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                <?php if (isset($component)) { $__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconFavorite::class, ['color' => '#b02a37']); ?>
<?php $component->withName('icon-favorite'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921)): ?>
<?php $component = $__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921; ?>
<?php unset($__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921); ?>
<?php endif; ?>
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
                                id="card<?php echo e($loop->iteration); ?>" 
                                data-card="<?php echo e($best['href']); ?>,<?php echo e($best['article']); ?>,<?php echo e($best['name']); ?>,1,<?php echo e($best['price']); ?>,<?php echo e($best['price']); ?>,<?php echo e($best['image']); ?>" 
                                v-on:click="addToCard(<?php echo e($loop->iteration); ?>)"
                                class="btn btn-primary mb-2 text d-flex align-items-center justify-content-center gap-2 py-2"
                            >
                                <?php if (isset($component)) { $__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconAddCard::class, ['size' => '25px','color' => '#fff']); ?>
<?php $component->withName('icon-add-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3)): ?>
<?php $component = $__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3; ?>
<?php unset($__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3); ?>
<?php endif; ?>
                                <strong>В корзину</strong> 
                            </div>
                        </div>
                    </div>
                </div>                                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <span class="d-block w-100 fw-light fs-6 text-secondary text">Mercedes-Benz</span>
                    </h2>
                    <a href="/products/mersedes-benz" class="btn btn-sm btn-outline-dark px-4">
                        Смотреть все&#160; &rarr;
                    </a>
                </div>
            </div>
            <div class="row g-3" itemprop="itemListElement" itemtype="https://schema.org/Product">
                <?php $__currentLoopData = $alllist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <div class="rating-result">
                                        <?php $count = rand(4, 5); ?>
                                        <?php for ($i = 1; $i <= floor($count); $i++) { ?>
                                            <span class="active"></span>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= 5-floor($count); $i++) { ?>
                                            <span></span>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $listorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-12">
                        <div class="card card-data border-0 shadow order">
                            <a href="/product/mersedes-benz/<?=$item['href'];?>" class="card-body pb-0 position-relative">
                                <div 
                                    itemprop="aggregateRating" 
                                    itemscope 
                                    itemtype="https://schema.org/AggregateRating" 
                                    class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2"
                                >
                                    <?php if (isset($component)) { $__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconFavorite::class, ['color' => '#b02a37']); ?>
<?php $component->withName('icon-favorite'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921)): ?>
<?php $component = $__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921; ?>
<?php unset($__componentOriginal5759422ac23f475d1c6410e6d22002aa683f0921); ?>
<?php endif; ?>
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
                                    <div class="rating-result" style="bottom: 0">
                                        <?php $count = rand(4, 5); ?>
                                        <?php for ($i = 1; $i <= floor($count); $i++) { ?>
                                            <span class="active"></span>
                                        <?php } ?>
                                        <?php for ($i = 1; $i <= 5-floor($count); $i++) { ?>
                                            <span></span>
                                        <?php } ?>
                                    </div>
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
                                        <div 
                                            onclick="startGoods()"
                                            class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2"
                                        >
                                            <?php if (isset($component)) { $__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconAddCard::class, ['size' => '25px','color' => '#fff']); ?>
<?php $component->withName('icon-add-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3)): ?>
<?php $component = $__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3; ?>
<?php unset($__componentOriginald3016bcaf72ba9ba5030dea4e846411634478ec3); ?>
<?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        style="filter: saturate(250%);opacity: 0.5" 
                        alt="Наши преимущества" 
                        class="w-100 rounded mb-5 mb-lg-0" 
                    />
                </div>
                <div class="col-12 col-lg-7">
                    <div class="ps-4">
                        <h2 class="display-3 mb-4">Наши преимущества</h2>
                        <ul class="d-grid gap-4 list-unstyled">
                            <li class="d-flex feat">
                                <span class="mt-2 me-4">
                                    <?php if (isset($component)) { $__componentOriginal45b6c5f5a7e53312d4610d833312739bb353079e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconSwitchAccessShortcutAdd::class, ['size' => '40px','color' => '#310062']); ?>
<?php $component->withName('icon-switch-access-shortcut-add'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45b6c5f5a7e53312d4610d833312739bb353079e)): ?>
<?php $component = $__componentOriginal45b6c5f5a7e53312d4610d833312739bb353079e; ?>
<?php unset($__componentOriginal45b6c5f5a7e53312d4610d833312739bb353079e); ?>
<?php endif; ?>
                                </span>
                                <div>
                                    <strong class="fs-2 text-secondary">Запасные части</strong>
                                    <p class="fs-5 text">1) Мы поставляем только оригинальные новые запчасти</p> 
                                </div>
                            </li>
                            <li class="d-flex feat">
                                <span class="mt-2 me-4">
                                    <?php if (isset($component)) { $__componentOriginal5a3b2f0ba51d914c32004455b209a4e05393ffe3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconShieldWithHeart::class, ['size' => '40px','color' => '#310062']); ?>
<?php $component->withName('icon-shield-with-heart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a3b2f0ba51d914c32004455b209a4e05393ffe3)): ?>
<?php $component = $__componentOriginal5a3b2f0ba51d914c32004455b209a4e05393ffe3; ?>
<?php unset($__componentOriginal5a3b2f0ba51d914c32004455b209a4e05393ffe3); ?>
<?php endif; ?>
                                </span>
                                <div>
                                    <strong class="fs-2 text-secondary">Репутация</strong>
                                    <p class="fs-5 text">2) У нас очень хорошая репутация, нам доверяют многие компании</p>
                                </div>
                            </li>
                            <li class="d-flex feat">
                                <span class="mt-2 me-4">
                                    <?php if (isset($component)) { $__componentOriginal0c6d8cd6984192c9700836ca613d2ed2543e51b8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconCurrencyRubler::class, ['size' => '40px','color' => '#310062']); ?>
<?php $component->withName('icon-currency-rubler'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c6d8cd6984192c9700836ca613d2ed2543e51b8)): ?>
<?php $component = $__componentOriginal0c6d8cd6984192c9700836ca613d2ed2543e51b8; ?>
<?php unset($__componentOriginal0c6d8cd6984192c9700836ca613d2ed2543e51b8); ?>
<?php endif; ?>
                                </span>
                                <div>
                                    <strong class="fs-2 text-secondary">Цены</strong>
                                    <p class="fs-5 text">3) Мы не занимаемся перепродажами, поэтому у нас приемлемые цены</p>
                                </div>
                                
                            </li>
                            <li class="d-flex feat">
                                <span class="mt-2 me-4">
                                    <?php if (isset($component)) { $__componentOriginal1163d854608a892fc692c7630accb694f88f7d31 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconPallet::class, ['size' => '40px','color' => '#310062']); ?>
<?php $component->withName('icon-pallet'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1163d854608a892fc692c7630accb694f88f7d31)): ?>
<?php $component = $__componentOriginal1163d854608a892fc692c7630accb694f88f7d31; ?>
<?php unset($__componentOriginal1163d854608a892fc692c7630accb694f88f7d31); ?>
<?php endif; ?>
                                </span>
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
                                <?php if (isset($component)) { $__componentOriginal845d9790fd076d79052d38fce78fca6861e3beed = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconGooglePlay::class, ['size' => '40px','color' => '#fff']); ?>
<?php $component->withName('icon-google-play'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal845d9790fd076d79052d38fce78fca6861e3beed)): ?>
<?php $component = $__componentOriginal845d9790fd076d79052d38fce78fca6861e3beed; ?>
<?php unset($__componentOriginal845d9790fd076d79052d38fce78fca6861e3beed); ?>
<?php endif; ?>
                                <div class="d-flex align-self-center flex-column lh-sm text-start">
                                    <small class="text">Скачать на</small>
                                    <strong class="fw-bold text">Google Play</strong> 
                                </div>
                            </button>
                            <button class="d-flex justify-content-center gap-2 btn btn-dark px-4 py-2" disabled>
                                
                                <?php if (isset($component)) { $__componentOriginalee10e7931afa5c6074f44a73527cc8fda8bf2a6f = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconAppleStore::class, ['size' => '40px','color' => '#fff']); ?>
<?php $component->withName('icon-apple-store'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee10e7931afa5c6074f44a73527cc8fda8bf2a6f)): ?>
<?php $component = $__componentOriginalee10e7931afa5c6074f44a73527cc8fda8bf2a6f; ?>
<?php unset($__componentOriginalee10e7931afa5c6074f44a73527cc8fda8bf2a6f); ?>
<?php endif; ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => config('app.name'),
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Интернет-магазин `Prospekt Parts` - уникальная торговая платформа, которая позволяет мгновенно, в режиме реального времени, получать информацию о реальных остатках и условиях поставки',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/index.blade.php ENDPATH**/ ?>