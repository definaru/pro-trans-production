<?php
    if($image === []) {
        $img = '/img/placeholder.png';
    } else {
        $img = $image[0]['miniature']['href'];
    }
    $code = isset($vendorcode) ? $vendorcode : 'Нет данных';
    $href = isset($href) ? $href : 0;
?>
<tr>
    <td>
        <div class="ms-2">
            <?php echo e($id); ?>

        </div>
    </td>
    <td>
        <div class="d-flex align-items-center gap-2">
            <img src="<?php echo e($img); ?>" alt="<?php echo e($name); ?>" class="rounded image-product border border-muted" />
            <small>
                <a href="/dashboard/product/details/<?php echo e($href); ?>" class="name fw-bold text-decoration-none text-dark">
                    <?php echo e($name); ?>

                </a>
            </small>
        </div>
    </td>
    <td>
        <a href="/dashboard/product/details/<?php echo e($href); ?>" class="text-danger text-decoration-none">
            <?php echo e($code); ?>

        </a>
    </td>
    <td><small><strong><?php echo number_format(($price) / 100, 2, '.', ' ') ?> ₽</strong></small></td>
    <td>
        <div class="d-flex gap-2">
            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                (<?php echo e($availability); ?>)
            <?php endif; ?>
            
            <?php if($availability === '0' || $availability < 0): ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => 'В наличии '.e($availability).' шт.']); ?>
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
    </td>
    <td>
        <div class="card-body p-0 d-flex align-items-center">
            <div class="icon-brand">
                <img src="/img/guayaquillib/mercedes-benz.png" alt="MERCEDES-BENZ" class="w-50" />
            </div>
            <span>MERCEDES-BENZ</span>
        </div>
    </td>
    <td>
        <?php if($availability === '0' || $availability < 0): ?>
        <div
            id="preorder<?php echo e($href); ?>"
            data-order="<?php echo e($href); ?>,<?php echo e($code); ?>,<?php echo e($name); ?>,1"
            v-on:click="addToOrder('<?php echo e($href); ?>')"
        >
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','size' => 'sm','icon' => 'add_shopping_cart','color' => 'secondary','text' => 'Предзаказ']); ?>
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
            id="card<?php echo e($href); ?>" 
            data-card="<?php echo e($href); ?>,<?php echo e($code); ?>,<?php echo e($name); ?>,1,<?php echo e($price); ?>,<?php echo e($price); ?>" 
            v-on:click="addToCard('<?php echo e($href); ?>')"    
        >
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','size' => 'sm','icon' => 'add_shopping_cart','color' => 'dark','text' => 'В корзину']); ?>
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
    </td>
</tr><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/product-card.blade.php ENDPATH**/ ?>