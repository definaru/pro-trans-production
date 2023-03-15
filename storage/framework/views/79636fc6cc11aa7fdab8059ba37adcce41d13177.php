<?php
    error_reporting (E_ALL ^ E_NOTICE);
    $total = $order['positions']['meta']['size'];
?>


<?php $__env->startSection('title', 'Счет №'.$order['name']); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2">
    <a href="/dashboard/payment/orders" class="text-muted">Счета</a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали счёта</span>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(isset($order['state']['name'])): ?>
<?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($order['state']['color']).'','text' => ''.e($order['state']['name']).'']); ?>
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
<div class="row mt-2">
    <div class="col-lg-12 mb-5 mb-lg-0">
        <div class="card border-0 shadow-sm card-lg mb-5">
            <div class="card-body">
                <div class="row justify-content-lg-between">
                    <div class="col-sm order-2 order-sm-1 mb-3">
                        <div class="mb-2">
                            <img src="/img/color_logo.png" alt="Logo" style="width: 10rem" />
                        </div> 
                        <!-- <h1 class="h2 text-primary">Front Inc.</h1> -->
                    </div>
                    <div class="col-sm-auto order-1 order-sm-2 text-sm-end mb-3">
                        <div class="mb-3">
                            <h2>
                                <?php if(isset($order['customerOrder']['id'])): ?>
                                <abbr style="text-decoration: underline dotted">
                                    <a 
                                        href="/dashboard/payment/reports/<?php echo e($order['customerOrder']['id']); ?>" 
                                        class="text-decoration-none text-dark" 
                                        data-bs-toggle="tooltip" style="cursor: help"
                                        title="Перейти к заказу"
                                    >
                                        #<?php echo e($order['name']); ?>

                                    </a>                                    
                                </abbr>
                                <?php else: ?>
                                <abbr>#<?php echo e($order['name']); ?></abbr>
                                <?php endif; ?>
                            </h2>
                            ООО "ПРОСПЕКТ ТРАНС"
                        </div> 
                        <address class="row text-muted">
                            <div class="col-6"></div>  
                            <div class="col-6"><?php echo e(config('app.address')); ?></div>
                        </address>
                    </div>
                </div>

                <div class="row justify-content-md-between mb-3">
                    <div class="col-md">
                        <strong>Плательщик:</strong> 
                        <h5><?php echo e($order['agent']['name']); ?></h5>
                        <address class="row text-muted">
                            <div class="col-6">
                                <?php echo e($order['agent']['legalAddress']); ?>

                            </div>
                            <div class="col-6"></div>
                        </address>
                    </div> 
                    <div class="col-md text-md-end">
                        <dl class="row">
                            <dt class="col-sm-8">Дата счета:</dt> 
                            <dd class="col-sm-4"><?php echo e(date_format(date_create($order['created']), 'd/m/Y')); ?></dd>
                            
                        </dl> 
                        <dl class="row">
                            <dt class="col-sm-8">Срок оплаты:</dt> 
                            <dd class="col-sm-4">
                                <?php if(isset($order['paymentPlannedMoment'])): ?>
                                <?php echo e(date_format(date_create($order['paymentPlannedMoment']), 'd/m/Y')); ?>

                                <?php else: ?>
                                <?php echo e(date_format(date_create($order['moment']), 'd/m/Y')); ?>

                                <?php endif; ?>
                            </dd>
                            <!-- moment -->
                        </dl>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-borderless table-nowrap table-align-middle">
                        <thead class="thead-light">
                            <tr class="border-bottom border-light text-muted">
                                <th>#</th> 
                                <th>Наименование</th>
                                <th class="text-center">Кол-во</th> 
                                <!-- <th>Доступно</th>  -->
                                <th>НДС</th>
                                <th class="text-center">Скидка</th>
                                <th class="text-end">Цена</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order['positions']['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="border-bottom border-light">
                                <td><?php echo e($loop->iteration); ?></td> 
                                <th>
                                    <div>
                                        <span class="me-2"><?php echo e($invoice['assortment']['article']); ?></span>
                                        <span class="fw-light"><?php echo e($invoice['assortment']['name']); ?></span>
                                    </div>
                                </th>
                                <td class="text-center"><?php echo e($invoice['quantity']); ?> шт</td>
                                <td class="table-text-end"><?php echo e($invoice['vat']); ?>%</td>
                                <td class="text-center"><?php echo e($invoice['discount']); ?>%</td>
                                <td class="text-end fw-bold">
                                    <?php echo number_format(($invoice['price']) / 100, 2, '.', ' ') ?> ₽
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <hr class="my-4" /> 
                <div class="row justify-content-md-end mb-3">
                    <div class="col-md-4 col-lg-5">
                        <div class="mb-3 text-secondary">
                            <p>Если у вас есть какие-либо вопросы относительно этого счета, используйте следующую контактную информацию:</p>
                            <p><?php echo e($contact::format_phone(config('app.phone'))); ?><br />
                            <?php echo e(config('app.email')); ?></p>
                        </div> 
                    </div>
                    <div class="col-md-8 col-lg-7">
                        <dl class="row text-sm-end">
                            <dt class="col-sm-6 text-muted">Промежуточный итог:</dt> 
                            <dd class="col-sm-6">
                                <?php echo number_format(($order['sum']) / 100, 2, '.', ' ') ?> ₽
                            </dd> 
                            <dt class="col-sm-6 text-muted">Кол-во:</dt> 
                            <dd class="col-sm-6"><?php echo e($total); ?></dd> 
                            <dt class="col-sm-6 text-muted">НДС:</dt> 
                            <dd class="col-sm-6">
                                <?php echo number_format(($order['vatSum']) / 100, 2, '.', ' ') ?> ₽
                            </dd> 
                            <dt class="col-sm-6 text-muted">Итого:</dt> 
                            <dd class="col-sm-6 fw-bold">
                                <?php echo number_format(($order['sum']) / 100, 2, '.', ' ') ?> ₽
                            </dd>  
                        </dl>
                    </div>
                </div>
                Всего <?php echo e($total); ?> <?php echo e($decl::name($total)); ?>, 
                на сумму <?php echo $currency::rub(number_format(($order['sum']) / 100, 2, '.', '')); ?> 
                <hr />
                <p class="small mb-0">© 2021 <?php echo e(config('app.name')); ?>.</p>

            </div>
        </div>

        <div class="d-flex justify-content-end d-print-none gap-3">
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','size' => 'sm','color' => 'dark','href' => 'javascript:;','text' => 'Распечатать','icon' => 'print']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['onclick' => 'window.print(); return false;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>    
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','size' => 'sm','color' => 'danger','href' => '/dashboard/doc/'.e($id).'/'.e(time()).'.pdf','text' => 'Скачать в PDF','icon' => 'picture_as_pdf']); ?>
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
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/order.blade.php ENDPATH**/ ?>