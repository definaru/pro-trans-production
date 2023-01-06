
<?php $__env->startSection('title', 'Отчёты'); ?>

<?php $__env->startSection('content'); ?>
<h6 class="text-muted">Всего <?php echo e($demand['count']); ?> <?php echo e($decl::demand($demand['count'])); ?></h6>
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card bg-white border-0 shadow-sm">
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <div>...</div>
                <div>...</div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover m-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="text-muted ps-4">#</th>
                            <th scope="col" class="text-muted">Заказ</th>
                            <th scope="col" class="text-muted">Кол-во</th>
                            <th scope="col" class="text-muted">Дата</th>
                            <th scope="col" class="text-muted">Сумма</th>
                            <th scope="col" class="text-muted">Оплачено</th>
                            <th scope="col" class="text-muted">Статус</th>
                            <th scope="col" class="text-muted"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $demand['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="align-middle">
                            <td class="ps-4"><?php echo e($loop->iteration); ?></td>
                            <td>
                                <a href="record/<?php echo e($item['id']); ?>" class="fw-bold text-dark text-decoration-none">
                                    #<?php echo e($item['name']); ?>

                                </a>
                            </td>
                            <td>
                                <small class="text-muted">
                                    <?php echo $decl::positions($item['positions']); ?>

                                </small>
                            </td>
                            <td>
                                <small class="text-muted">
                                    <?php echo e($time::parse($item['created'])->locale('ru')->translatedFormat('d M. Y / H:i')); ?>

                                </small>
                            </td>
                            <td>
                                <?php echo $currency::summa($item['sum']); ?>

                            </td>
                            <td>

                                <small class="<?php if($item['payedSum'] == 0): ?> text-danger <?php endif; ?>">
                                    <?php echo number_format(($item['payedSum']) / 100, 2, '.', ' ') ?> ₽
                                </small>
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
                                <?php if($item['state']['name'] === 'Не оплачено'): ?>
                                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['size' => 'sm','type' => 'button','color' => 'dark','text' => 'Оплатить','icon' => 'credit_card']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-bs-toggle' => 'modal','data-bs-target' => '#manager']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['size' => 'sm','type' => 'button','color' => 'light','text' => 'Отгрузка','icon' => 'credit_score']); ?>
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
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <pre><?php //var_dump($demand);?></pre>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/record.blade.php ENDPATH**/ ?>