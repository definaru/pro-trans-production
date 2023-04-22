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

    <link rel="shortcut icon" href="/img/favicon.png" type='image/x-icon' />
    <link rel="apple-touch-icon" href="/img/logotype.jpg" />
    <link rel="stylesheet" href="<?php echo e(asset('css/jost.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/pt.sans.narrow.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/sweetalert2.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.css')); ?>" />
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
                    <span class="text-dark logo">
                        <?php echo $names::company('Prospekt Parts'); ?>

                    </span> 
                    <span class="d-none" itemprop="name">
                        Проспект Партс
                    </span>
                </a>
                <button class="material-symbols-outlined btn d-lg-none d-block ms-4 ms-sm-4" data-bs-toggle="modal" data-bs-target="#searchForm">search</button>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <?php echo $__env->make('layout.main.ui.menu.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="d-grid d-lg-flex gap-2 pb-4 pb-lg-0" role="search">
                        <button class="d-lg-flex align-items-center gap-2 btn d-none border ps-2 searchForm" data-bs-toggle="modal" data-bs-target="#searchForm">
                            <?php if (isset($component)) { $__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconSearch::class, []); ?>
<?php $component->withName('icon-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9)): ?>
<?php $component = $__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9; ?>
<?php unset($__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9); ?>
<?php endif; ?>
                            <span>Поиск...</span>
                        </button>
                        <?php if(auth()->guard()->guest()): ?>
                        <a href="/signin" class="btn btn-primary px-3 shadow-sm fw-bold d-flex justify-content-center align-items-center gap-2">
                            <?php if (isset($component)) { $__componentOriginal58218aae8b811c2a73d264cf2ce5b36767113726 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconLogin::class, ['color' => '#fff']); ?>
<?php $component->withName('icon-login'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58218aae8b811c2a73d264cf2ce5b36767113726)): ?>
<?php $component = $__componentOriginal58218aae8b811c2a73d264cf2ce5b36767113726; ?>
<?php unset($__componentOriginal58218aae8b811c2a73d264cf2ce5b36767113726); ?>
<?php endif; ?>
                            Войти
                        </a>   
                        <template v-if="card.length">
                            <a href="/card" class="btn position-relative">
                                <?php if (isset($component)) { $__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconShoppingCart::class, ['size' => '24px']); ?>
<?php $component->withName('icon-shopping-cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67)): ?>
<?php $component = $__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67; ?>
<?php unset($__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67); ?>
<?php endif; ?>
                                <small 
                                    class="position-absolute translate-middle badge rounded-pill bg-danger text" 
                                    style="font-size: 10px;top: 8px;left: 35px;"
                                >
                                    {{card.length}}
                                </small>
                            </a>                             
                        </template>
                        
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                        <a href="/dashboard" class="btn pe-0">
                            <?php if (isset($component)) { $__componentOriginal0d94697088dc22c93949a4cc30ab7d385eb397e5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconPerson::class, ['size' => '27px']); ?>
<?php $component->withName('icon-person'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0d94697088dc22c93949a4cc30ab7d385eb397e5)): ?>
<?php $component = $__componentOriginal0d94697088dc22c93949a4cc30ab7d385eb397e5; ?>
<?php unset($__componentOriginal0d94697088dc22c93949a4cc30ab7d385eb397e5); ?>
<?php endif; ?>
                        </a>
                        <template v-if="card.length">
                            <a href="/dashboard/card" class="btn position-relative">
                                <?php if (isset($component)) { $__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconShoppingCart::class, ['size' => '25px']); ?>
<?php $component->withName('icon-shopping-cart'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67)): ?>
<?php $component = $__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67; ?>
<?php unset($__componentOriginal693b9c5dcadc2a646147e1d83b237516159d6a67); ?>
<?php endif; ?>
                                <small 
                                    class="position-absolute translate-middle badge rounded-pill bg-danger text" 
                                    style="font-size: 10px;top: 8px;left: 35px;"
                                >
                                    {{card.length}}
                                </small>
                            </a>
                        </template>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <header class="blue section"></header>
        <main>
            <?php echo $__env->yieldContent('content'); ?>
        </main>


        <?php echo $__env->make('layout.main.ui.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layout.main.ui.menu.contextmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layout.main.ui.cookie.cookie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('layout.main.ui.hotkey', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="modal fade d-print-none" id="searchForm" aria-hidden="true" aria-labelledby="searchForm" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="background-color: transparent">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="searchForm"></h1>
                    <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal">
                        <?php if (isset($component)) { $__componentOriginal19becf661720b20de410318f207b824463553d4b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconClose::class, ['color' => '#fff']); ?>
<?php $component->withName('icon-close'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal19becf661720b20de410318f207b824463553d4b)): ?>
<?php $component = $__componentOriginal19becf661720b20de410318f207b824463553d4b; ?>
<?php unset($__componentOriginal19becf661720b20de410318f207b824463553d4b); ?>
<?php endif; ?>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container position-relative">
                        <div class="row d-flex align-items-center vh-100 pb-5">
                            <form id="sendForm" action="/product" method="POST" class="col-12 position-relative mb-5">
                                <?php echo csrf_field(); ?>
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
                                    <?php if (isset($component)) { $__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\IconSearch::class, ['color' => '#333']); ?>
<?php $component->withName('icon-search'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9)): ?>
<?php $component = $__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9; ?>
<?php unset($__componentOriginald2cbd53f813b0d659f2269c5137bda62cd4d8ce9); ?>
<?php endif; ?>
                                </span>
                                <?php echo $__env->make('layout.main.ui.selest.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layout.main.ui.modal.subscription', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/sweetalert2.all.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vue.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/index.blade.php ENDPATH**/ ?>