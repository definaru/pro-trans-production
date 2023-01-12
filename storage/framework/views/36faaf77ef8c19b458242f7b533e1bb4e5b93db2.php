
<?php $__env->startSection('title', 'Мои предзаказы'); ?>


<?php $__env->startSection('content'); ?>
<h6 class="text-muted">Всего <?php echo $decl::preorders($order['count']); ?></h6>
<?php if($order['rows'] !== null): ?>
<div class="row mt-4">
    <div class="col">
        <div class="card border-0 w-100 rounded shadow-sm">
            <div class="card-header border-0 bg-white">...</div>
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-white" style="font-size: 14px">
                        <tr class="bg-light">
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">#</div>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="text-muted text-decoration-none" 
                                    style="display: block"
                                >
                                    Название <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 120px;display: block;">
                                    Дата создания<span class="list-sort"></span>
                                </a>
                            </th>                            
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 90px;display: block;">
                                    Цена<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 90px;display: block;">
                                    НДС<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 90px;display: block;">
                                    Кол-во<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" data-sort="status" class="text-muted text-decoration-none" style="width: 90px;display: block;">
                                    Статус<span class="list-sort"></span>
                                </a>
                            </th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        <?php $__currentLoopData = $order['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="align-middle cp" onclick="getStartLink(`/dashboard/payment/preorder/<?php echo e($item['id']); ?>`)">
                            <td class="ps-3"><?php echo e($loop->iteration); ?></td>
                            <td>
                                <span class="fw-bold text-dark">
                                    #<?php echo e($item['name']); ?>

                                </span>
                            </td>
                            <td>
                                <small class="text-muted">
                                    <?php echo e($time::parse($item['created'])->locale('ru')->translatedFormat('d M. Y / H:i')); ?>

                                </small>
                            </td>                            
                            <td>
                                <small>
                                    <?php echo number_format(($item['sum']) / 100, 2, '.', ' ') ?> ₽
                                </small>
                            </td>
                            <td>
                                <small>
                                    <?php echo number_format(($item['vatSum']) / 100, 2, '.', ' ') ?> ₽
                                </small>
                            </td>
                            <td>
                                <?php echo $decl::positions($item['size']); ?>

                            </td>
                            <td>
                                <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($item['state']['color']).'','text' => ''.e($item['state']['name']).'']); ?>
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
                            </td>
                            <td>
                                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','href' => '/dashboard/payment/preorder/'.e($item['id']).'','size' => 'sm','icon' => 'arrow_right_alt','color' => 'secondary','text' => 'Подробнее']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>  
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<pre><?php //var_dump($order);?></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/preorders.blade.php ENDPATH**/ ?>