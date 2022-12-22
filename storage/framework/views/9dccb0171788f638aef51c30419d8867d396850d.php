<?php
    $isImage = $image === '' ? '/img/no_photo.jpg' : $image;
    $ifBig = $percent > 94 ? 'btn-success' : 'btn-danger';
    $isTotal = $percent >= 100 ? 'bg-success' : 'text-dark bg-warning';
    $price = number_format($price, 2, '.', ' ').' ₽';
?>
<li class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
    <small class="d-flex align-items-center gap-3" style="width: 250px">
        <img src="<?php echo e($isImage); ?>" class="rounded" style="width: 50px" alt="" />
        <a href="/search/index/<?php echo e($id); ?>" class="fw-bold text-dark text-decoration-none">
            <?php echo e($articul); ?>

        </a>
        <?php echo e($brand); ?> 
    </small>

    <div class="position-relative">
        <?php echo e($price); ?>

        <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
    </div>          

    
    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => ''.e($price).'']); ?>
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

    <div class="input-group" style="width: 140px">
        <button class="btn btn-sm material-symbols-outlined pe-0">add</button>
        <input type="number" min="1" class="form-control form-control-sm border-0 text-center" value="<?php echo e($count); ?>" />
        <button class="btn btn-sm material-symbols-outlined ps-0">remove</button>
    </div>

    <div class="btn-group">
        <a href="/delete/<?php echo e($id); ?>" class="btn text-danger rounded material-symbols-outlined">delete</a>
    </div>
</li><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/card-item.blade.php ENDPATH**/ ?>