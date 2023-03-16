
<?php $__env->startSection('title', 'Заказы'); ?>

<?php $__env->startSection('content'); ?>
<h6 class="text-muted">Всего <?php echo e($decl::custom($model['count'])); ?></h6>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <form>
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text bg-white border-end-0 border-light ps-2 pe-0">
                            <span class="material-symbols-outlined text-secondary fs-5">search</span>
                        </div> 
                        <input id="datatableSearch" type="search" placeholder="Поиск заказов..." class="form-control border-light border-start-0" />
                    </div>
                </form>
                <div>...</div>
            </div>
            <div class="table-responsive rounded-top">
                <table class="table table-hover m-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-3 text-muted" style="width: 24px;"><label>#</label></th>
                            <th class="text-muted" style="width: 70px;">
                                <small>Заказ</small>
                            </th>
                            <th class="text-muted">
                                <small class="d-block" style="width: 210px">
                                    Контрагент
                                </small>
                            </th>
                            <th class="text-muted" style="width: 124px"><small>Статус заказа</small></th>
                            <th class="text-muted" style="width: 124px;"><small>Сумма платежа</small></th>
                            <th class="text-muted">
                                <small class="d-block" style="width: 140px">
                                    Дата заказа
                                </small>
                            </th>                            
                            <th class="text-secondary text-center" style="width: 119px;"><small>Действия</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $model['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="align-middle">
                            <td class="ps-3" style="vertical-align: middle"><?php echo e($loop->iteration); ?>.</td>
                            <td>
                                <a href="/dashboard/payment/reports/<?php echo e($item['id']); ?>" class="text-decoration-none fw-bold text-dark">
                                    #<?php echo e($item['name']); ?>

                                </a>
                            </td>
                            <td>
                                <?php echo e($item['agent']['name']); ?>

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
                                <small>
                                    <?php echo $currency::summa($item['sum']); ?>

                                </small>
                            </td>
                            <td>
                                <small class="text-secondary">
                                <?php echo e($time::parse($item['created'])->locale('ru')->translatedFormat('d F Y, H:i')); ?>

                                </small>
                            </td>                            
                            <td>
                                <div class="d-flex justify-content-end gap-1">
                                    <a href="/dashboard/payment/reports/<?php echo e($item['id']); ?>" class="btn btn-sm material-symbols-outlined">visibility</a>
                                    <a href="#" class="btn btn-sm material-symbols-outlined">edit_note</a>
                                    <a href="#" class="btn btn-sm material-symbols-outlined text-danger">delete</a>
                                </div>
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
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/orders.blade.php ENDPATH**/ ?>