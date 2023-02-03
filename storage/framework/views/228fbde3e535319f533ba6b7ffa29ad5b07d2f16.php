
<?php $__env->startSection('title', 'Документооборот'); ?>

<?php $__env->startSection('content'); ?>
<pre><?php //var_dump($list);?></pre>
<select name="template" class="form-control">
    <option value="" selected disabled>Выберите шаблон</option>
    <?php $__currentLoopData = $list['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/doc.blade.php ENDPATH**/ ?>