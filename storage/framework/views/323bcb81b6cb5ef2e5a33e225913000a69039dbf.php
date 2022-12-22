<div class="card border-0 rounded-bottom shadow border-top-0 rounded-0">
    <div class="d-flex justify-content-between align-items-center gap-2 card-header rounded-0 bg-light border-0">
        <div class="d-flex gap-2 align-items-center">
            <i class="material-symbols-outlined text-secondary"><?php echo e($icon); ?></i> 
            <span><?php echo $header; ?></span>                         
        </div>
        <?php if($verified): ?>
        <div class="d-flex gap-2 align-items-center">
            <span class="material-symbols-outlined text-success">verified</span>
            <small>Подтверждена <?php echo e($verified); ?></small>
        </div>
        <?php endif; ?>
    </div>
    <div class="card-body d-flex gap-3 flex-column" <?php echo e($attributes); ?>>
        <?php echo e($slot); ?>

    </div>
</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/card.blade.php ENDPATH**/ ?>