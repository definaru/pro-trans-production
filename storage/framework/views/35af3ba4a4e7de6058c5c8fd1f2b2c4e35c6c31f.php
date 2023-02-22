
<?php $__env->startSection('title', 'ОКВЭД'); ?>
<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    <a href="/dashboard/admin/users" class="text-muted">
        Пользователи
    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted"><?php echo e($okved); ?></span>    
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>  
<h6 class="text-muted">Информация о деятельности компании</h6>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <?php if($data !== NULL): ?>
                <b><?php echo e($data["suggestions"][0]["data"]["idx"]); ?></b> - <?php echo e($data["suggestions"][0]["data"]["name"]); ?>

                <?php else: ?>
                <p class="text-danger">Нет данных, или номер ОКВЭД указан не верно</p> 
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/okved.blade.php ENDPATH**/ ?>