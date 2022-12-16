<?php if($color === '40931'): ?>
<span class="badge bg-soft-info text-info d-print-none">
    <span class="legend-indicator bg-info"></span>
    <?php echo e($text); ?>

</span>
<?php elseif($color === '34617'): ?>
<span class="badge bg-soft-success text-success d-print-none">
    <span class="legend-indicator bg-success"></span>
    <?php echo e($text); ?>

</span>
<?php else: ?>
<span class="badge d-print-none" style="background: #<?=dechex($color);?>30; color: #<?=dechex($color);?>">
    <span class="legend-indicator" style="background: #<?=dechex($color);?>"></span>
    <?php echo e($text); ?>

</span>
<?php endif; ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/badge.blade.php ENDPATH**/ ?>