
<?php $__env->startSection('title', 'Счета'); ?>

<?php $__env->startSection('content'); ?>
<h6 class="text-muted">Всего <?php echo e($decl::orders($model['count'])); ?></h6>
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card bg-white border-0 shadow-sm">
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <form>
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text bg-white border-end-0 border-light ps-2 pe-0">
                            <span class="material-symbols-outlined text-secondary fs-5">search</span>
                        </div> 
                        <input type="search" placeholder="Поиск счетов..." class="form-control border-light border-start-0" />
                    </div>
                </form>
                <div>...</div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover m-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="ps-3 text-muted"><small>#</small></td>
                            <th scope="col" class="text-muted"><small class="ms-3">№ Счёта</small></th>
                            <th scope="col" class="text-muted"><small>Контрагент</small></th>
                            <th scope="col" class="text-muted"><small>Сумма</small></th>
                            <th scope="col" class="text-muted"><small>Оплачено</small></th>
                            <th scope="col" class="text-muted"><small>Статус</small></th>
                            <th scope="col" style="width: 190px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $model['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="align-middle">
                            <td class="ps-3" style="vertical-align: middle">
                                <?php echo e($loop->iteration); ?>.
                            </td>
                            <td>
                                <a href="/dashboard/payment/order/<?php echo e($item['id']); ?>" class="ms-3 text-decoration-none fw-bold text-dark">
                                    #<?php echo e($item['name']); ?>

                                </a>
                            </td>
                            <td>
                                <?php echo e($item['agent']); ?>

                            </td>
                            <td>
                                <small>
                                    <?php echo $currency::summa($item['sum']); ?>

                                </small>
                            </td>
                            <td>
                                <small>
                                    <?php echo $currency::summa($item['payedSum']); ?>

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
                                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','size' => 'sm','color' => 'dark','href' => '/dashboard/doc/'.e($item['id']).'/'.e($item['name']).'.pdf','text' => 'Скачать в PDF','icon' => 'download']); ?>
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

            <pre><?php //var_dump($model);?></pre>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/accounts.blade.php ENDPATH**/ ?>