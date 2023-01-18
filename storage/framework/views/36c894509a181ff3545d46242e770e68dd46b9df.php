
<?php $__env->startSection('title', 'Отгрузка №'.$demand['name']); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2">
    <a href="/dashboard/payment/record" class="text-muted">Отчёты</a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали отчёта</span>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex align-items-center gap-3 d-print-none">
    <?php if(isset($demand['state']['color'])): ?>
    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($demand['state']['color']).'','text' => ''.e($demand['state']['name']).'']); ?>
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
    <span class="d-flex align-items-center gap-1 text-secondary">
        <span class="material-symbols-outlined fs-5">calendar_month</span>
        <?php echo e($time::parse($demand['created'])->locale('ru')->translatedFormat('d F Y, H:i')); ?>

    </span>
</div>
<div class="card border-0 shadow-sm mt-4">
    <div 
        class="card-header border-0 rounded-bottom bg-white fw-bold cp d-flex align-items-center justify-content-between collapsed" 
        data-bs-toggle="collapse" 
        data-bs-target="#recipient"
    >
        <b>Получатель:</b> 
        <span class="material-symbols-outlined">expand_more</span>
    </div>
    <div class="collapse" id="recipient">
        <div class="card-body text-muted border-top border-muted">
            <p><b>Компания:</b> <?php echo e($demand['agent']['name']); ?></p>
            <hr />
            <p class="m-0"><b>Контактное лицо:</b> <?php echo e($demand['agent']['description']); ?></p>
            <p class="m-0"><b>E-mail:</b> <?php echo e($demand['agent']['email']); ?></p>
            <p class="m-0"><b>Tелефон:</b> <?php echo e($demand['agent']['phone']); ?></p>        
            <hr />

            <p><b>Юридический адрес:</b> <?php echo e($demand['agent']['legalAddress']); ?></p>
            <p><b>Фактический адрес:</b> <?php echo e($demand['agent']['actualAddress']); ?></p>
        </div>        
    </div>
</div>


<div class="card border-0 shadow-sm mt-4">
    <div 
        class="card-header border-0 rounded-bottom bg-white fw-bold cp d-flex align-items-center justify-content-between collapsed" 
        data-bs-toggle="collapse" 
        data-bs-target="#provider"
    >
        <b>Поставщик:</b> 
        <span class="material-symbols-outlined">expand_more</span>
    </div>
    <div class="collapse" id="provider">
        <div class="card-body text-muted border-top border-muted">
            <p class="m-0"><b>Компания:</b> <?php echo e($demand['organization']['name']); ?></p>
            <p class="m-0"><b>Юридический адрес:</b> <?php echo e($demand['organization']['legalAddress']); ?></p>
            <p class="m-0"><b>E-mail:</b> <?php echo $contact::getEmail('manager@prospekt-parts.com'); ?></p>
            <hr />
            <h5>РЕКВИЗИТЫ:</h5>
            <p class="m-0">
                <b>Банк:</b> 
                <?php echo e($demand['organizationAccount']['bankName']); ?>, 
                <?php echo e($demand['organizationAccount']['bankLocation']); ?>

            </p>
            <p class="m-0"><b>БИК:</b> <?php echo e($demand['organizationAccount']['bic']); ?></p>
            <p class="m-0"><b>Номер счёта:</b> <?php echo e($demand['organizationAccount']['accountNumber']); ?></p>
            <p class="m-0"><b>Кор.счёт:</b> <?php echo e($demand['organizationAccount']['correspondentAccount']); ?></p>
        </div>        
    </div>

</div>

<div class="card border-0 shadow-sm mt-4">
    <div class="card-header bg-white fw-bold">
        Позиции заказа: 
        <span class="badge bg-soft-danger text-danger rounded-circle ms-1">
            <?php echo e($demand['positions']['meta']['size']); ?>

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
            <?php $__currentLoopData = $demand['positions']['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <tr>
                <td class="border-0" colspan="4"></td>
                <td class="border-0 text-end fw-bold">Итого:</td>
                <td class="border-0 text-end pe-4 fw-bold"><?php echo $currency::summa($demand['sum']); ?></td>
            </tr>                  
            <tr>
                <td class="border-0" colspan="4"></td>
                <td class="border-0 text-end fw-bold">В том числе НДС 20%:</td>
                <td class="border-0 text-end pe-4 fw-bold"><?php echo $currency::summa($demand['vatSum']); ?></td>
            </tr>   
            <tr>
                <td class="border-0" colspan="4">
                    <?php if($demand['state']['name'] === 'Не оплачено'): ?>
                        <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','color' => 'dark','text' => 'Оплатить','icon' => 'credit_card']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','color' => 'light','text' => 'Отгрузка','icon' => 'credit_score']); ?>
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
                <td class="border-0 text-end fw-bold">Всего к оплате:</td>
                <td class="border-0 text-end pe-4 fw-bold"><?php echo $currency::summa($demand['sum']); ?></td>
            </tr>               
        </tbody>
    </table>

</div>

<pre><?php // var_dump($demand);?></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/demand.blade.php ENDPATH**/ ?>