
<?php $__env->startSection('title', 'Предзаказы'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','close' => 'false','message' => ''.e(session('status')).'']); ?>
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
    <div class="w-25">
        <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','text' => 'Посмотреть','icon' => 'arrow_right_alt','href' => '/dashboard/payment/preorder/'.e(session('id')).'','color' => 'dark']); ?>
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
<?php else: ?>

<template v-if="preorder.length === 0">
    <h6 class="text-muted">Заказов нет</h6>
    <div class="card border-0 shadow-sm mt-4">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-4">
                    <i class="material-symbols-outlined icon-card bg-soft-danger text-danger">upcoming</i> 
                    <span>Пусто, заказов на рассмотрении нет.</span> 
                </div>
                <div>
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','href' => '/dashboard','color' => 'dark','text' => 'Выбрать товар']); ?>
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
    </div>
</template>
<template v-else>
    <h6 class="text-muted">Всего {{preorder.length+' '+countGoods(preorder.length, 'заказ', 'заказа', 'заказов')}}</h6>
    <ul class="list-group list-group-flush mt-4 d-grid gap-2">
        <li v-for="(item, id) in preorder" class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
            <small class="d-flex align-items-center gap-3" style="width: 320px;">
                <img src="/img/placeholder.png" :alt="item.name" class="rounded" style="width: 50px" /> 
                <a :href=`/dashboard/product/details/${item.id}` class="d-flex align-items-center text-muted text-decoration-none">
                    <div class="d-flex justify-content-start flex-column">
                        <span>{{item.article}}</span> 
                        <p class="fw-bold text-dark m-0">{{item.name}}</p>
                    </div>
                </a>
            </small>
            <div class="position-relative" style="width: 180px;">
                Цена
                <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
            </div>
            <div style="width: 100px;">
                <span class="badge bg-soft-success text-success">
                    <span class="legend-indicator bg-success"></span>
                    По договорённости
                </span>
            </div>
            <div class="input-group" style="width: 140px;">
                <button class="btn btn-sm material-symbols-outlined pe-0" @click="inPreCrement(item.id)">add</button> 
                <div class="form-control form-control-sm fs-6 border-0 text-center">
                    {{item.count}}
                </div>
                <button class="btn btn-sm material-symbols-outlined ps-0" v-if="item.count == 1">remove</button>
                <button class="btn btn-sm material-symbols-outlined ps-0" @click="dePreCrement(item.id)" v-else>remove</button>
            </div>
            <div class="btn-group">
                <button @click="removePreOrder(id)" class="btn text-danger rounded material-symbols-outlined">
                    delete
                </button>
            </div>
        </li>
    </ul>
    <div class="d-flex justify-content-between">
        <div class="col-md-6 mt-3">
            <p class="m-0 text-muted"><small>
                Нажимая кнопку "Оформить предзаказ" вы соглашаетесь с нашей 
                <a href="/doc/privatepolice" target="_blank" class="text-muted">политикой конфиденциальности</a> и
                <a href="/doc/license" target="_blank" class="text-muted">пользовательским соглашением</a></small>
            </p>
        </div>
        <div class="d-flex justify-content-end gap-4 align-items-center mt-3 mb-5">
            <div class="py-2"></div>
            <div class="py-2 fw-bold pe-4"></div>
            <div class="py-2">{{preamount}} (шт.)</div>
            <form action="/api/precheckout" method="post">
                <input type="hidden" name="_token" value="<?=csrf_token();?>" />
                <input type="hidden" name="name" :value="JSON.stringify(preсheckout)" />
                <button v-on:click="preCheckout('<?=$user->verified?>')" class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center">
                    <span class="material-symbols-outlined" v-if="preсheckout.length === 0">check</span>
                    <span class="material-symbols-outlined spin" v-else>autorenew</span>
                    {{preсheckout.length !== 0 ? 'Отправляем...' : 'Оформить предзаказ'}}
                </button>
            </form>
            <?php $__errorArgs = ['error'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <label class="text-danger"><?php echo e($message); ?></label>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>   
        </div>
    </div>    
    {{totalPreAmount}}
</template>
<?php endif; ?>
<?php /*
<pre>@{{JSON.stringify(preсheckout, null, 4)}}</pre>
*/ ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/account.blade.php ENDPATH**/ ?>