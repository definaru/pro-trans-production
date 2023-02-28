
<?php $__env->startSection('title', 'Права и роли'); ?>

<?php $__env->startSection('content'); ?>
<h6 class="text-muted">Права выдаются администратором при выборе пользователя.</h6>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-light" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">#</div>
                            </th>
                            <th>
                                ИНН&#160;<span class="list-sort"></span>
                            </th>
                            <th>
                                Компания&#160;<span class="list-sort"></span>
                            </th>
                            <th>
                                Роль&#160;<span class="list-sort"></span>
                            </th>
                            <th>
                                E-mail&#160;<span class="list-sort"></span>
                            </th>
                            <th>
                                Дата создания&#160;<span class="list-sort"></span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="ms-2"><?php echo e($loop->iteration); ?></div>
                            </td>
                            <td>
                                <a href="../admin/access/<?php echo e($role['uuid']); ?>" class="text-dark text-decoration-none">
                                    <?php echo e($role['inn']); ?>

                                </a>
                            </td>
                            <td>
                                <strong><?php echo e($role['company']); ?></strong> 
                            </td>
                            <td>
                                <?php if($role['slug'] === 'admin'): ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => 'Администратор']); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94)): ?>
<?php $component = $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94; ?>
<?php unset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '40931','text' => 'Покупатель']); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94)): ?>
<?php $component = $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94; ?>
<?php unset($__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94); ?>
<?php endif; ?>  
                                <?php endif; ?>
                            </td>
                            <td onclick="alert('E-mail письма пока отправить нельзя')">
                                <?php echo $contact::getEmail($role['email'], ['text-dark']); ?>

                            </td> 
                            <td>
                                <small>
                                    <?php echo e(date('d F Y, H:i', strtotime($role['created_at']))); ?>

                                </small>
                            </td>                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/access.blade.php ENDPATH**/ ?>