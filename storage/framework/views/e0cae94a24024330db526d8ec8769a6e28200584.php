
<?php $__env->startSection('title', 'Личный кабинет'); ?>

<?php $__env->startSection('content'); ?>
    <form action="" method="post" class="card shadow-sm border-0 mb-5 mt-3">
        <?php echo csrf_field(); ?>
        <div id="type" class="card-body d-flex gap-2">
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="article" checked />
                <span>По артикулу</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="name" />
                <span>По наименованию</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="barcode" />
                <span>По штрих-коду</span>
            </label>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="vin" />
                <span>Поиск по VIN</span>
            </label>
        </div>
        <div id="filter" class="card-body pt-0 d-flex gap-2">
            <!-- <label class="border rounded">
                <input type="checkbox" name="filter" class="d-none"> 
                <span class="btn material-symbols-outlined">tune</span>
            </label>
            <label class="border rounded">
                <input type="checkbox" name="filter" class="d-none"> 
                <span class="btn material-symbols-outlined">table_view</span>
            </label>
            <label class="border rounded">
                <input type="checkbox" name="filter" class="d-none"> 
                <span class="btn material-symbols-outlined">photo_camera</span>
            </label> -->

            <input type="text" name="text" class="form-control"value="<?php echo e(old('text')); ?>" placeholder="Поиск..." />
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['color' => 'danger','icon' => 'search','type' => 'submit','text' => 'Найти']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>
        </div>
    </form>
    <pre><?php var_dump($_POST);?></pre>
    <!-- <?php if(auth()->check() && auth()->user()->hasRole('customer')): ?>
        <p>Project Manager Panel</p> 
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <strong>Admin Panel</strong> 
    <?php endif; ?> -->
    <div class="row">
        <div class="col-md-12">
            Список категорий
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryCard::class, ['icon' => 'oil_barrel','header' => 'Масла','category' => 'smtp']); ?>
<?php $component->withName('category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c)): ?>
<?php $component = $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c; ?>
<?php unset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c); ?>
<?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryCard::class, ['icon' => 'settings_suggest','header' => 'TecDoc Inside','category' => 'smtpw']); ?>
<?php $component->withName('category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c)): ?>
<?php $component = $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c; ?>
<?php unset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c); ?>
<?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryCard::class, ['icon' => 'motion_photos_auto','header' => 'Каталоги ACat','category' => 'smtpa']); ?>
<?php $component->withName('category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c)): ?>
<?php $component = $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c; ?>
<?php unset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c); ?>
<?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryCard::class, ['icon' => 'view_in_ar_new','header' => 'Бренды запчастей','category' => 'smtps']); ?>
<?php $component->withName('category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c)): ?>
<?php $component = $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c; ?>
<?php unset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c); ?>
<?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryCard::class, ['icon' => 'copyright','header' => 'Неоригинальные каталоги','category' => 'smtpc']); ?>
<?php $component->withName('category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c)): ?>
<?php $component = $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c; ?>
<?php unset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c); ?>
<?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php if (isset($component)) { $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CategoryCard::class, ['icon' => 'tire_repair','header' => 'Подбор шин и дисков','category' => 'smtpt']); ?>
<?php $component->withName('category-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c)): ?>
<?php $component = $__componentOriginale300d578bad826c4775f3f8859f88898a150e59c; ?>
<?php unset($__componentOriginale300d578bad826c4775f3f8859f88898a150e59c); ?>
<?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard.blade.php ENDPATH**/ ?>