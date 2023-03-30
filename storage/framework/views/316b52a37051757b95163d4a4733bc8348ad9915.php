<?php
    $size = $search['meta']['size'];
?>

<?php $__env->startSection('title', 'Результат поиска: "'.$text.'"'); ?>

<?php $__env->startSection('content'); ?>
    <hr />
    <?php if($size === 0): ?>
        <p class="text-muted">По запросу <strong>"<?php echo e($text); ?>"</strong> ничего не найдено</p>
    <?php else: ?>
        <p class="text-muted"><?php echo e($decl::search($size)); ?> <span class="badge bg-soft-danger text-danger rounded-pill"><?php echo e($size); ?></span> </p>        
    <?php endif; ?>

    <?php $__currentLoopData = $search['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-between w-100 bg-white px-3 py-2 my-1 shadow-sm rounded">
        <div>
            <span class="ps-1 pe-0 btn"><?php echo e($loop->iteration); ?>.</span>
            <a href="/dashboard/product/details/<?php echo e($item['id']); ?>" class="text-dark text-decoration-none btn">
                <b>
                    <?php
                        $str = str_replace(mb_strtolower($text), '<mark class="rounded py-0">'.mb_strtoupper($text).'</mark>', mb_strtolower($item['code']));
                        echo $str;                    
                    ?>
                </b> &#160;&#160; 
                <?php
                    //$str = str_replace(mb_strtolower(session('text')), '<mark class="rounded py-0">'.mb_strtolower(session('text')).'</mark>', mb_strtolower($item['name']));
                    $str = mb_strtolower($item['name']);
                    $str = mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1, mb_strlen($str));
                    echo $str;
                ?>
            </a>                
        </div>
        <div class="d-flex gap-2">
            <div class="btn">
                <?php echo $currency::summa($item['salePrices'][0]['value']); ?>

            </div> 
            <div class="btn">
                <?php if($item['quantity'] == 0): ?>
                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => 'danger','text' => 'Нет в наличии']); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94)): ?>
<?php $component = $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94; ?>
<?php unset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94); ?>
<?php endif; ?> 
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => 'В наличии '.e($item['quantity']).'']); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94)): ?>
<?php $component = $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94; ?>
<?php unset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94); ?>
<?php endif; ?>  
                <?php endif; ?> 
            </div>
            <div>
                <?php if($item['quantity'] == 0): ?>
                <div
                    id="preorder<?php echo e($item['id']); ?>"
                    data-order="<?php echo e($item['id']); ?>,<?php echo e($item['article']); ?>,<?php echo e($item['name']); ?>,1,<?php echo e($item['salePrices'][0]['value']); ?>"
                    v-on:click="addToOrder('<?php echo e($item['id']); ?>')"
                >
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','icon' => 'add_shopping_cart','color' => 'secondary','text' => 'В корзину']); ?>
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
                <?php else: ?>
                    <div 
                        id="card<?php echo e($loop->iteration); ?>" 
                        data-card="<?php echo e($item['id']); ?>,<?php echo e($item['article']); ?>,<?php echo e($item['name']); ?>,1,<?php echo e($item['salePrices'][0]['value']); ?>,<?php echo e($item['salePrices'][0]['value']); ?>" 
                        v-on:click="addToCard(<?php echo e($loop->iteration); ?>)"
                    >
                        <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','icon' => 'add_shopping_cart','color' => 'dark','text' => 'В корзину']); ?>
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
                <?php endif; ?> 
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/result/search.blade.php ENDPATH**/ ?>