<?php
    $options = [
        [
            'name' => 'По артикулу',
            'value' => 'article'
        ],
        [
            'name' => 'По наименованию',
            'value' => 'name'
        ]
    ];
    $size = session('search') ? session('search')['meta']['size'] : '';
?>


<?php $__env->startSection('title', $deal::status() === '1' ? 'Поиск запчастей' : 'Статус договора'); ?>

<?php $__env->startSection('content'); ?>

    <?php if($deal::status() === '0'): ?>
        <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'info','message' => 'Договор составлен. Нужно прислать подписанный договор с печатю. Два экземпляра']); ?>
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
        <strong class="d-grid mb-3">Варианты отправки документов:</strong>
        
        <ul class="d-grid gap-3">
            <li>Скан документов с подписью и печатью в PDF - <i><?php echo $contact::getEmail('manager@prospekt-parts.com', ['text-dark']); ?></i></li>
            <li>На бумаге, формата А4, почтой - <i>100111, А/Я 1245, г. Мытищи</i> <br />
               <strong>Кому:</strong> &laquo;ООО Проспект Транс&raquo;</li>
        </ul>  
    <?php elseif($deal::status() === 'z'): ?>
        <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => 'Договор не заключён']); ?>
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
    <?php elseif($deal::status() === '2'): ?>
        <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','message' => 'Договор расторгнут. Вы не можете пользоваться данной платформой']); ?>
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
    <?php elseif($deal::status() === '1'): ?>
    <form action="/dashboard/search" method="post" class="card shadow-sm border-0 mb-5 mt-3">
        <?php echo csrf_field(); ?>
        <div id="type" class="card-body d-flex align-items-center gap-2">
            <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="border rounded">
                <input type="radio" name="type" class="d-none" value="<?php echo e($item['value']); ?>" <?php if($item['value'] === old('type')): ?> checked <?php endif; ?> />
                <span><?php echo e($item['name']); ?></span>
            </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <label class="border rounded" data-bs-toggle="modal" data-bs-target="#vinModal">
                <input type="radio" name="type" class="d-none" value="vin" />
                <span>Запрос по VIN</span>
            </label>
            <!-- error('type')
                <label class="d-flex align-items-center gap-2 text-danger font-monospace">
                    <span class="fs-3">←</span> 
                    укажите, по какому параметру искать
                </label>
            enderror -->
        </div>
        <div id="filter" class="card-body pt-0 d-flex gap-2">
            <input 
                type="text" 
                name="text" 
                list="searchlist"
                class="form-control" 
                value="<?php echo e(session('text') ? session('text') : old('text')); ?>" 
                placeholder="Поиск..." 
            />
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
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['color' => 'danger','icon' => 'search','type' => 'submit','text' => 'Найти']); ?>
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
    <?php if(session('search')): ?>
        <?php if($size === 0): ?>
        <p>По запросу <strong>"<?php echo e(session('text')); ?>"</strong> ничего не найдено</p>
        <?php else: ?>
        <p><?php echo e($decl::search($size)); ?> 
            <?php if($size !== 1): ?>
                &#160;<span class="badge bg-danger rounded-pill"><?php echo e($size); ?></span>
            <?php endif; ?>
        </p>        
        <?php endif; ?>
        <div class="row">
            <?php $__currentLoopData = session('search')['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 mb-3" :class="[!isOpen ? 'col-lg-3' : 'col-lg-4']">
                <div class="card card-data border-0 shadow">
                    <a href="/dashboard/product/details/<?php echo e($item['id']); ?>" class="card-body pb-0 position-relative">
                        <div class="d-flex align-items-center gap-1 z-3 position-absolute px-2 rounded-2 bg-light m-2">
                            <span class="material-symbols-outlined fs-6 text-danger">favorite</span>
                            <small><?php echo e(rand(4, 5)); ?>.0 рейтинг</small>
                        </div>
                        <img 
                            src="<?php echo e($images::src($item['id'])); ?>" 
                            class="card-img-top rounded" 
                            alt="<?php echo e($item['name']); ?>" 
                        />
                    </a>
                    <div class="card-body">
                        <h5 class="card-title fs-5 mb-3" style="height: 48px">
                            <a href="/dashboard/product/details/<?php echo e($item['id']); ?>" class="text-dark fw-bold text-decoration-none">
                                <?php
                                    $str = str_replace(
                                        mb_strtolower(session('text')), 
                                        '<mark class="rounded py-0">'.mb_strtolower(session('text')).'</mark>', 
                                        mb_strtolower($item['name'])
                                    );
                                    $str = mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1, mb_strlen($str));
                                    echo $str;
                                ?>
                            </a>
                        </h5>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <?php if($item['quantity'] == 0): ?>
                                    <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => 'danger','text' => 'Нет в наличии']); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => '34617','text' => 'В наличии '.e($item['quantity']).'']); ?>
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
                            </div>
                            <h5><?php echo $currency::summa($item['salePrices'][0]['value']); ?></h5> 
                        </div>
                        <hr style="color: #ddd" />
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <div>
                                    <img 
                                        src="/img/mercedes-benz.png" 
                                        alt="Mercedes-Benz" 
                                        style="width: 37px;height: 37px"
                                    />
                                </div>
                                <div class="lh-sm">
                                    <small class="text-dark fw-bold d-block w-100">
                                        <?php echo e($item['article']); ?>                                            
                                    </small>
                                    <strong class="text-secondary">Mercedes-Benz</strong>
                                </div>
                            </div>
                            <div>
                                <?php if($item['quantity'] == 0): ?>
                                <div
                                    id="preorder<?php echo e($item['id']); ?>"
                                    data-order="<?php echo e($item['id']); ?>,<?php echo e($item['article']); ?>,<?php echo e($item['name']); ?>,1,<?php echo e($item['salePrices'][0]['value']); ?>"
                                    v-on:click="addToOrder('<?php echo e($item['id']); ?>')"
                                >
                                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','icon' => 'add_shopping_cart','color' => 'secondary','text' => '']); ?>
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
                                        id="card<?php echo e($loop->iteration); ?>" 
                                        data-card="<?php echo e($item['id']); ?>,<?php echo e($item['article']); ?>,<?php echo e($item['name']); ?>,1,<?php echo e($item['salePrices'][0]['value']); ?>,<?php echo e($item['salePrices'][0]['value']); ?>" 
                                        v-on:click="addToCard(<?php echo e($loop->iteration); ?>)"
                                    >
                                        <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','icon' => 'add_shopping_cart','color' => 'dark','text' => '']); ?>
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
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
    <?php endif; ?>


    


    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <strong>Admin-Панель</strong> 
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 mb-5 mt-3">
                    <div class="card-body">
                        <a href="/dashboard/accounts" class="d-flex align-items-center text-decoration-none">
                            <div class="p-2">
                                <span class="material-symbols-outlined text-secondary fs-1">inventory</span>
                            </div> 
                            <div class="p-2 flex-grow-1">
                                <h5 class="fw-bold text-dark m-0">Счета</h5> 
                                <small class="text-muted">Список всех счетов</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 mb-5 mt-3">
                    <div class="card-body">
                        <a href="/dashboard/orders" class="d-flex align-items-center text-decoration-none">
                            <div class="p-2">
                                <span class="material-symbols-outlined text-secondary fs-1">order_approve</span>
                            </div> 
                            <div class="p-2 flex-grow-1">
                                <h5 class="fw-bold text-dark m-0">Заказы</h5> 
                                <small class="text-muted">Список всех заказов</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>            
            <div class="col-12 col-lg-4">
                <div class="card shadow-sm border-0 mb-5 mt-3">
                    <div class="card-body">
                        <a href="/dashboard/users" class="d-flex align-items-center text-decoration-none">
                            <div class="p-2">
                                <span class="material-symbols-outlined text-secondary fs-1">group</span>
                            </div> 
                            <div class="p-2 flex-grow-1">
                                <h5 class="fw-bold text-dark m-0">Пользователи</h5> 
                                <small class="text-muted">Список всех пользователей</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    
    <!-- <?php if(auth()->check() && auth()->user()->hasRole('customer')): ?>
        <p>Project Manager Panel</p> 
    <?php endif; ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <strong>Admin Panel</strong> 
    <?php endif; ?> -->

    <?php /*
    <div class="row">
        <div class="col-md-12">
            Список категорий
        </div>
    </div>    
    <div class="row">
        <div class="col-md-4">
            @component('App\View\Components\CategoryCard', 'category-card', ['icon' => 'oil_barrel','header' => 'Масла','category' => 'smtp'])
<?php $component->withAttributes([]); ?>
@endComponentClass
        </div>
    </div>    
    */ ?>


    <div class="modal fade" id="vinModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <form class="modal-content border-0" novalidate @submit.prevent="Save" v-if="!send">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5">Заказ по VIN номеру</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <div class="mt-2">
                        <input 
                            type="text" 
                            class="form-control" 
                            :class="[error.vin && vin === '' ? 'is-invalid' : '']"
                            v-model="vin" 
                            placeholder="Укажите VIN номер" 
                        />
                        <div class="invalid-feedback d-block m-0" v-if="error.vin && vin === ''">
                            Пожалуйста, укажите VIN номер модели
                        </div>
                    </div>
                    <div class="mt-2">
                        <textarea 
                            rows="5" 
                            class="form-control" 
                            :class="[error.spares && spares === '' ? 'is-invalid' : '']"
                            v-model="spares" 
                            placeholder="Укажите список запчастей"
                        >
                        </textarea>
                        <div class="invalid-feedback d-block m-0" v-if="error.spares && spares === ''">
                            Пожалуйста, напишите через запятую, какие запчасти вам нужны
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <div class="btn btn-outline-light text-dark" data-bs-dismiss="modal">Отмена</div>
                    <button type="submit" class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center" v-if="!loading">
                        <span class="material-symbols-outlined spin">autorenew</span>
                        Отправляю...
                    </button>
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['color' => 'dark','icon' => 'forward','type' => 'submit','text' => 'Отправить менеджеру']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['v-on:click' => 'Send','v-else' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>
                </div>
            </form>
            <div class="modal-content border-0" v-else>
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5">Заказ по VIN номеру</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body py-0">
                    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','message' => 'Ваша заявка принята.','close' => 'false']); ?>
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
                </div>
            </div>
        </div>
    </div>

<?php if($deal::status() === 'z'): ?>
    <div data-bs-backdrop="static" data-bs-keyboard="false" class="modal fade show" aria-modal="true" role="dialog" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5 fw-bold">Здравствуйте</h1>
                </div>
                <div class="modal-body py-0">
                    <p>
                        В настоящий момент, вы не можете пользоваться нашей платформой,
                        так как у вас не заключён договор. Чтобы начать пользоваться, нажмите кнопку:
                    </p>
                </div>
                <div class="modal-footer border-0">
                    <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','href' => '/dashboard/document/agreement','color' => 'dark','icon' => 'quick_reference','text' => 'Заключить договор']); ?>
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
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/dashboard.blade.php ENDPATH**/ ?>