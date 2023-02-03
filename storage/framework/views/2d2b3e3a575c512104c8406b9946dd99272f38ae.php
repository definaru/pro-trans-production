
<?php $__env->startSection('title', 'Бухгалтерия'); ?>

<?php $__env->startSection('content'); ?>
    <h6 class="text-muted">Всего <?php echo e($decl::orders($receipt['count'])); ?></h6>
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-header bg-white fw-bold">
            Список счётов:
        </div>
        <div class="table-responsive">
        <table class="table table-hover m-0">
            <thead class="bg-light">
                <tr>
                    <th scope="col" class="text-muted ps-4">№</th>
                    <th scope="col" class="text-muted">
                        <small>Контрагент</small> 
                    </th>
                    <th scope="col" class="text-muted">
                        <small style="display: block;width: 120px">Сумма Платежа</small> 
                    </th>
                    <th scope="col" class="text-muted">
                        <small style="display: block;width: 163px">Сумма Взаиморасчетов</small> 
                    </th>
                    <th scope="col" class="text-muted">
                        <small style="display: block;width: 120px">Сумма НДС</small> 
                    </th>                    
                    <th scope="col" class="text-muted">
                        <small style="display: block;width: 100px">НДС</small> 
                    </th>
                    <th scope="col" class="text-muted text-center">
                        <small>Возврат</small> 
                    </th>
                    <th scope="col" class="text-muted pe-4">
                        <small>Способ Погашения Задолженности</small>
                    </th>                    
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $receipt['value']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="align-middle cp" onclick="getStartLink(`/dashboard/admin/accounting/details/<?php echo e($item['id']); ?>`)">
                <td class="ps-4"><?php echo e($loop->iteration); ?>)</td>
                <td><?php echo e($item['org']['name']); ?></td>
                <td><?php echo $currency::summa($item['pay']); ?></td>
                <td><?php echo $currency::summa($item['return_pay']); ?></td>
                <td><?php echo $currency::summa($item['sum_tax']); ?></td>
                <td>
                    <small class="text-muted">
                        <?php echo e($contact::format_nds($item['tax'])); ?>

                    </small>
                </td>
                <td class="text-center"><?php echo $currency::summa($item['return_sum']); ?></td>
                <td class="text-start">
                    <?php if($item['status'] === ''): ?>
                        <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => 'danger','text' => 'нет данных']); ?>
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
                    <?php elseif($item['status'] == 'Автоматически'): ?>
                        <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '40931','text' => ''.e($contact::format_spz($item['status'])).'']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => ''.e($contact::format_spz($item['status'])).'']); ?>
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
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>
    <pre><?php // var_dump($receipt);?></pre>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/accounting.blade.php ENDPATH**/ ?>