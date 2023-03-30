

<?php $__env->startSection('title', 'Корзина'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-100 bg-primary" style="height: 170px">
    <div class="d-flex align-items-center justify-content-center h-100" style="background-color: #00000059">
        <h2 class="text-white pt-5 mb-0 mt-1">Корзина &#128722;</h2>
    </div>
</div>
<section class="bg-secondary-subtle pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <template v-if="card.length === 0">
                    <div style="height: 600px">
                        <h6 class="text-muted">Ваша корзина пуста</h6>
                        <div class="d-flex justify-content-center">
                            <div class="material-symbols-outlined" style="color: #efefef;margin-top: 50px;font-size: 250px">
                                shopping_cart
                            </div>                              
                        </div>
                    </div>
                </template>
                
                <template v-else>
                    <h6 class="text-muted">Всего {{card.length+' '+countGoods(card.length, 'товар', 'товара', 'товаров')}}</h6>
                    <template v-if="!loading">
                        <ul class="list-group list-group-flush mt-4 d-grid gap-2">
                            <li v-for="(item, id) in card" class="list-group-item d-flex justify-content-between align-items-center rounded shadow-sm border-0">
                                <small class="d-flex align-items-center gap-3" style="width: 320px;">
                                    <!-- /img/goods/A9061800109.png -->
                                    <img src="/img/no_photo.jpg" :alt="item.name" class="rounded" style="width: 50px;" /> 
                                    <a :href=`/product/mersedes-benz/${item.id}` class="d-flex align-items-center text-muted text-decoration-none">
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text">{{item.article}}</span> 
                                            <p class="fw-bold text-dark m-0">{{item.name}}</p>
                                        </div>
                                    </a>
                                </small> 
                                <div class="position-relative" style="width: 180px;">
                                    {{ priceFormat(item.price) }}
                                    <span class="badge rounded-pill text-dark bg-light">за 1 шт.</span>
                                </div> 
                                <div>
                                    <span class="label" v-html="resultSumma(item.price, item.count)"></span>
                                </div> 
                                <div class="input-group" style="width: 140px;">
                                    <button class="btn btn-sm material-symbols-outlined pe-0" v-on:click="inCrement(item.id)">add</button>
                                    <div class="form-control form-control-sm fs-6 border-0 text-center">{{item.count}}</div>
                                    <button class="btn btn-sm material-symbols-outlined ps-0" v-if="item.count == 1">remove</button>
                                    <button class="btn btn-sm material-symbols-outlined ps-0" v-on:click="deCrement(item.id)" v-else>remove</button>
                                </div> 
                                <div class="btn-group">
                                    <button v-on:click="removeCart(id)" class="btn text-danger rounded material-symbols-outlined">delete</button>
                                </div>
                            </li>
                        </ul>  
                        {{totalSum}}
                        {{totalAmount}}                  
                    </template>
                    <template v-else>
                        <div>
                            <div class="d-grid gap-2 mt-4">
                                <div class="w-100 bg-secondary bg-gradient rounded p-4" style="opacity: 0.1"></div>
                                <div class="w-100 bg-secondary bg-gradient rounded p-4" style="opacity: 0.1"></div>
                                <div class="w-100 bg-secondary bg-gradient rounded p-4" style="opacity: 0.1"></div>
                            </div>
                            <div class="w-75 bg-secondary bg-gradient rounded p-2 mt-3" style="opacity: 0.1"></div>
                            <div class="w-50 bg-secondary bg-gradient rounded p-2 mt-3" style="opacity: 0.1"></div>                    
                        </div>
                    </template>
                </template>
                <template v-if="сheckout.length === 0">
                    <div v-if="card.length !== 0" class="d-flex justify-content-between mb-5 pb-5">
                        <div class="col-md-6 mt-3">
                            <p class="m-0 text-muted">
                                <small>
                                    Нажимая кнопку "Оформить заказ" вы соглашаетесь с нашей 
                                    <a href="/doc/privatepolice" target="_blank" class="text-muted">политикой конфиденциальности</a> и
                                    <a href="/doc/license" target="_blank" class="text-muted">пользовательским соглашением</a>
                                </small>
                            </p>
                        </div> 
                        <div class="d-flex justify-content-end gap-4 align-items-center mt-3 mb-5">
                            <div class="py-2">Всего:</div> 
                            <div class="py-2 fw-bold pe-4">
                                {{getTotalsumma(totalsumma)}}
                            </div> 
                            <div class="py-2">{{amount}} (шт.)</div>
                            <div>
                                <div v-on:click="Checkout()" class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center">
                                    <span class="material-symbols-outlined">check</span>
                                    Оформить заказ
                                </div>                                
                            </div>
                        </div>
                    </div> 
                </template>
                
                <template v-else>
                    <form action="/checkout" method="post" enctype="multipart/form-data" class="py-2">
                        <?php echo csrf_field(); ?>
                        <div class="row gx-5 gy-3 mt-4">
                            <div class="col-6">
                                <label class="fw-bold">
                                    Как вас зовут ? 
                                    <sup class="text-muted text">(на кого оформить заказ)</sup>
                                    <em class="text-danger text">*</em>
                                </label>
                                <input 
                                    type="text" 
                                    class="form-control select border-0 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-bottom border-danger-subtle <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="name"
                                    placeholder="Ваше имя" 
                                />
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="valid-feedback d-block text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-6">
                                <label class="fw-bold">Как c вами связаться ?<em class="text-danger text">*</em></label>
                                <input 
                                    type="text" 
                                    class="form-control select border-0 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-bottom border-danger-subtle <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="phone"
                                    placeholder="Ваш телефон" 
                                />
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="valid-feedback d-block text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-6">
                                <label class="fw-bold">Куда отправить счёт на оплату ?<em class="text-danger text">*</em></label>
                                <input 
                                    type="email" 
                                    class="form-control select border-0 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-bottom border-danger-subtle <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                                    name="email" 
                                    placeholder="Ваш E-mail..." 
                                />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="valid-feedback d-block text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-6">
                                <label class="fw-bold">Куда отправить заказ ? <sup class="text-muted text">(Опционально)</sup></label>
                                <input type="text" class="form-control select border-0" name="address" placeholder="Адрес доставки..." />
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="сheckout" :value="JSON.stringify(сheckout)" />
                        <div class="d-flex mt-4">
                            <button type="submit" v-html="button" v-on:click="sendOrderButton()" class="btn btn-dark fw-bold text px-4 d-flex align-items-center gap-2 justify-content-center"></button>                  
                        </div>                        
                    </form>
                </template>
                
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => 'Корзина | Проспект Транс',
    'keywords' => 'корзина, service, компания, автосервис, мерседес бенц, актрос',
    'description' => 'Информация для покупателя.',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/card.blade.php ENDPATH**/ ?>