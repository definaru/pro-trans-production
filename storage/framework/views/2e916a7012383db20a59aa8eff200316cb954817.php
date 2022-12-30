

<?php $__env->startSection('title', 'Контакты'); ?>

<?php $__env->startSection('content'); ?>
<hr />
<div class="mt-5">
    <h6 class="text-secondary">Компания</h6> 
    
    <h3 class="text-dark mb-4"><?php echo e(config('app.name')); ?></h3>
    <div class="row">
        <div class="col-12 col-md-4">
            <p><strong>ИНН:</strong> 9715366031</p>
            <p><strong>ОГРН:</strong> 1197746624107</p>
            <p><strong>КПП:</strong> 771501001</p>            
        </div>
        <div class="col-12 col-md-8">
            <p><strong>E-mail: </strong> <?php echo $contact::getEmail(config('app.email'), ['text-muted', 'text-decoration-none']); ?></p>
            <p><strong>Телефон:</strong> <?php echo $contact::getPhone(config('app.phone'), ['text-muted', 'text-decoration-none']); ?></p>
            <p><strong>Юридический адрес:</strong> <?php echo e(config('app.address')); ?></p>
        </div>
    </div>


    <br />
    <div class="bg-light border-top px-2">
        <p class="mb-1"><strong>Адрес доставки:</strong> 141006, г.Мытищи, Московская область, 4536-й проезд, стр. 10</p>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acb78d2e01e4906db46d1cb905adc20776626bb0d53f91909978164445bf6ffa7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>

    <div class="d-block mt-3">
        <a href="/doc" class="btn btn-dark px-4">Юридическая информация</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/contact.blade.php ENDPATH**/ ?>