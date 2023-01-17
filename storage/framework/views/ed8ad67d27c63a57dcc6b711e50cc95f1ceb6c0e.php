<div id="header" class="d-flex justify-content-between align-items-start flex-column bg-white d-print-none position-relative shadow-sm">
    <div class="w-100">
        <a 
            href="/dashboard" 
            class="d-flex justify-content-center align-items-center gap-2 text-decoration-none logo text-center px-3 py-3"
            :class="[!isOpen ? 'justify-content-center w-100' : '']"
        >
            <img src="<?php echo e(asset('img/dark-logo.png')); ?>" alt="<?php echo e(config('app.name')); ?>" />
            <template v-if="isOpen">
                <h5 class="text-dark m-0"><span class="fw-bold">Prospekt</span> Parts</h5>
            </template>
        </a>
        
        <?php if($deal::status() === '1'): ?>
        <div id="inner-content">
            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                <?php $__currentLoopData = $adminmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Menu::class, ['header' => ''.e($item['header']).'','list' => $item['list']]); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9)): ?>
<?php $component = $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9; ?>
<?php unset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
            <?php endif; ?>  

            <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Menu::class, ['header' => ''.e($item['header']).'','list' => $item['list']]); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9)): ?>
<?php $component = $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9; ?>
<?php unset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php else: ?>
            <?php $__currentLoopData = $stop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Menu::class, ['header' => ''.e($item['header']).'','list' => $item['list']]); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9)): ?>
<?php $component = $__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9; ?>
<?php unset($__componentOriginald0b4154eafa6ddf1d90e70a636ac005452fbb4c9); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    
    <?php /*
    <div>
        <div class="list-group-item d-flex gap-2 align-items-center bg-primary px-3 py-1 mt-4">
            <span class="badge bg-success"> 
                <span class="material-symbols-outlined fs-6">emoji_transportation</span>
            </span>
            <a href="#" class="text-decoration-none d-flex">
                <small class="text-white" v-if="isOpen" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 170px">
                    @if($user->customer->company)
                        {{$user->customer->company}}
                    @else
                        Нет данных
                    @endif
                </small>                    
            </a>
        </div>        
        <div class="list-group-item d-flex gap-2 align-items-center bg-primary px-3 py-1 mb-4">
            <span class="badge bg-success"> 
                <span class="material-symbols-outlined fs-6">join_left</span>
            </span>
            <a href="#" class="text-decoration-none d-flex">
                <small class="text-white" v-if="isOpen">Цена</small>                    
            </a>
        </div> 
    </div>
    */ ?>

</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/main/aside.blade.php ENDPATH**/ ?>