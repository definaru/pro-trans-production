
<?php $__env->startSection('title', 'Ошибка'); ?>
<?php echo $__env->make('layout/error', [
    'title' => "Ошибка",
    'errorCode' => '500',
    'text' => 'Сервер не отвечает',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/errors/500.blade.php ENDPATH**/ ?>