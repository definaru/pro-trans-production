<div class="d-flex justify-content-between d-print-none">
    <h2><?php echo $__env->yieldContent('title'); ?></h2>
    <span class="d-print-none material-symbols-outlined cp" data-bs-toggle="collapse" data-bs-target="#company" @click="toggleExpandLess">
        <template v-if="expand">expand_less</template> 
        <template v-else>expand_more</template>
    </span>
</div>

<!-- <?php if(auth()->guard()->check()): ?>
    <p>Пользователь аутентифицирован...</p> 
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
    <p>Пользователь не аутентифицирован...</p> 
<?php endif; ?> -->

<div class="collapse" id="company">
    <div class="alert alert-light alert-dismissible fade show" role="alert">
        <p class="text-dark m-0">
            <strong>Грузополучатель:</strong> 
            <?php if($user->customer->company): ?>
                <?php echo e($user->customer->company); ?>

            <?php else: ?>
                Нет данных
            <?php endif; ?>
        </p>
        <p class="text-muted m-0">
            <?php if($user->customer->address): ?> <?php echo e($user->customer->address); ?> <?php else: ?> Нет данных <?php endif; ?>
        </p>
        <hr />
        <p class="text-muted m-0">Текущее время по указанному адресу с учетом часовых поясов: <?=date('H:i');?></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="alert px-0 pt-2" role="alert">
        <div class="row g-2">
            <?php if (isset($component)) { $__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardColumn::class, ['header' => 'Сальдо','icon' => 'point_of_sale']); ?>
<?php $component->withName('card-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <small>Сумма</small> 
                        <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => 'danger','text' => '-78 066.79 ₽']); ?>
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
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <small>Кредит / Остаток:</small> 
                        <span class="badge bg-light text-primary rounded-pill">
                            500 000.00 ₽ 
                            <span class="text-muted"> / </span>
                            <span class="text-success">384 640.71 ₽</span> 
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center cp border-0 bg-transparent" data-bs-toggle="collapse" data-bs-target="#address">
                        <small><b>Способ получения:</b></small> 
                        <span class="badge bg-light text-primary rounded-pill">
                            Самовывоз
                        </span>
                    </li>
                    <div class="collapse" id="address">
                        <li class="list-group-item border-0 bg-transparent border-top">
                            <a href="#"><small>Москва МКАД 86 км</small></a>  
                        </li>                                    
                    </div>
                </ul>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd)): ?>
<?php $component = $__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd; ?>
<?php unset($__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardColumn::class, ['header' => 'Задолженность','icon' => 'production_quantity_limits']); ?>
<?php $component->withName('card-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <small>Нормальная</small> 
                        <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => '78 066.79 ₽']); ?>
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
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <small>Просроченная</small> 
                        <span class="badge bg-light text-dark rounded-pill">0.00 ₽</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 bg-transparent">
                        <small>Текущая валюта</small> 
                        <span class="badge bg-light text-dark rounded-pill">(₽) Рубли РФ</span>
                    </li>
                </ul>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd)): ?>
<?php $component = $__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd; ?>
<?php unset($__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\CardColumn::class, ['header' => 'Договор','icon' => 'description']); ?>
<?php $component->withName('card-column'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <small><a href="/dashboard/document/agreement">ТДСТ/МСК/10068/ОО</a></small>  
                        <span class="badge bg-light text-dark rounded-pill">от 15.01.2020</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <small>Отсрочка</small> 
                        <span class="badge bg-light text-dark rounded-pill">4 дня</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 bg-transparent">
                        <small>Резерв</small> 
                        <span class="badge bg-light text-dark rounded-pill">10 дней</span>
                    </li>
                </ul>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd)): ?>
<?php $component = $__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd; ?>
<?php unset($__componentOriginal933f0cff9aa7cb5baaab00ae395f1026809c9dbd); ?>
<?php endif; ?>

        </div>
    </div> 
</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/main/company.blade.php ENDPATH**/ ?>