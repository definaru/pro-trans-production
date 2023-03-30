

<?php $__env->startSection('title', 'Информация по заказу'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-100 bg-primary" style="height: 170px">
    <div class="d-flex align-items-center justify-content-center h-100" style="background-color: #00000059">
        <h2 class="text-white pt-5 mb-0 mt-1">Информация по заказу</h2>
    </div>
</div>
<section class="bg-secondary-subtle pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if(session('error')): ?>
                    <strong class="text-danger"><?php echo e(session('error')); ?></strong>
                <?php endif; ?>

                <?php if(isset($order['errors'])): ?>
                <?php else: ?>
                <h4 class="fw-bold text">Ваш заказ №<?php echo e($order['name']); ?></h4>
                <p class="d-flex align-items-center gap-1">Дата создания заказа: 
                    <i class="text-muted d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined fs-5">calendar_month</span>
                        <?php echo e($timer::datatime($order['moment'])); ?>

                    </i>                    
                </p>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered mt-4">
                        <thead>
                            <tr class="text-muted bg-white">
                                <th scope="col">#</th>
                                <th scope="col">Наименование</th>
                                <th scope="col" class="text-end">Количество</th>
                                <th scope="col" class="text-end">Цена</th>                            
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php $__currentLoopData = $order['positions']['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="bg-white">
                                    <th scope="row"><?php echo e($loop->iteration); ?>.</th>
                                    <td>
                                        <strong><?php echo e($item['assortment']['article']); ?></strong>&#160;
                                        <?php echo e($item['assortment']['name']); ?>

                                    </td>
                                    <td class="text-end"><span><?php echo e($item['quantity']); ?> шт.</span></td>
                                    <td class="text-end"><?php echo $currency::summa($item['price']); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                            <tr class="border-0">
                                <td class="border-0" colspan="2"></td>
                                <td class="border-0 fw-bold text-end">НДС:</td>
                                <td class="border-0 text-end"><?php echo $currency::summa($order['vatSum']); ?></td>
                            </tr>                          
                            <tr class="border-0">
                                <td class="border-0" colspan="2"></td>
                                <td class="border-0 fw-bold text-end">ИТОГО:</td>
                                <td class="border-0 text-end"><?php echo $currency::summa($order['sum']); ?></td>
                            </tr>                          
                        </tbody>
                    </table>                    
                </div>
                <?php endif; ?>

                <?php if(session('data')): ?>
                    <h2 class="text text-dark fw-bold">Здравствуйте, <?php echo e(session('data')['name']); ?></h2>
                    <?php if(session('order')): ?>
                        <h4 id="neworder">Ваш заказ №<?php echo e(session('order')); ?></h4>
                        <?php if(session('data')['actualAddress'] === '...'): ?>
                            <p>Адрес доставки не указан.</p>
                        <?php else: ?>
                            <p><strong>Адрес доставки:</strong> <?php echo e(session('data')['actualAddress']); ?></p>
                        <?php endif; ?> 
                        <?php /*
                        <p>На ваш e-mail: <u>{{session('data')['email']}}</u> пришёл 4-х значный код подтверждения.</p>
                        <div>
                            <label class="fw-bold">4-х значный код из e-mail</label>
                            <input type="text" class="form-control w-25" placeholder="XXXX" />
                        </div>     
                        @if(session('order'))
                            <p><a href="/order/{{session('id')}}" target="_blank" rel="noopener noreferrer">Детали заказа</a></p>
                        @endif                                           
                        */ ?>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(isset($order['errors'])): ?>
                    <p class="text badge text-bg-danger">Заказ удалён или не существует</p> 
                <?php else: ?>
                    <p><span class="text badge text-bg-success">Ваш заказ принят.</span></p>
                <?php endif; ?>                
                <p class="text">
                    Вы можете связаться с нашим менеджером: 
                    <br />
                    <a href="tel:+79017331866" class="text-decoration-none fw-bold text text-dark">+7 (901) 733-18-66</a>
                </p>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => 'Информация по заказу',
    'keywords' => 'корзина, service, компания, автосервис, мерседес бенц, актрос',
    'description' => 'Информация для покупателя.',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/order.blade.php ENDPATH**/ ?>