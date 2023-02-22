
<?php $__env->startSection('title', 'Пользователи'); ?>

<?php $__env->startSection('content'); ?>
      
<div class="row">
    <div class="col">
        <div class="card border-0 shadow-sm">
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-light" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">#</div>
                            </th> 
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 205px">
                                    Название компании&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>                            
                            
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 170px">
                                    E-mail&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 135px">
                                    Дата создания&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 100px">
                                    Статус&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 80px">
                                    ОКВЭД&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 88px">
                                    ИНН&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 85px">
                                    КПП&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 111px">
                                    ОГРН&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>                            
                            <th>
                                <a href="javascript: void0;" class="text-muted text-decoration-none d-block" style="width: 112px">
                                    ОГРН дата&#160;
                                    <span class="list-sort"></span>
                                </a>
                            </th>
                            <th class="d-flex align-items-center gap-2 text-center border-0" style="width: 165px; height: 40px">
                                Опции
                                <span class="material-symbols-outlined fs-6 text-secondary">settings</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        <?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <div class="ms-2">1</div>
                            </td> 
                            <td>
                                <a href="/dashboard/admin/user/<?php echo e($item['uuid']); ?>" class="text-danger text-decoration-none">
                                    <?php echo e($item['company']); ?>

                                </a>
                            </td>                             
                            

                            <td onclick="alert('E-mail письма пока отправить нельзя')"><?php echo $contact::getEmail($item['email']); ?></td> 
                            <td>
                                <small>
                                    <?php echo e(date('d/m/Y, H:i', strtotime($item['created_at']))); ?>

                                </small>
                            </td>
                            <td>
                                <?php if($item['id_card'] === 'z' || $item['id_card'] === 0): ?>
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
                                <?php elseif($item['id_card'] === 2): ?>
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
                                <a href="/dashboard/admin/users/okved/<?php echo e($item['okved']); ?>"><?php echo e($item['okved']); ?></a> 
                            </td> 
                            <td>
                                <?php echo e($item['inn']); ?>

                            </td> 
                            <td>
                                <?php echo e($item['kpp']); ?>

                            </td> 
                            <td>
                                <?php echo e($item['ogrn']); ?>

                            </td>                             
                            <td>
                                <?php echo e(date('d.m.Y', $item['ogrn_date'])); ?> г.
                            </td> 
                            
                            <td>
                                <div id="card3292240d-5e7f-11ed-0a80-0eca004678fc" data-card="3292240d-5e7f-11ed-0a80-0eca004678fc,A9061800109,Фильтр масляный,1,133006,133006">
                                    <a href="/dashboard/admin/user/<?php echo e($item['uuid']); ?>" type="button" class="btn btn-dark px-4 btn-sm">
                                        Посмотреть
                                    </a>
                                </div>
                            </td>
                            
                        </tr>                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>
            
        </div>          
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/admin/users.blade.php ENDPATH**/ ?>