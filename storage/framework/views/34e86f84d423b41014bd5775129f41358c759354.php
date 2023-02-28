
<?php $__env->startSection('title', 'Номер ГТД'); ?>
<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    <a href="/dashboard/admin/nomenclature" class="text-muted">
        Номенклатура
    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">ГТД <?php echo e($model['Code']); ?></span>    
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>  
<pre><?php var_dump($model);?></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/gtd.blade.php ENDPATH**/ ?>