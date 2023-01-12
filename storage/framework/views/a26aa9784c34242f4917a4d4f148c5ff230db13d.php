
<?php $__env->startSection('title', 'Предзаказ №'.$pre['name']); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2">
    <a href="/dashboard/payment/preorders" class="text-muted">Предзаказы</a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали предзаказа</span>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center">
    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($pre['state']['color']).'','text' => ''.e($pre['state']['name']).'']); ?>
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
    <span class="d-flex align-items-center gap-2 ms-2 ms-sm-3 text-secondary">
        <span class="material-symbols-outlined">calendar_month</span> 
        <?php echo e($time::parse($pre['created'])->locale('ru')->translatedFormat('d F Y, H:i:s')); ?>

    </span>
</div>

<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm mt-4">
            <div class="card-header bg-white fw-bold">
                Позиции заказа: 
                <span class="badge bg-soft-danger text-danger rounded-circle ms-1">
                    <?php echo e($pre['positions']['meta']['size']); ?>

                </span>
            </div>
            <table class="table table-hover m-0">
                <thead class="bg-light">
                    <tr>
                        <th scope="col" class="text-muted ps-4">№</th>
                        <th scope="col" class="text-muted">Товары</th>
                        <th scope="col" class="text-muted text-center">Кол-во</th>
                        <th scope="col" class="text-muted">Ед.</th>
                        <th scope="col" class="text-muted text-end">Цена</th>
                        <th scope="col" class="text-muted text-end pe-4">Сумма</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $pre['positions']['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="align-middle cp" onclick="getStartLink(`/dashboard/product/details/<?php echo e($item['assortment']['id']); ?>`)">
                        <td class="ps-4"><?php echo e($loop->iteration); ?></td>
                        <td>
                            <small>
                                <b><?php echo e($item['assortment']['code']); ?></b>&#160;&#160;
                                <?php echo e($item['assortment']['name']); ?>                    
                            </small>
                        </td>
                        <td class="text-center"><?php echo e($item['quantity']); ?></td>
                        <td class="text-start">шт.</td>
                        <td class="text-end">
                            <small>
                            <?php echo number_format(($item['price']) / 100, 2, '.', ' ') ?> ₽
                            </small>
                        </td>
                        <td class="text-end pe-4">
                            <small>
                            <?php echo number_format(($item['price']*$item['quantity']) / 100, 2, '.', ' ') ?> ₽
                            </small>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    <tr style="font-size:13px">
                        <td class="border-0" colspan="4"></td>
                        <td class="border-0 text-end fw-bold">Итого:</td>
                        <td class="border-0 text-end pe-4 fw-bold"><?php echo $currency::summa($pre['sum']); ?></td>
                    </tr>                  
                    <tr style="font-size:13px">
                        <td class="border-0" colspan="4"></td>
                        <td class="border-0 text-end fw-bold">В том числе НДС 20%:</td>
                        <td class="border-0 text-end pe-4 fw-bold"><?php echo $currency::summa($pre['vatSum']); ?></td>
                    </tr>   
                    <tr style="font-size:13px">
                        <td class="border-0" colspan="4"></td>
                        <td class="border-0 text-end fw-bold">Всего к оплате:</td>
                        <td class="border-0 text-end pe-4 fw-bold"><?php echo $currency::summa($pre['sum']); ?></td>
                    </tr>               
                </tbody>
            </table>
        </div>
        <p class="d-flex gap-2 align-items-center mt-4">
            <span class="material-symbols-outlined text-muted">update</span> 
            <b>Запланированное время доставки:</b>  
            <?php echo e(isset($pre['deliveryPlannedMoment']) 
                ? $time::parse($pre['deliveryPlannedMoment'])->locale('ru')->translatedFormat('d F Y, H:i') : ''); ?>

        </p>
        <pre><?php // var_dump($pre);?></pre>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/preorder-detail.blade.php ENDPATH**/ ?>