

<?php $__env->startSection('title', isset($data['name']) ? 'Заказ #'.$data['name'] : 'Заказ не найден'); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2">
    <a href="/dashboard/payment/reports" class="text-muted">Заказы</a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали заказа</span>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(isset($data['errors'])): ?>
<?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => 'ID: '.e($order).' не найден. Либо заказ был удалён.']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php else: ?>
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <!-- <span class="badge bg-soft-success text-success">
                <span class="legend-indicator bg-success"></span>
                Оплачено 
            </span>  -->
            <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($data['state']['color']).'','text' => ''.e($data['state']['name']).'']); ?>
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
                <!-- Сен. 17, 2020, 5:48 -->
                <?php echo e($time::parse($data['created'])->locale('ru')->translatedFormat('d F Y, H:i:s')); ?>

            </span>
        </div>
        <div class="d-flex gap-3 d-print-none">
            <a 
                href="javascript:;" 
                onclick="window.print(); return false;" 
                class="d-flex align-items-center gap-2 text-body text-decoration-none"
            >
                <span class="material-symbols-outlined text-secondary">print</span>
                Распечатать
            </a> 
            <?php if(isset($data['invoicesOut'])): ?>
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','size' => 'sm','color' => 'danger','href' => '/dashboard/payment/order/'.e($data['invoicesOut'][0]['id']).'','text' => 'Запросить счёт','icon' => 'credit_score']); ?>
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
            
            <div class="dropdown">
                <a 
                    href="javascript:;" 
                    id="moreOptionsDropdown" 
                    data-bs-toggle="dropdown" 
                    class="d-flex align-items-center gap-1 text-body text-decoration-none"
                >
                    <span class="material-symbols-outlined text-secondary">more_vert</span>
                </a> 
                <div aria-labelledby="moreOptionsDropdown" class="dropdown-menu mt-1" style="">
                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                        <span class="material-symbols-outlined fs-6 text-secondary">difference</span>
                        Дублировать
                    </a> 
                    <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                        <span class="material-symbols-outlined fs-6 text-secondary">block</span>
                        Отменить заказ
                    </a> 
                    <!-- <a href="#" class="d-flex align-items-center gap-2 dropdown-item">
                        <span class="material-symbols-outlined fs-6 text-secondary">inventory_2</span>
                        В архив
                    </a> -->
                </div>
            </div>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="mb-3 mb-lg-0" :class="[close ? 'col-lg-12' : 'col-lg-8']">
            <div class="card border-0 shadow-sm mb-3 mb-lg-5">
                <div class="card-header border-light bg-white d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold mb-0 mt-1">
                        Информация по заказу 
                        <span class="badge bg-soft-danger text-danger rounded-circle ms-1">
                        <?php echo e($data['positions']['meta']['size']); ?>

                        </span>
                    </h5>
                    <span class="material-symbols-outlined cp" @click="close = false" v-if="close">open_in_new</span>
                    <!-- <a href="javascript:;" class="text-secondary"><span class="material-symbols-outlined fs-6">edit</span></a> -->
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $data['positions']['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="avatar avatar-xl">
                                <img src="/img/no_photo.jpg" alt="..." class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <div class="row">
                                <div class="col-md-5 mb-3 mb-md-0">
                                    <a href="/dashboard/product/details/<?php echo e($product['assortment']['id']); ?>" class="h6 text-dark m-0 d-block text-decoration-none">
                                        <?php echo e($product['assortment']['name']); ?>

                                    </a> 
                                    <div class="fs-6 text-secondary">
                                        <span class="fw-semibold">Артикул:</span> 
                                        <span>
                                            <?php echo e($product['assortment']['article']); ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-2 px-0 align-self-center">
                                    <small>
                                        <?php echo number_format(($product['price']) / 100, 2, '.', ' ') ?> ₽
                                    </small>
                                </div>
                                <div class="col align-self-center">
                                    <h6><?php echo e($product['quantity']); ?> шт</h6>
                                </div>
                                <div class="col-lg-3 ps-0 align-self-center text-end">
                                    <h6 class="m-0 pe-2">
                                        <?php echo number_format(($product['price']*$product['quantity']) / 100, 2, '.', ' ') ?> ₽
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="border-muted my-2" />
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="row justify-content-md-end">
                        <div class="col-lg-9">
                            <dl class="row text-sm-end m-0">
                                <dt class="col-sm-6 text-muted fw-light">Промежуточный итог:</dt>
                                <dd class="col-sm-6 fw-bold">
                                    <?php echo number_format(($data['sum']) / 100, 2, '.', ' ') ?> ₽
                                </dd>
                                <dt class="col-sm-6 text-muted fw-light">Выплаченная сумма:</dt>
                                <dd class="col-sm-6 fw-bold">
                                    <?php echo number_format(($data['payedSum']) / 100, 2, '.', ' ') ?> ₽
                                </dd>                            
                                <!-- <dt class="col-sm-6 text-muted fw-light">Стоимость доставки:</dt>
                                <dd class="col-sm-6 fw-bold">0.00 ₽</dd> -->
                                <dt class="col-sm-6 text-muted fw-light">Налог:</dt>
                                <dd class="col-sm-6 fw-bold">
                                    <?php echo number_format(($data['vatSum']) / 100, 2, '.', ' ') ?> ₽
                                </dd>
                                <dt class="col-sm-6 text-muted fw-light">Итого:</dt>
                                <dd class="col-sm-6 fw-bold">
                                    <?php echo number_format(($data['sum']) / 100, 2, '.', ' ') ?> ₽
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($data['deliveryPlannedMoment'])): ?>
            <p>
                <small class="d-flex align-items-center gap-2">
                    <span class="material-symbols-outlined fs-5 text-secondary">info</span> 
                    Запланированное время доставки: 
                    <?php echo e($time::parse($data['deliveryPlannedMoment'])->locale('ru')->translatedFormat('d F Y, H:i')); ?>

                </small>
            </p>
            <?php endif; ?>
        </div>
        <div class="col-lg-4 d-print-none" :class="[close ? 'd-none' : '']">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-light bg-white d-flex align-items-center justify-content-between">
                    <h5 class="fw-bold mb-0 mt-1">Покупатель</h5> 
                    <span class="material-symbols-outlined cp" @click="close = true">close</span>
                </div>
                <div class="card-body px-0 pb-2">
                    <ul class="list-group list-group-flush list-group-no-gutters">
                        <li class="list-group-item border-light">
                            <a href="/dashboard/settings/profile" class="d-flex align-items-center text-decoration-none">
                                <div>
                                    <span class="material-symbols-outlined bg-soft-danger text-danger icon-card">apartment</span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span class="text-body text-inherit">
                                        <?php echo e($data['agent']['name']); ?>

                                    </span>
                                </div>
                                <div class="flex-grow-1 text-end"><i class="bi-chevron-right text-body"></i></div>
                            </a>
                        </li>
                        <!-- <li class="list-group-item">
                            <a href="./ecommerce-customer-details.html" class="d-flex align-items-center text-muted text-decoration-none">
                                <div style="
                                    height: 20px;
                                    "><span class="material-symbols-outlined fs-5 text-secondary">shopping_cart_checkout</span></div>
                                <div class="flex-grow-1 ms-3"><span class="text-body text-inherit">7 заказов</span></div>
                                <div class="d-flex align-items-center text-end"><span class="material-symbols-outlined text-secondary">keyboard_arrow_right</span></div>
                            </a>
                        </li> -->
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold">Контактная информация</h6>
                                <!-- <a href="javascript:;" class="text-secondary"><span class="material-symbols-outlined fs-6">edit</span></a> -->
                            </div>
                            <ul class="list-unstyled list-py-2 text-body">
                                <li class="d-flex gap-2 align-items-center">
                                    <span class="material-symbols-outlined fs-6 text-secondary">mail</span>
                                    <?php echo e($data['agent']['email']); ?>

                                </li>
                                <li class="d-flex gap-2 align-items-center">
                                    <span class="material-symbols-outlined fs-6 text-secondary">phone_iphone</span>
                                    <?php echo e($data['agent']['phone']); ?>

                                </li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold">Фактический адрес</h6>
                                <!-- <a href="javascript:;" class="text-secondary"><span class="material-symbols-outlined fs-6">edit</span></a> -->
                            </div>
                            <small class="d-block text-muted">
                            <?php echo e($data['agent']['actualAddress']); ?>

                            <img src="/img/flags/russia_flag.svg" alt="Great Britain Flag" class="border rounded-circle avatar avatar-xss avatar-circle ms-1"></small>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="fw-bold">Адрес для выставления счета</h6>
                                <!-- <a href="javascript:;" class="link"><span class="material-symbols-outlined">edit</span></a> -->
                            </div>
                            <small class="d-block text-muted">
                            <?php echo e($data['agent']['legalAddress']); ?>

                            <img src="/img/flags/russia_flag.svg" alt="Great Britain Flag" class="border rounded-circle avatar avatar-xss avatar-circle ms-1"></small> 
                            <div class="mt-3 d-grid">
                                <!-- <h6 class="fw-bold mb-0">Mastercard</h6>
                                <span class="d-block text-body">
                                Номер карты: 
                                <span class="text-muted"><sub class="h5">**** **** ****</sub> 4291</span>
                                </span> -->
                                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','color' => 'dark','text' => 'связаться с менеджером','icon' => 'headset_mic']); ?>
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
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="manager" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content border-0" novalidate @submit.prevent="SendManager('<?php echo e($order); ?>')" v-if="!send">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5">Обратная связь</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div class="mt-2">
                        <textarea 
                            rows="5" 
                            class="form-control" 
                            :class="[error.message && message === '' ? 'is-invalid' : '']"
                            v-model="message" 
                            placeholder="Опишите здесь ваш вопрос..."
                        >
                        </textarea>
                        <div class="invalid-feedback d-block m-0" v-if="error.message && message === ''">
                            Пожалуйста, напишите ваш вопрос.
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <div class="btn btn-outline-light text-dark px-3" data-bs-dismiss="modal">Отмена</div>
                    <button type="submit" class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center" v-if="!loading">
                        <span class="material-symbols-outlined spin">autorenew</span>
                        Отправляю...
                    </button>
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['color' => 'dark','icon' => 'forward','type' => 'submit','text' => 'Отправить менеджеру']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['v-else' => true,'v-on:click' => 'Sender']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>
                </div>
            </form>
            <div class="modal-content border-0" v-else>
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5">Обратная связь</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => 'Ваша заявка принята.','close' => 'false']); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/reports-detail.blade.php ENDPATH**/ ?>