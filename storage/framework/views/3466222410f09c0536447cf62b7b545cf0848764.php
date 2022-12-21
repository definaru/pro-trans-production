
<?php $__env->startSection('title', 'Корзина'); ?>

<?php $__env->startSection('content'); ?>
<div class="card border-0 shadow-sm d-none">
    <div class="card-body">
        <div class="d-flex align-items-center gap-4">
            <i class="material-symbols-outlined icon-card">shopping_cart</i> 
            <span>Ваша корзина пуста</span> 
        </div>
    </div>
</div>

<ul class="list-group list-group-flush mt-4 d-grid gap-2">
    <?php if (isset($component)) { $__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardItem::class, ['id' => '52078891','image' => '','brand' => 'МЕГЕОН','articul' => 'К0000035621','name' => 'Эндоскоп (отоскоп) ушной 33036 к0000035621','vector' => 'ЦЗ Санкт-Петербург','percent' => '95','price' => '1859.44']); ?>
<?php $component->withName('card-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3)): ?>
<?php $component = $__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3; ?>
<?php unset($__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardItem::class, ['id' => '42031518','image' => '','brand' => 'ICARTOOL','articul' => 'IC-V101','name' => 'Видеоэндоскоп USB, 1Мп, 1280x720, 2м, 8мм зонд iCartool IC-V101','vector' => 'ЦЗ Москва','percent' => '94','price' => '2392.45']); ?>
<?php $component->withName('card-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3)): ?>
<?php $component = $__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3; ?>
<?php unset($__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardItem::class, ['id' => '41350111','image' => '','brand' => 'AUTEL','articul' => '100000223','name' => 'AUTEL Видеоэндоскоп-приставка MV108, 8,5 мм','vector' => 'ЦЗ Москва','percent' => '100','price' => '4540.54']); ?>
<?php $component->withName('card-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3)): ?>
<?php $component = $__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3; ?>
<?php unset($__componentOriginal2ca3411173199f2b0df986f0d3d3bbc82e3410a3); ?>
<?php endif; ?>
</ul>
<div class="d-flex justify-content-between">
    <div class="col-md-6 mt-3">
        <p class="m-0 text-muted">
            <small>
                Нажимая кнопку "Оформить заказ" вы соглашаетесь с нашей 
                <a href="#" class="text-muted">политикой конфиденциальности</a> и
                <a href="#" class="text-muted">пользовательским соглашением</a>                
            </small>
        </p>
    </div>
    <div class="d-flex justify-content-end gap-4 align-items-center mt-3 mb-5">
        <div class="py-2">Всего:</div>
        <div class="py-2 fw-bold pe-4">
            <?php echo number_format(8792.43, 2, '.', ' ') ?> ₽
        </div>
        <div class="py-2">3 (шт.)</div>
        <div class="py-2">
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','href' => '#','icon' => 'check','text' => 'Оформить заказ']); ?>
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
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/сard.blade.php ENDPATH**/ ?>