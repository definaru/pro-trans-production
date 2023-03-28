<?php if(session('data')): ?>
    <h2>Здравствуйте, <?php echo e(session('data')['name']); ?></h2>
    <pre><?php //var_dump(session('data'));?></pre>
<?php endif; ?>
<?php if(session('order')): ?>
    <h4>Ваш заказ №<?php echo e(session('order')); ?></h4>
    <p>На ваш e-mail: <?php echo e(session('data')['email']); ?> пришёл 4-х значный пароль подтверждения.</p>
    <input type="text" name="" value="<?php echo e(session('data')['code']); ?>" />
    <?php if(session('data')['actualAddress'] === '...'): ?>
        <p>Адрес доставки не указан.</p>
    <?php else: ?>
        <p><strong>Адрес доставки:</strong> <?php echo e(session('data')['actualAddress']); ?></p>
    <?php endif; ?>
<?php endif; ?>
<?php if(session('order')): ?>
    <p><?php echo e(session('id')); ?></p>
<?php endif; ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/order.blade.php ENDPATH**/ ?>