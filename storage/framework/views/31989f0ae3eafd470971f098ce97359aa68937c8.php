<?php
    $str = mb_convert_case($product['name'], MB_CASE_TITLE, "UTF-8");
    $result = array_merge($listorder, $bestsellers, $alllist);
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    $image = $images::src($id);
    $price = number_format(($product['salePrices']) / 100, 2, '.', ' ');
    //isset($data[0]['image']) && $data[0]['image'] !== ''  ? trim($data[0]['image'], '.') : '/img/placeholder.png';
?>

<?php $__env->startSection('title', $str.' | Проспект Транс'); ?>
<?php $__env->startSection('content'); ?>
    <section class="bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 mt-5 mt-lg-0">
                    <div class="d-flex justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Главная</a></li>
                                <li class="breadcrumb-item">
                                    <a href="/products/mersedes-benz">
                                        <?php echo e($product['catalog']['name']); ?>

                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?php echo e($str); ?>

                                </li>
                            </ol>
                        </nav>                        
                        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                            <a href="/dashboard/product/details/<?php echo e($id); ?>">ред.</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="pe-0 pe-lg-5">
                        <img 
                            src="<?php echo e($image); ?>" 
                            class="w-100 rounded " 
                            style="height: 450px;object-fit: cover"
                            alt="<?php echo e($str); ?>" 
                        />
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="fw-bold lh-1 display-5 mt-5 mt-lg-0"><?php echo e($str); ?></h1>
                    <p class="fs-5 w-100 text text-secondary"><strong>Артикул:</strong> <?php echo e($product['article']); ?></p>
                    <span id="price" class="d-none"><?php echo number_format(($product['salePrices']) / 100, 2, '.', '') ?></span>
                    <div class="d-flex align-items-center justify-content-start gap-3">
                        <p class="fs-4 text m-0"><?php echo $currency::summa($product['salePrices']); ?></p>
                        <div class="vr" v-if="count !== 1"></div>
                        <div v-html="resultSumma('<?php echo e($product['salePrices']); ?>', count)" v-if="count !== 1" class="text text-success fw-bold"></div>                        
                    </div>

                    
                    <p class="fs-6 w-100 text text-secondary">Описания нет</p>
                    <div class="w-100">
                        <?php if($product['quantity'] == 0 || $product['quantity'] < 0): ?>
                        <p class="label-danger">
                            Нет в наличии
                        </p>&#160;
                        <span class="badge bg-secondary text">Деталь на заказ</span>
                        <?php else: ?>
                        <p 
                            itemprop="offers" 
                            itemscope 
                            itemtype="https://schema.org/Offer" 
                            :class="[<?php echo e($product['quantity']); ?>-count >= 0 || <?php echo e($product['quantity']); ?>-count == 1 ? 'label' : 'label-danger']"
                        >
                            <link itemprop="availability" href="https://schema.org/InStock"> 
                            <template>
                                В наличии
                                <span v-html="<?php echo e($product['quantity']); ?>" v-if="count == 1"></span>
                                <span v-html="<?php echo e($product['quantity']); ?>-count" v-else></span>
                            </template>
                        </p>                        
                        <?php endif; ?>
                    </div>
                    <hr style="color: #ddd" />
                    <div class="d-grid d-lg-flex align-items-center gap-4 w-100">
                        <?php if($product['quantity'] == 0 || $product['quantity'] < 0): ?>
                            <button onclick="isUserSubscribe()" class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2">
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                                В корзину
                            </button>   
                        <?php else: ?>
                            <div class="d-flex justify-content-center rounded p-3 bg-white">
                                <span v-on:click="inCrementOne()" class="material-symbols-outlined btn py-1">add</span>
                                <span class="btn py-1" v-html="count"></span>
                                <button class="btn btn-sm material-symbols-outlined py-1" v-if="count == 1">remove</button>
                                <button class="btn btn-sm material-symbols-outlined py-1" v-on:click="deCrementOne()" v-else>remove</button>
                            </div>
                            <div 
                                id="card<?=$id?>"
                                :data-card="['<?=$id?>,<?=$product['article']?>,<?=$str?>,'+count+',<?=$product['salePrices']?>,'+<?=$product['salePrices']?>*count]"
                                v-on:click="addToCard('<?=$id?>')"
                                class="btn btn-lg btn-primary px-5 py-3 d-flex justify-content-center align-items-center gap-2"
                            >
                                <span class="material-symbols-outlined">add_shopping_cart</span>
                                В корзину
                            </div>    
                                             
                        <?php endif; ?>
                    </div>
                    <div class="d-flex justify-content-start mt-3">
                        <div class="rating-area">
                            <input type="radio" id="star-5" name="rating" value="5">
                            <label for="star-5" title="Оценка «5»"></label>	
                            <input type="radio" id="star-4" name="rating" value="4">
                            <label for="star-4" title="Оценка «4»"></label>    
                            <input type="radio" id="star-3" name="rating" value="3">
                            <label for="star-3" title="Оценка «3»"></label>  
                            <input type="radio" id="star-2" name="rating" value="2">
                            <label for="star-2" title="Оценка «2»"></label>    
                            <input type="radio" id="star-1" name="rating" value="1">
                            <label for="star-1" title="Оценка «1»"></label>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <?php echo $images::text($id)['description']; ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => $str.' | Проспект Транс',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => $product['article']. ', MERCEDES-BENZ \ '.number_format(($product['salePrices']) / 100, 2, '.', ' ').' ₽',
    'image' => $url.$image
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/product.blade.php ENDPATH**/ ?>