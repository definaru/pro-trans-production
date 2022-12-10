
<?php $__env->startSection('title', 'Настройки'); ?>

<?php $__env->startSection('content'); ?>

<div class="w-100 pb-5 pt-2 d-block">
    <ul class="nav nav-tabs border-0 nav-justified">
        <li class="nav-item">
            <button class="nav-link border-0 active fw-bold" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane">
                Данные о компании
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link border-0 fw-bold" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane">
                Смена пароля
            </button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane rounded-bottom fade show active" id="home-tab-pane">
            <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card::class, ['icon' => 'business_center','header' => 'Покупатель '.e($profile['name']).'']); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <form action="" class="d-flex gap-3 flex-column" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($profile['id']); ?>" />
                    <div>
                        <label class="fw-bold">Адрес компании <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="legalAddress" value="<?php echo e($profile['legalAddress']); ?>" />
                    </div>
                    <div>
                        <label class="fw-bold">Фактический адрес компании <span class="fw-light">(опционально)</span></label>
                        <input type="text" class="form-control" name="actualAddress" value="<?php echo e($profile['actualAddress']); ?>" />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="fw-bold">E-mail <span class="fw-light">(фактический \ рабочий)</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo e($profile['email']); ?>" />
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold">Телефон <span class="fw-light">(фактический \ рабочий)</span> <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="phone" placeholder="Телефон" value="<?php echo e($profile['phone']); ?>" />
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="fw-bold">Способ получения <span class="fw-light">(опционально)</span></label>
                            <select class="form-control" name="delivery">
                                <option value="" disabled selected>Выберите способ получения...</option>
                                <option value="FOB">Доставка</option>
                                <option value="EXW">Самовывоз</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="fw-bold">Контактное лицо <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="person" value="Некрасов Марк" />
                        </div>                         
                    </div>
                    <div class="border-top pt-3">
                        <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'submit','color' => 'dark','icon' => 'done','text' => 'Сохранить']); ?>
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
                </form>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
        </div>

        <div class="tab-pane rounded-bottom fade" id="disabled-tab-pane">
            <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Card::class, ['icon' => 'lock_person','header' => 'Смена пароля']); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
            <?php if(session('status')): ?>
                <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => ''.e(session('status')).'']); ?>
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
                <div>
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'warning','message' => 'Вам необходимо сменить пароль!']); ?>
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
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => 'Новый пароль не должен совпадать со старым!']); ?>
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
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'info','header' => 'Требования к паролю:','message' => '8 и более символов, хотя бы одна буква, хотя бы одна цифра']); ?>
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
                <div class="row">
                    <div class="col-md-6 offset-md-3 py-4">
                        <form action="/confirm-reset-password" class="d-flex gap-3 flex-column" method="post">
                            <?php echo csrf_field(); ?>
                            <div>
                                <div class="input-group">
                                    <span class="input-group-text material-symbols-outlined bg-white">
                                        password
                                    </span>
                                    <input 
                                        type="password" 
                                        class="form-control border-start-0 border-end-0 <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                        placeholder="Новый пароль" 
                                        name="password" 
                                    />
                                    <span class="material-symbols-outlined bg-white input-group-text cp text-secondary">
                                        visibility
                                    </span>
                                </div>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="valid-feedback d-block text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                                
                            </div>

                            <div>
                                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'submit','color' => 'dark','icon' => 'done','text' => 'Сохранить']); ?>
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
                        </form>                        
                    </div>
                </div>            
            <?php endif; ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
        </div>
    </div>
</div>
<pre><?php var_dump($_POST);?></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/profile/settings.blade.php ENDPATH**/ ?>