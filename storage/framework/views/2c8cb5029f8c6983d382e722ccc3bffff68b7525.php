<?php $__env->startComponent('mail::message'); ?>

<?php if(! empty($greeting)): ?>
# <?php echo e($greeting); ?>

<?php else: ?>
    <?php if($level === 'error'): ?>
    # <?php echo app('translator')->get('Whoops!'); ?>
    <?php else: ?>
    # Здравствуйте.
    <?php endif; ?>
<?php endif; ?>





Вы получаете это письмо, потому что сделал запрос на сброс пароля, для вашей учетной записи.


<?php if(isset($actionText)): ?>
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
<?php $__env->startComponent('mail::button', ['url' => $actionUrl, 'color' => $color]); ?>
<?php echo e($actionText); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>





Эта ссылка сброса пароля истекает за 60 минут. 
Если вы не запросили сброс пароля, никаких дальнейших действий не требуется.


<?php if(! empty($salutation)): ?>
<?php echo e($salutation); ?>

<?php else: ?>
<small>
С уважением,<br>
<?php echo e(config('app.name')); ?>    
</small>
<?php endif; ?>


<?php if(isset($actionText)): ?>
<?php $__env->slot('subcopy'); ?>
<?php echo app('translator')->get(
    "Если у вас возникли проблемы с нажатием на кнопку \":actionText\", скопируйте и вставьте URL-адрес ниже\n".
    'в ваш веб-браузер:',
    [
        'actionText' => $actionText,
    ]
); ?> <span class="break-all">[<?php echo e($displayableActionUrl); ?>](<?php echo e($actionUrl); ?>)</span>
<?php $__env->endSlot(); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/vendor/notifications/email.blade.php ENDPATH**/ ?>