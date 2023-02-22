
<?php $__env->startSection('title', 'Подробнее о пользователе'); ?>
<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    <a href="/dashboard/admin/users" class="text-muted">
        Пользователи
    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted"><?php echo e($model[0]['company']); ?></span>    
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>  
<h6 class="text-muted">ID: (МойСклад) <?php echo e($uuid); ?></h6>
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <table class="table mb-0">
                    <tbody>
                        <tr>
                            <td><strong>Ф.И.О. директора</strong></td>
                            <td><?php echo e($model[0]['name']); ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>E-mail:</strong></td>
                            <td onclick="alert('E-mail письма пока отправить нельзя')"><?php echo $contact::getEmail($model[0]['email']); ?></td> 
                            <td>
                                <?php if($model[0]['email_verified_at'] === null): ?>
                                    <b class="text-danger d-flex gap-1 align-items-center">
                                        <span class="material-symbols-outlined">emergency_home</span> 
                                        <small>Не подтверждён</small> 
                                    </b>
                                <?php else: ?>
                                    <b class="text-success d-flex gap-1 align-items-center">
                                        <span class="material-symbols-outlined">verified_user</span> 
                                        <small>Подтверждён</small> 
                                    </b>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Дата создания аккаунта:</strong></td>
                            <td>
                                <?php echo e($timer::datatime($model[0]['created_at'])); ?>

                            </td>
                            <td><?php echo e($timer::difference($model[0]['created_at'])); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Статус клиента:</strong></td>
                            <td>
                                <?php if($model[0]['id_card'] === 'z' || $model[0]['id_card'] === 0): ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '40931','text' => 'На рассмотрении']); ?>
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
                                <?php elseif($model[0]['id_card'] === 2): ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => 'danger','text' => 'Заблокирован']); ?>
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
                                <?php else: ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => 'Активирован']); ?>
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
                            </td>
                            <td>
                                <select class="form-control">
                                    <option value="" selected disabled>Выбрать статус...</option>
                                    <option value="0">На рассмотрение</option>
                                    <option value="2">Заблокировать</option>
                                    <option value="1">Активировать</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Название компании:</strong></td>
                            <td><?php echo e($model[0]['company']); ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>ОКВЭД:</strong></td>
                            <td><a href="/dashboard/admin/users/okved/<?php echo e($model[0]['okved']); ?>"><?php echo e($model[0]['okved']); ?></a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>ИНН:</strong></td>
                            <td><?php echo e($model[0]['inn']); ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>ОГРН:</strong></td>
                            <td><?php echo e($model[0]['ogrn']); ?></td>
                            <td>
                                <div class="d-flex gap-1 align-items-center text-muted">
                                    <span class="material-symbols-outlined fs-5">calendar_month</span>
                                    <?php echo e(date('d.m.Y', $model[0]['ogrn_date'])); ?> г.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>КПП:</strong></td>
                            <td><?php echo e($model[0]['kpp']); ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><strong>Юридический адрес:</strong></td>
                            <td>
                                <a href="https://www.google.ru/maps/place/<?php echo e(urlencode($model[0]['address'])); ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo e($model[0]['address']); ?>

                                </a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/user.blade.php ENDPATH**/ ?>