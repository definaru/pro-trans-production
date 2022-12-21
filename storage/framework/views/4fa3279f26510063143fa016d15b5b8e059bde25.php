
<?php if($link === 'divider'): ?>
<li class="dropdown-divider"></li>
<?php else: ?>
<li>
    <a href="<?php echo e($href); ?>" class="dropdown-item d-flex align-items-center gap-2" <?php if($target === 'target'): ?> target="_blank" <?php endif; ?>>
        <?php if($icon !== ''): ?>
        <span class="material-symbols-outlined fs-6 text-secondary"><?php echo e($icon); ?></span> 
        <?php endif; ?>
        <?php echo e($link); ?>

    </a>    
</li>
<?php endif; ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/dropdown.blade.php ENDPATH**/ ?>