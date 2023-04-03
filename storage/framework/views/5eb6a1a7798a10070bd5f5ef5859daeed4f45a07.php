<?php
    $datetime = $time::now()->addHours(3)->locale('ru')->translatedFormat('l, j F Y, H:i');
    $uuid = auth()->user()->verified;
?>


<?php $__env->startSection('title', $product['name']); ?>

<?php $__env->startSection('breadcrumbs'); ?>
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>
    <span class="text-secondary">/</span>
    <?php if($product['name'] === 'Товар не найден'): ?>
    <span class="text-muted"><?php echo e($product['name']); ?></span>
    <?php else: ?>
    <a href="/dashboard/catalog/category/<?php echo e($product['catalog']['id']); ?>" class="text-muted">
        <?php echo e($product['catalog']['name']); ?>

    </a>     
    <span class="text-secondary">/</span>
    <span class="text-muted">Детали <?php echo e($product['paymentItemType']); ?>а</span>    
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php if($product['name'] === 'Товар не найден'): ?>
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
        <?php else: ?>
            <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','close' => 'false','message' => 'Товар удалён или не верно указан ID товара']); ?>
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
            <form action="" method="post" class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="fw-bold m-0">Связаться с менеджером</h5>
                </div>
                <div class="card-body">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="date" value="<?php echo e($datetime); ?>">
                    <input type="hidden" name="company" value="<?php echo e($uuid); ?>">
                    <input type="hidden" name="message" value="ID товар <?php echo e($id); ?> не найден">
                    <input type="hidden" name="id" value="<?php echo e($id); ?>" />
                    <input type="hidden" name="num" value="<?php echo e(time()); ?>" />
                    <div class="mb-2">
                        <label>Ваше имя</label>
                        <input type="text" class="form-control" name="name" value="" />
                    </div>
                    <div>
                        <label>Ваш телефон</label>
                        <input type="text" class="form-control" name="phone" value="" />
                    </div>
                </div>
                <div class="card-footer bg-white border-light">
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'submit','color' => 'dark','text' => 'Отправить','icon' => 'forward_to_inbox']); ?>
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
        <?php endif; ?>

    <?php else: ?>
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <div class="row mt-3">
                <div class="col-md-3">
                    <?php if(auth()->check() && auth()->user()->hasRole('customer')): ?>
                        <img 
                            src="<?php echo e($images::text($id)['image']); ?>"
                            alt="<?php echo e($product['name']); ?>" 
                            class="w-100 rounded" 
                        /> 
                    <?php endif; ?>
                    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                    <form id="loaderphoto" onchange="loadPfoto()" action="/api/files" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <label class="position-relative">
                            <?php if(session('text')): ?>
                                <div id="successphoto" class="d-none"><?php echo e(session('text')); ?></div>
                            <?php endif; ?>
                            <img 
                                src="<?=isset($image[0]['image']) ? trim($image[0]['image'], '.') : '/img/placeholder.png';?>" 
                                alt="<?php echo e($product['name']); ?>" 
                                class="w-100 rounded" 
                            />
                            <div class="position-absolute delete-image">
                                <span class="material-symbols-outlined">delete</span>
                            </div>
                            <input type="file" name="file" accept="image/png, image/jpeg" class="d-none" />
                            <input type="hidden" name="uuid" value="<?php echo e($id); ?>" />
                            <div id="isloader" class="d-flex align-items-center gap-1 mt-2"></div>
                        </label>
                    </form>
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <p class="mb-1">
                        <b>Артикул:</b>
                        <?php echo e($product['article']); ?>

                    </p>
                    <!-- <p class="mb-1">
                        <b>Внешний код:</b>
                        
                    </p> -->
                    <p class="mb-1">
                        <b>НДС:</b>
                        <?php echo e($product['vat']); ?>%
                    </p>

                    <p class="mb-1">
                        <b>Цена <i class="fw-light text-muted">(за 1 шт.)</i>:</b>
                        <?php echo number_format(($product['salePrices']) / 100, 2, '.', ' ') ?> ₽
                    </p>

                    <p class="mb-1">
                        <b>Тип маркеровки:</b>
                        <?php echo e($product['trackingType']); ?>

                    </p>
                    <p class="mb-1">
                        <b>Обновлён:</b>
                        <small class="fw-light text-muted">
                            <?php echo e($time::parse($product['updated'])->locale('ru')->translatedFormat('d F Y, H:i')); ?>

                        </small>
                    </p>
                    <!-- <div class="mb-3">
                        <label class="form-label fw-bold m-0">ID а:</label>
                        <input type="text" name="id" class="form-control" value="" placeholder="Идентификатор..." />
                        <div class="form-text">Вы можете сообщить этот ID менеджеру при поиске данной позиции</div>
                    </div> -->

                    <p>
                        <?php if($product['quantity'] == 0 || $product['quantity'] < 0): ?>
                        <div class="badge bg-soft-danger text-danger px-3">
                            Нет в наличии
                        </div>
                        <?php else: ?>
                        <div class="badge bg-soft-success px-3">
                            <div class="d-flex align-items-center gap-2 text-success">
                                В наличии 
                                <span class="badge bg-success">
                                    <?php echo e($product['quantity']); ?>

                                </span>                                
                            </div>
                        </div>
                        <?php endif; ?>
                    </p>
                    <div class="d-flex">
                        <div>
                            <?php if($product['quantity'] == 0 || $product['quantity'] < 0): ?>
                                <div  
                                    id="preorders1"
                                    data-order="<?php echo e($product['id']); ?>,<?php echo e($product['article']); ?>,<?php echo e($product['name']); ?>,1,<?php echo e($product['salePrices']); ?>"
                                    v-on:click="addToOrder('s1')"
                                >
                                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','color' => 'secondary','text' => 'Предзаказ','icon' => 'shopping_cart']); ?>
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
                                <div 
                                    id="cards1" 
                                    class="d-flex flex-column"
                                    data-card="<?php echo e($product['id']); ?>,<?php echo e($product['article']); ?>,<?php echo e($product['name']); ?>,1,<?php echo e($product['salePrices']); ?>,<?php echo e($product['salePrices']); ?>" 
                                    v-on:click="addToCard('s1')"
                                >
                                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','color' => 'dark','text' => 'В корзину','icon' => 'shopping_cart']); ?>
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
                            <?php endif; ?>                             
                        </div>
                    </div>
                </div>
                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                <div class="col-md-3">
                    <div class="text-center py-3">
                        <?php if($product['barcodes'] === 'Нет данных'): ?>
                        <?php else: ?>
                        <?php echo DNS1D::getBarcodeSVG($product['barcodes'], 'EAN13', 1.7,60); ?>

                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>  
            <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?> 
            <div class="row">
                <div class="col-12 mt-4">
                    <textarea id="editor" name="description" >
                        <?php echo e($images::text($id)['description']); ?>

                    </textarea>
                    <button 
                        type="submit" 
                        v-on:click="editText('<?php echo e($id); ?>')" 
                        class="btn px-4 mt-2"
                        :class="[loading ? 'btn-secondary' : 'btn-dark']"
                        v-html="loading ? 'Сохранить' : 'Подождите, грузится...'"
                    ></button>
                </div>
            </div> 
            <?php endif; ?>        
        </div>
    </div>
    <?php endif; ?>
    <pre><?php //var_dump($_COOKIE);?></pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/product/details.blade.php ENDPATH**/ ?>