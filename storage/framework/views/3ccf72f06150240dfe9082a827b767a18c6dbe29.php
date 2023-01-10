
<?php $__env->startSection('title', 'Каталог'); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header border-light bg-white pt-3">
                <strong>Поиск автомобиля по VIN</strong> 
            </div>
            <div class="card-body">
                <small class="mb-1 d-block text-muted">
                    <label>Введите VIN автомобиля, например WAUBH54B11N111054</label>
                </small>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="WAUBH54B11N111054" />
                    <button class="btn btn-outline-secondary">Поиск</button>
                </div>
            </div>
        </div>        
    </div>
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-header border-light bg-white pt-3">
                <strong>Поиск автомобиля по кузову</strong>
            </div>
            <div class="card-body">
                <small class="mb-1 d-block text-muted">
                    <label>Введите код и номер кузова автомобиля, например XZU423-0001026</label>
                </small>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="XZU423" />
                    <input type="text" class="form-control" placeholder="0001026" />
                    <button class="btn btn-outline-secondary">Поиск</button>
                </div>                
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <h5 class="mb-2">Наименования каталогов грузового транспорта</h5>
        <?php /*
        https://github.com/milon/barcode
        {!! DNS1D::getBarcodeSVG('2000000018744', 'EAN13', 1.7,60) !!}
        */ ?>
    </div>
    <?php $__currentLoopData = $catalogTrucks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
        <a href="/dashboard/catalog/category/<?php echo e($item['href']); ?>" class="card border-0 shadow-sm mb-4">
            <div class="card-body d-flex align-items-center gap-3">
                <div class="icon-brand">
                    <img src="<?php echo e($item['image']); ?>" class="w-100" alt="<?php echo e($item['name']); ?>" />
                </div>
                <span><?php echo e($item['name']); ?></span>
            </div>
        </a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/catalog.blade.php ENDPATH**/ ?>