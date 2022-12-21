<?php
    $isSize = $size === 'lg' ? 'btn-lg' : '';
    $variable = $size === 'sm' ? 'btn-sm' : $isSize;
?>

<?php if($type === 'button' || $type === 'reset' || $type === 'submit'): ?>
<button <?php echo e($attributes); ?> type="<?php echo e($type); ?>" class="btn btn-<?php echo e($color); ?> px-4 <?php if($icon): ?> d-flex align-items-center gap-2 <?php endif; ?> <?php echo e($variable); ?> justify-content-center" >
    <?php if($icon): ?>
    <span class="material-symbols-outlined <?php if($size === 'sm'): ?> fs-5 <?php endif; ?>"><?php echo e($icon); ?></span>
    <?php endif; ?>
    <?php echo e($text); ?>

</button>
<?php else: ?>
<a href="<?php echo e($href); ?>" <?php echo e($attributes); ?> class="btn btn-<?php echo e($color); ?> px-4 d-flex align-items-center gap-2 <?php if($icon): ?> d-flex align-items-center gap-2 <?php endif; ?> <?php echo e($variable); ?> justify-content-center">
    <?php if($icon): ?>
    <span class="material-symbols-outlined <?php if($size === 'sm'): ?> fs-5 <?php endif; ?>"><?php echo e($icon); ?></span>
    <?php endif; ?>
    <?php echo e($text); ?>

</a>
<?php endif; ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/button.blade.php ENDPATH**/ ?>