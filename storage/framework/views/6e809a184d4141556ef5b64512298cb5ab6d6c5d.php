
<?php $__env->startSection('title', 'Договоры'); ?>

<?php $__env->startSection('content'); ?>
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
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="d-block text-muted text-decoration-none" 
                                    style="width: 210px;"
                                >
                                    Ф.И.О. Контрагента &#160;<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="d-block text-muted text-decoration-none" 
                                    style="width: 70px;"
                                >
                                    ИНН &#160;<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="d-block text-muted text-decoration-none" 
                                    style="width: 210px;"
                                >
                                    Компания &#160;<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="d-block text-muted text-decoration-none" 
                                    style="width: 140px;"
                                >
                                    Статус договора &#160;<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="d-block text-muted text-decoration-none" 
                                    style="width: 127px"
                                >
                                    Дата договора &#160;<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="d-block text-muted text-decoration-none" 
                                    style="width: 148px"
                                >
                                    Телефон &#160;<span class="list-sort"></span>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="ms-2"><?php echo e($loop->iteration); ?></div>
                            </td>
                            <td>
                                <a href="../admin/contract/<?php echo e($item['uuid']); ?>" class="text-dark"><?php echo e($item['name']); ?></a>
                            </td>
                            <td>
                                <div><?php echo e($item['inn']); ?></div>
                            </td>
                            <td>
                                <strong><?php echo e($item['company']); ?></strong>
                            </td>
                            <td>
                                <?php if($item['id_card'] === 'z' || $item['id_card'] === 0): ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '40931','text' => 'На рассмотрении']); ?>
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
                                <?php elseif($item['id_card'] === 2): ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => 'danger','text' => 'Заблокирован']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => 'Активирован']); ?>
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
                            <td>
                                <small>
                                    <?php echo e(date('d/m/Y, H:i', strtotime($item['created_at']))); ?>

                                </small>
                            </td>
                            <td>
                                <?php echo $contact::getPhone($item['phone'], ['text-dark', 'text-decoration-none']); ?>

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
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/contracts.blade.php ENDPATH**/ ?>