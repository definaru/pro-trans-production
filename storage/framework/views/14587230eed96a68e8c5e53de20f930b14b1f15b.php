<header class="d-flex gap-3 align-items-center justify-content-between border-bottom border-light bg-white py-3 px-4 shadow-sm d-print-none">
    <div class="d-flex align-items-center gap-3 w-50">
        <span class="material-symbols-outlined cp" v-on:click="toggleMenu">menu</span>
        <?php if($url !== '/dashboard'): ?>
        <form action="/dashboard/result/search" method="post" class="input-group">
            <?php echo csrf_field(); ?>
            <span class="material-symbols-outlined input-group-text bg-light border-0 px-2 text-muted" id="basic-addon1">search</span>
            <input type="text" name="text" value="<?=isset($_POST['text']) ? $_POST['text'] : '';?>" class="form-control search bg-light border-0 ps-0" placeholder="Поиск по артиклу..." />
            <span></span>
        </form>
        <?php endif; ?>                    
    </div>
    <div class="d-flex align-items-center gap-1">
        <span class="material-symbols-outlined text-secondary">call</span>
        <a href="tel:<?php echo e(config('app.phone')); ?>" class="fw-bold text-dark text-decoration-none"><?php echo e($contact::format_phone(config('app.phone'))); ?></a>
    </div>
    <div class="d-flex align-items-center gap-3">
        <div class="dropdown">
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown">
                <span class="material-symbols-outlined fs-2 text-white bg-soft-danger rounded-circle">account_circle</span>
                    <?php if($user->customer->company): ?>
                    <div 
                        style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 220px" 
                        title="<?php echo e($user->customer->company); ?>" data-bs-toggle="tooltip"
                    >
                        <?php echo e($user->customer->company); ?>

                    </div>    
                    <?php else: ?>
                    <div>Нет данных</div>
                    <?php endif; ?>
            </div>     
            <ul class="dropdown-menu dropdown-menu-end profile-menu shadow">
                <?php $__currentLoopData = $usermenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['href' => ''.e($list['href']).'','link' => ''.e($list['link']).'','icon' => ''.e($list['icon']).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>                   
        </div>
        <a href="/dashboard/card" class="dropdown text-decoration-none">
            <h6 class="position-absolute top-0 start-100 translate-middle" v-if="card.length">
                <span class="badge rounded-pill bg-danger px-1 py-0">
                {{card.length}}
                </span>
            </h6>
            <div class="d-flex align-items-center gap-2 cp py-0">
                <i class="material-symbols-outlined fs-5 text-secondary">shopping_cart</i>
            </div>
        </a>
        <div class="dropdown">
            <div class="d-flex align-items-center gap-2 cp py-0" data-bs-toggle="dropdown" style="cursor: help">
                <span class="material-symbols-outlined fs-5 text-secondary" data-bs-toggle="tooltip" title="Справочная информация">help</span>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                <?php $__currentLoopData = $helpmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dropdown::class, ['href' => ''.e($item['href']).'','link' => ''.e($item['link']).'','icon' => ''.e($item['icon']).'','target' => ''.e($item['target']).'']); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d)): ?>
<?php $component = $__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d; ?>
<?php unset($__componentOriginalfc08e47099b658bf3489ee5abf9b40d3b6748e6d); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</header><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/main/header.blade.php ENDPATH**/ ?>