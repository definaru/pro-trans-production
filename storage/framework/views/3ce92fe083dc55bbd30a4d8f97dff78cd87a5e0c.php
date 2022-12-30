
<?php $__env->startSection('title', 'Предзаказы'); ?>

<?php $__env->startSection('content'); ?>
<h6 class="text-muted">Всего 2 товара</h6>

<ul class="list-group list-group-flush mt-4 d-grid gap-2">
    <li class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
        <small class="d-flex align-items-center gap-3" style="width: 320px;">
            <img src="/img/no_photo.jpg" alt="ПРОКЛАДКА СЕПАРАТОРА МАСЛ" class="rounded" style="width: 50px" /> 
            <a href="http://prospektrans.host/dashboard/product/details/42919327-5064-11ed-0a80-05bf003d0d2b" class="d-flex align-items-center text-muted text-decoration-none">
                <div class="d-flex justify-content-start flex-column">
                    <span>A5410150980</span> 
                    <p class="fw-bold text-dark m-0">ПРОКЛАДКА СЕПАРАТОРА МАСЛ</p>
                </div>
            </a>
        </small> 
        <div class="position-relative" style="width: 180px">
            741,39&nbsp;₽
            <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
        </div> 
        <div style="width: 100px;">
            <span class="badge bg-soft-success text-success">
                <span class="legend-indicator bg-success"></span>
                741,39&nbsp;₽
            </span>
        </div> 
        <div class="input-group" style="width: 140px">
            <button class="btn btn-sm material-symbols-outlined pe-0">add</button> 
            <div class="form-control form-control-sm fs-6 border-0 text-center">1</div> 
            <button class="btn btn-sm material-symbols-outlined ps-0">remove</button>
        </div> 
        <div class="btn-group">
            <button class="btn text-danger rounded material-symbols-outlined">delete</button>
        </div>
    </li> 
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/payment/account.blade.php ENDPATH**/ ?>