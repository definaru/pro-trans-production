<?php
    $result = array_merge($listorder, $bestsellers, $alllist);
    $size = session('search') ? session('search')['meta']['size'] : '';
    //$size = session('search') ? session('search')['count'] : '';
?>


<?php $__env->startSection('title', 'Каталог запчастей Mercedes-Benz | Проспект Транс'); ?>

<?php $__env->startSection('content'); ?>
<section class="bg-secondary-subtle">
    <div class="container position-relative">
        <div class="d-print-none row">
            <form id="sendForm" action="/product" method="POST" class="col-12 my-4 position-relative">
                <?php echo csrf_field(); ?>
                <input 
                    type="search" 
                    list="searchlist" 
                    min="5"
                    max="5"
                    id="search" 
                    name="text" 
                    class="form-control form-control-lg ps-4 pe-5 text border-0 shadow" 
                    placeholder="Введите Артикул или Название запчасти..." 
                />
                <span class="material-symbols-outlined position-absolute text-muted" onclick="getResult()" style="cursor: pointer;right: 28px;top: 11px">search</span>
                <datalist id="searchlist">
                    <option value="Насос-форсунка топливная цилиндра"></option>
                    <option value="Ресивер воздушный"></option>
                    <option value="Поршень-гильза комплект"></option>
                    <option value="Водяной насос с муфтой"></option>
                    <option value="Насос водяной с прокладкой"></option>
                    <option value="Тормозной шланг переднего моста"></option>
                    <option value="Трос открывания"></option>
                    <option value="Втулка шатуна верхняя"></option>
                    <option value="Кольцо гильзы"></option>
                    <option value="Прокладка блока цилиндров"></option>
                    <option value="Комплект щеток стеклоочистителя"></option>
                    <option value="Комплект сцепления"></option>
                    <option value="Датчик уровня топлива в баке"></option>
                    <option value="Цапфа задней полуоси"></option>
                    <option value="Кронштейн стабилизатора"></option>
                    <option value="Гайка шестигранная"></option>
                    <option value="Напорный трубопровод турбины"></option>
                    <option value="Усилитель привода сцепления"></option>
                    <option value="Фильтр топливный"></option>
                    <option value="Радиатор охлаждения"></option>
                    <option value="Панель кабины боковая левая"></option>
                    <option value="Прокладка выпускного коллектора"></option>
                    <option value="Кольцо уплотнительное"></option>
                    <option value="Втулка распредвала"></option>
                    <option value="Сальник ступицы"></option>
                    <option value="Фиттинг ГБЦ"></option>
                    <option value="Трубка топливная"></option>
                    <option value="Вискомуфта вентилятора"></option>
                    <option value="Втулка распредвала с буртиком"></option>
                    <option value="Насос ГУР"></option>
                    <option value="Прокладка"></option>
                    <option value="Фильтр масляный"></option>
                    <option value="Комплект топливных фильтров"></option>
                    <option value="Фиттинг электропроводки"></option>
                    <option value="Блок переключения передач"></option>
                    <option value="Уплотнение"></option>
                    <option value="Уплотнение масляного насоса"></option>
                    <option value="Щетки стеклоочистителя"></option>
                    <option value="Клапан обратный"></option>
                    <option value="Рычаг стеклоочистителя"></option>
                    <option value="Стартер"></option>
                    <option value="Вилка блокировки"></option>
                    <option value="Генератор"></option>
                    <option value="Трубка"></option>
                    <option value="Прокладка коллектора"></option>
                    <option value="Втулка стабилизатора"></option>
                    <option value="Вязкостная муфта"></option>
                    <option value="Подушка передняя кабины"></option>
                    <option value="Блок подготовки воздуха"></option>
                    <option value="Термостат охлаждения двигателя"></option>
                </datalist>
            </form>
        </div>
        <div class="row">
            <div class="col-12">
                
                <pre><?php //var_dump(array_search('A9604770503', $result));?></pre>
                <pre><?php //var_dump(array_values(array_column($result, 'href')));?></pre>
                <pre><?php //var_dump($result);?></pre>
                <?php
                    // $res = [];
                    // $arrayTest = array_values(array_column($result, 'href'));
                    // array_walk_recursive($arrayTest, function ($item, $key) use (&$res) {
                    //     $res[] = $item;    
                    // });
                    // echo '<pre>'.var_dump($res).'</pre>';
                ?>
                <?php $__errorArgs = ['text'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p>Получен пустой запрос.</p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <?php if(session('search')): ?>
            <?php if($size === 0): ?>
                <p class="w-100" style="height: 600px">По запросу <strong>"<?php echo e(session('text')); ?>"</strong> ничего не найдено</p>
            <?php else: ?>
                <p><?php echo e($decl::search($size)); ?> <span class="badge bg-soft-danger text-danger rounded-pill"><?php echo e($size); ?></span></p>
                
                <div class="row">
                <?php $__currentLoopData = session('search')['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="col-lg-3 col-12 mb-3">
                        <div class="card card-data border-0 shadow order">
                            <a href="/product/mersedes-benz/<?php echo e($item['id']); ?>" class="card-body pb-0 position-relative">
                                <div 
                                    itemprop="aggregateRating" 
                                    itemscope 
                                    itemtype="https://schema.org/AggregateRating" 
                                    class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2"
                                >
                                    <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                    <small>4.9 рейтинг</small> 
                                    <meta itemprop="worstRating" content="1">
                                    <meta itemprop="ratingValue" content="4.9">
                                    <meta itemprop="bestRating" content="5">
                                </div>
                                <img 
                                    itemprop="image"
                                    src="/img/placeholder.png" 
                                    class="card-img-top rounded" 
                                    alt="<?php echo e($item['name']); ?>, Проспект Транс, <?php echo e($item['pathName']); ?>"
                                />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-6" style="height: 39px">
                                    <a itemprop="name" href="/product/mersedes-benz/<?php echo e($item['id']); ?>">
                                        <?php echo e(mb_convert_case($item['name'], MB_CASE_TITLE, "UTF-8")); ?>

                                    </a>
                                </h5>
                                <hr style="color: #ddd">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                                            <link itemprop="availability" href="https://schema.org/InStock">В наличии 
                                            
                                        </p>                                
                                    </div>
                                    <strong>
                                        <?php echo $currency::summa($item['salePrices'][0]['value']); ?>

                                    </strong>                            
                                </div>
                                <hr style="color: #ddd">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/img/mercedes-benz.png" alt="Mercedes-Benz" style="width: 37px;height: 37px">
                                        </div>
                                        <div class="lh-sm">
                                            <small class="text-muted d-block w-100">
                                                <?php echo e($item['article']); ?>                                            
                                            </small>
                                            <strong class="text-secondary">Mercedes-Benz</strong>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="/signup" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
                                            <span class="material-symbols-outlined">add_shopping_cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <div class="row" itemscope itemtype="https://schema.org/Product">
                <div class="col-12">
                    <p class="text text-muted">Всего <?php echo e($product['meta']['size']); ?> товаров</p>
                </div>
                <?php $__currentLoopData = $product["rows"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item['quantity'] == 0): ?>
                    <?php else: ?>
                    <div class="col-lg-3 col-12 mb-4">
                        <div class="card card-data border-0 shadow-sm order">
                            <a href="/product/mersedes-benz/<?php echo e($item['id']); ?>" class="card-body pb-0 position-relative">
                                <div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating" class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                                    <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                                    <small>4.9 рейтинг</small> 
                                    <meta itemprop="worstRating" content="1">
                                    <meta itemprop="ratingValue" content="4.9">
                                    <meta itemprop="bestRating" content="5">
                                </div>
                                <img 
                                    itemprop="image" 
                                    
                                    src="/img/placeholder.png" 
                                    class="card-img-top rounded" 
                                    alt="<?php echo e($item['name']); ?>, Проспект Транс, <?php echo e($item['pathName']); ?>"
                                />
                            </a>
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-6" style="height: 39px">
                                    <a itemprop="name" href="/product/mersedes-benz/<?php echo e($item['id']); ?>">
                                        <?php echo e(mb_convert_case($item['name'], MB_CASE_TITLE, "UTF-8")); ?>

                                    </a>
                                </h5>
                                <hr style="color: #ddd">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="label">
                                            <link itemprop="availability" href="https://schema.org/InStock">В наличии <?php echo e($item['quantity']); ?>

                                        </p>                                
                                    </div>
                                    <strong>
                                        <?php echo $currency::summa($item['salePrices'][0]['value']); ?>

                                    </strong>                            
                                </div>
                                
                                <hr style="color: #ddd">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <div>
                                            <img src="/img/mercedes-benz.png" alt="Mercedes-Benz" style="width: 37px;height: 37px">
                                        </div>
                                        <div class="lh-sm">
                                            <small class="text-muted d-block w-100">
                                                <?php echo e($item['article']); ?>                                            
                                            </small>
                                            <strong class="text-secondary">Mercedes-Benz</strong>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="/signup" class="btn btn-primary text d-flex align-items-center justify-content-center gap-2 py-2">
                                            <span class="material-symbols-outlined">add_shopping_cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <?php endif; ?>             
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                    
                    
                    
                        <?php
                            //$arr = $limit*$i.',';
                            //$str = substr($arr, 0, -1);
                            //echo $str;


                            //$arr = explode('', $str);
                            //echo '<pre>'.var_dump($arr).'</pre>';
                            //$arr = array_slice($arr, 0, 3);
                        ?>
                    
                    <?php //var_dump(array_slice((array)$limit*$i, 0, 3));?>
            </div>        
        <?php endif; ?>

        

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => 'Каталог запчастей Mercedes-Benz | Проспект Транс',
    'keywords' => 'ремонт, ремонт машин, ремонт в москве, ремонт в мытищи, ремонт двигателя, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Каталог запчастей Mercedes-Benz, широкий ассортимент комплектующих и расходных материалов для грузовых автомобилей',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/catalog.blade.php ENDPATH**/ ?>