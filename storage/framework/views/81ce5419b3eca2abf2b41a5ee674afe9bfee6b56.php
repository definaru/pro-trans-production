<?php
    if($image === []) {
        $img = '/img/no_photo.jpg';
    } else {
        $img = $image[0]['miniature']['href'];
    }
?>
<tr>
    <td>
        <div class="ms-2">
            <?php echo e($id); ?>

        </div>
    </td>
    <td>
        <div class="d-flex align-items-center gap-2">
            <img src="<?php echo e($img); ?>" alt="<?php echo e($name); ?>" class="rounded image-product" />
            <small>
                <a href="/dashboard/product/details/<?php echo e($href); ?>" class="name fw-bold text-decoration-none text-dark">
                    <?php echo e($name); ?>

                </a>
            </small>
        </div>
    </td>
    <td><a href="/dashboard/product/details/<?php echo e($href); ?>" class="text-danger text-decoration-none"><?php echo e($vendorcode); ?></a></td>
    <td><small><strong><?php echo number_format(($price) / 100, 2, '.', ' ') ?> ₽</strong></small></td>
    <td>
        <?php if($availability === '0'): ?>
            <a href="#">
                <small class="badge text-bg-secondary">Заказать</small>
            </a>
        <?php else: ?>
            <small class="badge bg-soft-success text-success px-3 py-2">В наличии - <?php echo e($availability); ?> шт.</small>
        <?php endif; ?>
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
        <?php if($availability === '0'): ?>
            <!-- <button class="other-features btn btn-secondary btn-sm" disabled>В корзину</button> -->
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','size' => 'sm','icon' => 'add_shopping_cart','color' => 'secondary','text' => 'В корзину']); ?>
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
        <?php else: ?>
        <div
            id="card<?php echo e($href); ?>" 
            data-card="<?php echo e($href); ?>,<?php echo e($vendorcode); ?>,<?php echo e($name); ?>,1,<?=number_format(($price) / 100, 2, '.', '')?>" 
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