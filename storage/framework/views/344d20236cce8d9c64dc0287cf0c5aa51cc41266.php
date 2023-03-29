

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
                <p><?php echo e($uuid); ?></p>
                <?php if(session('data')): ?>
                    <h2 class="text text-dark fw-bold">Здравствуйте, <?php echo e(session('data')['name']); ?></h2>
                    <?php if(session('order')): ?>
                        <h4 id="neworder">Ваш заказ №<?php echo e(session('order')); ?></h4>
                        <?php if(session('data')['actualAddress'] === '...'): ?>
                            <p>Адрес доставки не указан.</p>
                        <?php else: ?>
                            <p><strong>Адрес доставки:</strong> <?php echo e(session('data')['actualAddress']); ?></p>
                            <p>Вы можете связаться с нашим менеджером: +7 (901) 733-18-66</p>
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
                {{newOrder}}
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