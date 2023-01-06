
<?php $__env->startSection('title', 'Счета'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-2">
    <div class="col-md-12">
        <div class="card bg-white border-0 shadow-sm">
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <form>
                    <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend input-group-text bg-white border-end-0 border-light ps-2 pe-0">
                            <span class="material-symbols-outlined text-secondary fs-5">search</span>
                        </div> 
                        <input id="datatableSearch" type="search" placeholder="Поиск счетов..." class="form-control border-light border-start-0" />
                    </div>
                </form>
                <div class="dropdown">
                    <button id="showHideDropdown" data-bs-toggle="dropdown" class="d-flex align-items-center gap-1 btn btn-white btn-sm w-100">
                        <span class="material-symbols-outlined text-secondary fs-6">table</span>
                        Столбцы
                        <span class="badge bg-soft-dark text-dark rounded-circle ms-1">7</span>
                    </button> 
                    <div aria-labelledby="showHideDropdown" class="dropdown-menu dropdown-menu-end dropdown-card" style="width: 15rem">
                        <div class="card card-sm border-0">
                            <div class="card-body py-1 pe-0">
                                <div class="d-grid gap-2 ms-2">
                                    <label for="toggleColumn_order" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Заказ</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_order" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_date" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Дата</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_date" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_payment_status" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Статус платежа</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_payment_status" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_fulfillment_status" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span>Статус выполнения</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_fulfillment_status" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_payment_method" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Способ оплаты</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_payment_method" checked="checked" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_total" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Всего</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_total" class="form-check-input" />
                                        </span>
                                    </label> 
                                    <label for="toggleColumn_actions" class="row form-check form-switch">
                                        <span class="col-8 col-sm-9 ms-0">
                                            <span class="me-2">Действия</span>
                                        </span> 
                                        <span class="col-4 col-sm-3 text-end">
                                            <input type="checkbox" id="toggleColumn_actions" checked="checked" class="form-check-input" />
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover m-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="text-muted"><div class="ms-3">№</div></th>
                            <th scope="col" class="text-muted"><small>Дата заказа</small></th>
                            <!-- <th scope="col" class="text-muted"><small>Контрагент</small></th> -->
                            <th scope="col" class="text-muted"><small>Сумма</small></th>
                            <th scope="col" class="text-muted"><small>План. дата оплаты</small></th>
                            <th scope="col" class="text-muted"><small>Оплачено</small></th>
                            <th scope="col" class="text-muted"><small>Статус</small></th>
                            <th scope="col" style="width: 190px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ord): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="align-middle">
                            <td>
                                <a href="order/<?php echo e($ord['id']); ?>" class="ms-3 text-decoration-none fw-bold text-dark">
                                    #<?php echo e($ord['name']); ?>

                                </a>
                            </th>
                            <td>
                                <small class="text-secondary">
                                <?php echo e($time::parse($ord['created'])->locale('ru')->translatedFormat('d F Y, H:i')); ?>

                                </small>
                            </td>
                            <!-- <td><small></small></td> -->
                            <td>
                                <small>
                                    <?php echo $currency::summa($ord['sum']); ?>

                                </small>
                            </td>
                            <td>
                                <small class="text-secondary">
                                <?php if($ord['paymentPlannedMoment'] === 'Нет данных'): ?>
                                    <?php echo e($time::parse($ord['moment'])->locale('ru')->translatedFormat('d F Y')); ?>

                                <?php else: ?>
                                    <?php echo e($time::parse($ord['paymentPlannedMoment'])->locale('ru')->translatedFormat('d F Y')); ?>

                                <?php endif; ?>
                                </small>
                            </td>
                            <td>
                                <?php echo number_format(($ord['payedSum']) / 100, 2, '.', ' ') ?> ₽
                            </td>
                            <td>
                                <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($ord['state']['color']).'','text' => ''.e($ord['state']['name']).'']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','size' => 'sm','color' => 'dark','href' => '/dashboard/doc/'.e($ord['id']).'/'.e(time()).'.pdf','text' => 'Скачать в PDF','icon' => 'download']); ?>
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
            <div class="card-footer bg-white border-0">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-sm mb-2 mb-sm-0">
                        <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                            <span class="text-secondary me-2">Показано:</span> 
                            <?php echo e($orders['count']); ?>

                            <!-- <div class="tom-select-custom">
                                <select id="datatableEntries" autocomplete="off" class="border-0 form-select text-secondary w-auto">
                                    <option value="12" selected="selected">12</option> 
                                    <option value="14">14</option> 
                                    <option value="16">16</option> 
                                    <option value="18">18</option>
                                </select>
                            </div>  -->
                            <span class="text-secondary mx-2">из</span> 
                            <span class="text-secondary"><?php echo e($orders['count']); ?></span>
                        </div>
                    </div> 
                    <div class="col-sm-auto">
                        <div class="d-flex justify-content-center justify-content-sm-end">
                            <!-- <nav id="datatablePagination">
                                <div id="datatable_paginate">
                                    <ul id="datatable_pagination" class="pagination m-0">
                                        <li class="paginate_item page-item disabled">
                                            <a id="datatable_previous" class="paginate_button previous page-link">
                                                <span aria-hidden="true">Пред.</span>
                                            </a>
                                        </li> 
                                        <li class="paginate_item page-item active">
                                            <a class="paginate_button page-link">1</a>
                                        </li> 
                                        <li class="paginate_item page-item">
                                            <a class="paginate_button page-link">2</a>
                                        </li> 
                                        <li class="paginate_item page-item">
                                            <a id="datatable_next" class="paginate_button next page-link">
                                                <span aria-hidden="true">След.</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/orders.blade.php ENDPATH**/ ?>