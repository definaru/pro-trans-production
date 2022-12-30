<?php
    $company = $user->customer->company;
?>
<?php if($company): ?>
    <?php if(iconv_strlen($company) > 20): ?>
    <div 
        style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 220px" 
        title="<?php echo e($company); ?>" data-bs-toggle="tooltip"
    >
        <?php echo e($company); ?>

    </div>   
    <?php else: ?>
    <div><?php echo e($company); ?></div> 
    <?php endif; ?>
<?php else: ?>
    <div>Нет данных</div>
<?php endif; ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/main/company/name.blade.php ENDPATH**/ ?>