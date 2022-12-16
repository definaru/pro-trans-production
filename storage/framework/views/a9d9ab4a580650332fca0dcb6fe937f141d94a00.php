<?php
$classes = ($close === 'true') ? 'alert-dismissible' : '';
?>
<div class="alert alert-<?php echo e($type); ?> d-flex gap-2 align-items-center <?php echo e($classes); ?> fade show border-0">
    <span class="material-symbols-outlined text-<?php echo e($type); ?>">
        <?php switch($type):
            case ('info'): ?>
                info
                <?php break; ?>

            <?php case ('success'): ?>
                check_circle
                <?php break; ?>

            <?php case ('danger'): ?>
                gpp_maybe
                <?php break; ?>

            <?php case ('warning'): ?>
                warning
                <?php break; ?>

            <?php default: ?>
                sms_failed
        <?php endswitch; ?>
    </span>
    <div>
        <?php if($header): ?>
            <strong><?php echo e($header); ?></strong>
        <?php else: ?>
            <?php switch($type):
                case ('info'): ?>
                    <strong>Информация:</strong>
                    <?php break; ?>

                <?php case ('success'): ?>
                    <strong>Успешно!</strong>
                    <?php break; ?>

                <?php case ('danger'): ?>
                    <strong>Внимание!</strong>
                    <?php break; ?>

                <?php case ('warning'): ?>
                    <strong>Важно!</strong>
                    <?php break; ?>

                <?php default: ?>
                    <strong><?php echo e($header); ?></strong>
            <?php endswitch; ?>
        <?php endif; ?>
        <?php echo e($message); ?>

    </div>
    <?php if($close === 'true'): ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <?php endif; ?>
</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/alert.blade.php ENDPATH**/ ?>