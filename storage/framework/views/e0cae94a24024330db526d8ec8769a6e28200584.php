<?php
    $options = [
        [
            'name' => 'По артикулу',
            'value' => 'article'
        ],
        [
            'name' => 'По наименованию',
            'value' => 'name'
        ]
    ];
    $size = session('search') ? session('search')['meta']['size'] : '';
?>


<?php $__env->startSection('title', 'Личный кабинет'); ?>

<?php $__env->startSection('content'); ?>

    <form action="/dashboard/search" method="post" class="card shadow-sm border-0 mb-5 mt-3">
        <?php echo csrf_field(); ?>
        <div id="type" class="card-body d-flex align-items-center gap-2">
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="<?php echo e($item['value']); ?>" <?php if($item['value'] === old('type')): ?> checked <?php endif; ?> />
                <span><?php echo e($item['name']); ?></span>
            </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <label class="border rounded" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <input type="radio" name="type" class="d-none" value="vin" />
                <span>Запрос по VIN</span>
            </label>
            <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <label class="text-danger">&larr; укажите, по какому параметру искать</label>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div id="filter" class="card-body pt-0 d-flex gap-2">
            <input type="text" name="text" class="form-control" value="<?php echo e(session('text') ? session('text') : old('text')); ?>" placeholder="Поиск..." />
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

    <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p>Получен пустой запрос.</p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>    
    <?php if(session('search')): ?>
        <?php if($size === 0): ?>
        <p>По запросу <strong>"<?php echo e(session('text')); ?>"</strong> ничего не найдено</p>
        <?php else: ?>
        <p><?php echo e($decl::search($size)); ?> <span class="badge bg-danger rounded-pill"><?php echo e($size); ?></span> </p>        
        <?php endif; ?>

        <?php $__currentLoopData = session('search')['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex justify-content-between w-100 bg-white px-3 py-2 my-1 shadow-sm rounded">
            <div>
                <span class="ps-1 pe-0 btn"><?php echo e($loop->iteration); ?>.</span>
                <a href="/dashboard/product/details/<?php echo e($item['id']); ?>" class="text-dark text-decoration-none btn">
                    <b><?php echo e($item['code']); ?></b> &#160;&#160; 
                    <?php
                        $str = str_replace(mb_strtolower(session('text')), '<mark class="rounded py-0">'.mb_strtolower(session('text')).'</mark>', mb_strtolower($item['name']));
                        $str = mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1, mb_strlen($str));
                        echo $str;
                    ?>
                </a>                
            </div>
            <div class="d-flex gap-2">
                
                <div class="btn">
                    <?php echo number_format(($item['salePrices'][0]['value']) / 100, 2, '.', ' ') ?> ₽
                </div> 
                <div 
                    id="card<?php echo e($loop->iteration); ?>" 
                    data-card="<?php echo e($item['id']); ?>,<?php echo e($item['code']); ?>,<?php echo e($item['name']); ?>,1,<?=number_format(($item['salePrices'][0]['value']) / 100, 2, '.', '')?>" 
                    v-on:click="addToCard(<?php echo e($loop->iteration); ?>)"
                >
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'submit','icon' => 'add_shopping_cart','color' => 'dark','text' => 'В корзину']); ?>
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
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    
    <!-- <?php if(auth()->check() && auth()->user()->hasRole('customer')): ?>
        <p>Project Manager Panel</p> 
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <strong>Admin Panel</strong> 
    <?php endif; ?> -->

    <?php /*
    <div class="row">
        <div class="col-md-12">
            Список категорий
        </div>
    </div>    
    <div class="row">
        <div class="col-md-4">
            @component('App\View\Components\CategoryCard', 'category-card', ['icon' => 'oil_barrel','header' => 'Масла','category' => 'smtp'])
<?php $component->withAttributes([]); ?>
@endComponentClass
        </div>
    </div>    
    */ ?>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content border-0">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Заказ по VIN номеру</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div class="mt-2">
                        <input type="text" class="form-control" name="vin" placeholder="Укажите VIN номер" />
                    </div>
                    <div class="mt-2">
                        <textarea rows="5" class="form-control" name="spares" placeholder="Укажите список запчастей"></textarea>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <div class="btn btn-outline-light text-dark" data-bs-dismiss="modal">Отмена</div>
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['color' => 'dark','icon' => 'forward','type' => 'submit','text' => 'Отправить менеджеру']); ?>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard.blade.php ENDPATH**/ ?>