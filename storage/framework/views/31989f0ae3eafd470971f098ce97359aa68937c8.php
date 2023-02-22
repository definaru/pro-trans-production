<?php
    $str = mb_convert_case($product['name'], MB_CASE_TITLE, "UTF-8");
    // $str = mb_strtoupper(mb_substr($product['name'], 0, 1)) . mb_substr($product['name'], 1, mb_strlen($product['name']));
?>

<?php $__env->startSection('title', $str.' | Проспект Транс'); ?>
<?php $__env->startSection('content'); ?>
    <section class="bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Главная</a></li>
                            <li class="breadcrumb-item">
                                <a href="/product/mersedes-benz">
                                    <?php echo e($product['catalog']['name']); ?>

                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <?php echo e($str); ?>

                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pe-5">
                        <img 
                            src="https://91.img.avito.st/image/1/1.7uEWH7a5QgggtoANRmDpzsi8RAKiPErKp7xADKq2SAo.Wh4rSOc44TyYNfraJfeRSAfML0wmHV_-pST5-LxrDnE" 
                            class="w-100 rounded " 
                            style="height: 450px;object-fit: cover"
                            alt="<?php echo e($str); ?>" 
                        />                        
                        <?php //var_dump($product);?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="fw-bold lh-1 display-5"><?php echo e($str); ?></h1>
                    <p class="fs-5 w-100 text text-secondary"><strong>Артикул:</strong> <?php echo e($product['article']); ?></p>
                    <p class="fs-4 w-100 text"><?php echo $currency::summa($product['salePrices']); ?></p>
                    <p class="fs-6 w-100 text text-secondary">Описания нет</p>
                    <div class="w-100">
                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                            <link itemprop="availability" href="https://schema.org/InStock"> 
                            В наличии
                            <?php echo e($product['quantity']); ?>

                        </p>
                    </div>
                    <hr style="color: #ddd" />
                    <div class="d-flex align-items-center gap-4 w-100">
                        <div>
                            <span class="material-symbols-outlined btn">add</span>
                            <span class="btn">1</span>
                            <span class="material-symbols-outlined btn">remove</span>
                        </div>
                        <button class="btn btn-lg btn-primary px-5 py-3 d-flex align-items-center gap-2">
                            <span class="material-symbols-outlined">add_shopping_cart</span>
                            В корзину
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => $str.' | Проспект Транс',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => '...',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/product.blade.php ENDPATH**/ ?>