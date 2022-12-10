<?php
    if($image === []) {
        $img = '/img/no_photo.jpg';
    } else {
        $img = $image[0]['miniature']['href'];
    }
?>
<tr>
    <td>
        <div class="form-check mb-0 ms-2">
            <input type="checkbox" class="form-check-input" />
        </div>
    </td>
    <td>
        <div class="d-flex align-items-center gap-2">
            <img src="<?php echo e($img); ?>" alt="<?php echo e($name); ?>" class="rounded image-product" />
            <small>
                <a href="/dashboard/product/details/<?php echo e($href); ?>" class="name fw-bold text-decoration-none text-dark">
                    <?php echo e($name); ?>

                </a>
            </small>
        </div>
    </td>
    <td><a href="/test/<?php echo e($vendorcode); ?>" class="text-danger text-decoration-none"><?php echo e($vendorcode); ?></a></td>
    <td><small><strong><?php echo number_format(($price) / 100, 2, '.', ' ') ?> ₽</strong></small></td>
    <td>
        <?php if($availability === '0'): ?>
            <a href="/dashboard/order/<?php echo e($modifications); ?>/<?php echo e($vendorcode); ?>">
                <small class="badge text-bg-secondary">Заказать</small>
            </a>
        <?php else: ?>
            <small class="badge bg-soft-success text-success px-3 py-2">В наличии - <?php echo e($availability); ?> шт.</small>
        <?php endif; ?>
    </td>
    <td>
        <div class="card-body p-0 d-flex align-items-center gap-2">
            <div class="icon-brand">
                <img src="/img/guayaquillib/mercedes-benz.png" alt="MERCEDES-BENZ COMMERCIAL" class="w-50" />
            </div>
            <span>MERCEDES-BENZ</span>
        </div>
    </td>
    <td>
        <?php if($availability === '0'): ?>
            <button class="other-features btn btn-outline-secondary btn-sm" disabled>В корзину</button>
        <?php else: ?>
            <button class="other-features btn btn-outline-dark btn-sm">В корзину</button>
        <?php endif; ?>
    </td>
</tr><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/product-card.blade.php ENDPATH**/ ?>