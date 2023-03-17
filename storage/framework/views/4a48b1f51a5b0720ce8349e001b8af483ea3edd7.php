

<?php $__env->startSection('title', isset($catalog['name']) ? $catalog['name'] : array_column($catalogTrucks, 'name', 'href')[$name]); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-4">
    <div class="col">
        <div class="card border-0 w-100 rounded shadow-sm">
            <!-- <div class="card-header border-0 d-flex align-items-center py-3 px-4 justify-content-between bg-white">
                <h2 class="m-0 h6 fw-bold">Выберите нужный вариант автомобиля:</h2>
                <div class="dropdown ms-4">
                    <a href="javascript: void(0);" role="button" data-bs-toggle="dropdown" class="text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                            <g>
                                <circle cx="12" cy="3.25" r="3.25" style="fill: currentcolor;"></circle>
                                <circle cx="12" cy="12" r="3.25" style="fill: currentcolor;"></circle>
                                <circle cx="12" cy="20.75" r="3.25" style="fill: currentcolor;"></circle>
                            </g>
                        </svg>
                    </a>
                    <div class="dropdown-menu">
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Артикул</small> 
                        </label>
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Цена</small> 
                        </label>
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Наличие</small> 
                        </label>
                        <label class="dropdown-item d-flex align-items-center gap-2">
                            <div class="form-check mb-0">
                                <input type="checkbox" class="form-check-input" checked />
                            </div>
                            <small>Бренд</small> 
                        </label>
                    </div>
                </div>
            </div> -->
            
            <div class="table-responsive rounded-top">
                <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                    <thead class="border-bottom border-light bg-white" style="font-size: 14px">
                        <tr>
                            <th class="w-60px ps-3">
                                <div class="text-muted mb-0">#</div>
                            </th>
                            <th>
                                <a 
                                    href="javascript: void(0);" 
                                    data-sort="name" 
                                    class="text-muted text-decoration-none" 
                                    style="display: block; width: 250px;"
                                >
                                    Название <span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="d-block text-muted text-decoration-none" style="width: 120px">
                                    Артикул<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="d-block text-muted text-decoration-none" style="width: 80px">
                                    Цена<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="d-block text-muted text-decoration-none" style="width: 85px">
                                    Наличие<span class="list-sort"></span>
                                </a>
                            </th>
                            <th>
                                <a href="javascript: void(0);" class="text-muted text-decoration-none" style="width: 160px">
                                    Бренд<span class="list-sort"></span>
                                </a>
                            </th>
                            <th class="d-flex align-items-center gap-2 text-center border-0" style="width: 165px;height: 40px">
                                Опции
                                <span class="material-symbols-outlined fs-6 text-secondary">settings</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list" style="font-size: 14px">
                        <?php $__currentLoopData = $product['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(empty($item['code'])): ?>
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ProductCard::class, ['id' => $offset+$loop->iteration,'image' => $item['images']['rows'],'href' => ''.e($item['id']).'','name' => ''.e($item['name']).'','vendorcode' => ''.e($item['code']).'','price' => ''.e($item['salePrices'][0]['value']).'','availability' => ''.e($item['quantity']).'','modifications' => $name]); ?>
<?php $component->withName('product-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5)): ?>
<?php $component = $__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5; ?>
<?php unset($__componentOriginal5e109b4b7def75bd69cfe491f655f877e39a59a5); ?>
<?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-5 text-secondary small">
                        Показано: 
                        <span><?php echo e($offset == 0 ? 1 : $product['meta']['limit']); ?></span> - 
                        <span>
                            <?php if($product['meta']['size']-$offset < $limit): ?>
                                <?php echo e($offset+$product['meta']['size']-$offset); ?>

                            <?php else: ?>
                                <?php echo e($offset == 0 ? $limit : $offset); ?>

                            <?php endif; ?>
                        </span> из 
                        <span><?php echo e($product['meta']['size']); ?></span>
                    </div>
                    <!-- <ul class="pagination list-pagination mb-0 d-flex">
                        <li class="page-item active"><a href="javascript: void(0);" class="page page-link">1</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">2</a></li>
                        <li class="page-item"><a href="javascript: void(0);" class="page page-link">3</a></li>
                    </ul> -->
                    <nav aria-label="...">
                        <ul class="pagination m-0">
                            <?php if($offset != 0): ?>
                            <li class="page-item">
                                <!-- <span class="page-link">Previous</span> disabled -->
                                <a class="page-link text-muted" href="<?php echo e($offset-$limit); ?>">&larr; Предыдущие</a>
                            </li>
                            <?php endif; ?>

                            <?php if($product['meta']['size']-$offset > $limit): ?>
                            <li class="page-item">
                                <a class="page-link text-muted" href="<?php echo e($offset === 0 ? $name.'/'.($limit+$offset).'/'.$offset : $limit+$offset); ?>">Далее &rarr;</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard/catalog-detail.blade.php ENDPATH**/ ?>