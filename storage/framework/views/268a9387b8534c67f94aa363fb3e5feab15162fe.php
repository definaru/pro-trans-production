
<?php $__env->startSection('title', isset($user->contract->name) ? 'Детали договора' : 'Заключение договора'); ?>

<?php $__env->startSection('content'); ?>

<?php if(session('status')): ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'success','close' => 'true','message' => ''.e(session('status')).'']); ?>
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
<?php endif; ?>

<?php if(session('error')): ?>
    <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Alert::class, ['type' => 'danger','close' => 'true','message' => ''.e(session('error')).'']); ?>
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
<?php endif; ?>

<!-- isset($user->contract->name) -->
<?php if(isset($user->contract->name)): ?>
    <?php if(isset($contract)): ?>
    <div class="d-flex align-items-center gap-3 d-print-none">
        <?php if(isset($contract['state']['color'])): ?>
        <?php if (isset($component)) { $__componentOriginalda0d8d2653810dacd9bb554e8a3387b55f861c94 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Badge::class, ['color' => ''.e($contract['state']['color']).'','text' => ''.e($contract['state']['name']).'']); ?>
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
        <span class="d-flex align-items-center gap-1 text-secondary">
            <span class="material-symbols-outlined fs-5">calendar_month</span>
            <?php echo e($time::parse($contract['updated'])->locale('ru')->translatedFormat('d F Y, H:i')); ?>

        </span>
    </div>
    <div class="card shadow-sm border-0 mt-4">
        <div class="card-body px-5">
            <table class="w-100">
                <tr>
                    <td colspan="2" class="text-center py-5">
                        <h3>ДОГОВОР №<?php echo e($contract['name']); ?></h3>
                    </td>
                </tr>
                <tr>    
                    <td class="w-50">г. Москва</td>
                    <td class="w-50 text-end">
                    <?php echo e($time::parse($contract['moment'])->locale('ru')->translatedFormat('d.m.Y')); ?> г.
                    </td>
                </tr>
            </table>
            <table class="w-100 d-block mt-4">
                <tr>
                    <td>
                        <p>
                            ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ПРОСПЕКТ ТРАНС", именуемое(ый) в
                            дальнейшем ПОСТАВЩИК, в лице <u>&#160;<?php echo e($decl::fio($contract['ownAgent']['director'])); ?>

                                <!-- $dadata::cleanName($contract['ownAgent']['director'])[0]['result_genitive'] -->
                                &#160;</u> ,
                            действующего(ей) на основании устава, с одной СТОРОНЫ, и <?php echo e($contract['agent']['legalTitle']); ?>, 
                            именуемое(ый) в дальнейшем ПОКУПАТЕЛЬ, в лице <u>&#160;<?php echo e($decl::fio($user->contract->name)); ?>

                                <!-- $dadata::cleanName($user->contract->name)[0]['result_genitive'] -->
                                &#160;</u>, 
                            действующего(ей) на основании <u>&#160;<?php echo e($user->contract->action); ?>&#160;</u>, с другой СТОРОНЫ, 
                            а вместе именуемые СТОРОНАМИ, заключили настоящий
                            договор о нижеследующем:  
                            <br />                      
                            <br />             
                        </p>                    
                        <p><b class="text-center d-block w-100">1. ПРЕДМЕТ ДОГОВОРА</b></p>
                        <p>
                            1.1. ПОСТАВЩИК обязуется поставить, а ПОКУПАТЕЛЬ принять и оплатить товары и (или) услуги
                            согласно спецификации (счета, счета-фактуры, накладной), в которой отражаются наименование, цена,
                            количество и общая стоимость товара, и которая является неотъемлемой частью настоящего договора.
                            Стоимость товара указывается без учета налога на добавленную стоимость, постольку ПОСТАВЩИК
                            является субъектом, применяющим упрощенную систему налогообложения в соответствии с главой 26.2
                            НК РФ.                        
                        </p>
                        <p>
                            1.2. Сумма договора определяется путем сложения сумм всех поставок, осуществляемых в рамках и в
                            течение срока действия этого Договора, в валюте РФ.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">2. ПРАВА И ОБЯЗАННОСТИ СТОРОН В ДОГОВОРЕ</b></p>
                        <p><b class="text-center d-block w-100">2.1. Права и обязанности ПОСТАВЩИКА:</b></p>
                        <p>
                            2.1.1. Передать ПОКУПАТЕЛЮ товар в количестве, ассортименте и по ценам, указанным в товарной
                            накладной.                        
                        </p>
                        <p>
                            2.1.2. В момент отгрузки товаров или в течении 5 (пяти) рабочих дней после отгрузки товаров
                            ПОСТАВЩИК должен предоставить ПОКУПАТЕЛЮ счет-фактуру и сертификат качества на товар.                        
                        </p>
                        <p>
                            2.1.3. Переданный товар должен соответствовать стандартам страны изготовителя и быть
                            сертифицированным Российскими Органами Сертификации.                        
                        </p>
                        <p>
                            2.1.4. Упаковка товара должна иметь товарный вид и полностью обеспечивать безопасность и
                            сохранность товара при транспортировке и хранении.                        
                        </p>
                        <p>
                            2.1.5. Отгрузить товар ПОКУПАТЕЛЮ немедленно после оплаты в кассу, либо в течение 3-х рабочих дней
                            с момента получения денег на расчетный счет ПОСТАВЩИКА.                        
                        </p>

                        <p><b class="text-center d-block w-100 mt-5">2.2. Обязанности ПОКУПАТЕЛЯ:</b></p>
                        <p>
                            2.2.1. Принять от ПОСТАВЩИКА товар по накладной в соответствии с требованиями Инструкции о
                            порядке приемки товара по количеству и качеству.                        
                        </p>
                        <p>
                            2.2.2. Выплатить стоимость товара ПОСТАВЩИКУ согласно выставленного счета в течение 5 дней от
                            даты выставления счёта путем перечисления денег на расчетный счет ПОСТАВЩИКА или оплатить
                            стоимость товара согласно спецификации (счета, счёта-фактуры, накладной) в кассу ПОСТАВЩИКА.
                        </p>
                        <p>
                            2.2.3. При нарушении ПОКУПАТЕЛЕМ сроков оплаты по выставленным счетам ПОСТАВЩИК вправе
                            аннулировать счёт и отказать ПОКУПАТЕЛЮ в поставке товара.
                        </p>
                        <p>
                            2.2.4. ПОКУПАТЕЛЬ обязан сообщить ПРОДАВЦУ об изменении своего юридического адреса и своих
                            реквизитов непозднее двух недель с момента их изменения
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">3. ОТВЕТСТВЕННОСТЬ СТОРОН ЗА НАРУШЕНИЕ ДОГОВОРА</b></p>
                        <p>
                            3.1. За нарушение СТОРОНАМИ условий настоящего договора они несут ответственность в соответствии
                            с действующим законодательством.
                        </p>
                        <p>
                            3.2. ПОСТАВЩИК несет ответственность за качество проданного товара.
                        </p>
                        

                        <p><b class="text-center d-block w-100 mt-5">4. ОСОБЫЕ УСЛОВИЯ</b></p>
                        <p>
                            4.1. Поставленный товара вывозится ПОКУПАТЕЛЕМ самостоятельно. По просьбе ПОКУПАТЕЛЯ
                            доставка товара может осуществляться за счет ПОСТАВЩИКА. Стоимость доставки увеличивает цену
                            товара.
                        </p>
                        <p>
                            4.2. Все изменения и дополнения к настоящему договору оформляются только письменным соглашением
                            СТОРОН, которые становятся его неотъемлемой частью.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">5. РАЗРЕШЕНИЕ СПОРОВ</b></p>
                        <p>
                            5.1. Все споры и разногласия СТОРОНЫ будут пытаться решить путем переговоров.
                            Договор считается пролонгированным на следующий год, если ни одна из сторон не заявляет о его
                            расторжении.                        
                        </p>
                        <p>
                            5.2. Неурегулированные путем переговоров спорные вопросы, вытекающие из настоящего договора,
                            СТОРОНЫ передадут на разрешение арбитражного суда г. Москвы.                        
                        </p>
                        <p>
                            5.3. Все споры и разногласия, которые могут возникнуть по настоящему договору или в связи с ним, будут
                            по возможности разрешаться путем переговоров и переписки между Сторонами. В случае если стороны
                            не придут к соглашению, то все споры по настоящему договору и связанные с ним подлежат
                            рассмотрению в Арбитражном суде в соответствии с действующим законодательством РФ. Обращению в
                            арбитражный суд предшествует предъявление претензии, которая должна быть рассмотрена стороной в
                            течение 30 (тридцать) дней с момента получения.                        
                        </p>
                        <p>
                            5.4. В случае изменения почтовых и банковских реквизитов, Стороны обязуются в течение 3 (три) дней в
                            письменной форме известить об этом друг друга.                        
                        </p>
                        <p>
                            5.5. Во всем остальном, что не предусмотрено настоящим договором, Стороны руководствуются
                            действующим законодательством Российской Федерации.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">6. СРОК ДЕЙСТВИЯ ДОГОВОРА</b></p>
                        <p>
                            6.1. Настоящий договор вступает в силу с момента его подписания СТОРОНАМИ и действует
                            неограниченное время.    
                        </p>
                        <p>
                            6.2. Договор может быть расторгнут по требованию любой из СТОРОН после завершения расчетов по
                            нему с предупреждением другой СТОРОНЫ за 30 дней.                        
                        </p>
                        <p>
                            6.3. Принудительное расторжение договора производится в соответствии со ст. 450-453 ГК РФ.
                        </p>
                        <p><b class="text-center d-block w-100 mt-5">7. ЮРИДИЧЕСКИЕ АДРЕСА И РЕКВИЗИТЫ СТОРОН</b></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table class="table table-bordered mb-5">
                            <tr>
                                <td class="w-50 text-center">
                                    <i>ПОСТАВЩИК:</i><br />
                                    <b><?php echo e($contract['ownAgent']['legalTitle']); ?></b>
                                    
                                </td>
                                <td class="w-50 text-center">
                                    <i>ПОКУПАТЕЛЬ:</i><br />
                                    <b><?php echo e($contract['agent']['legalTitle']); ?></b>
                                </td>
                            </tr>
                            <tr>
                                <td><b>ИНН:</b> <?php echo e($contract['ownAgent']['inn']); ?></td>
                                <td><b>ИНН:</b> <?php echo e($contract['agent']['inn']); ?></td>
                            </tr>
                            <tr>
                                <td><b>КПП:</b> <?php echo e($contract['ownAgent']['kpp']); ?></td>
                                <td><b>КПП:</b> <?php echo e($contract['agent']['kpp']); ?></td>
                            </tr>
                            <tr>
                                <td><b>ОГРН:</b> <?php echo e($contract['ownAgent']['ogrn']); ?></td>
                                <td><b>ОГРН:</b> <?php echo e($contract['agent']['ogrn']); ?></td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Юридический адрес:</b> <br />
                                    <?php echo e($contract['ownAgent']['legalAddress']); ?>

                                </td>
                                <td>
                                    <b>Юридический адрес:</b> <br />
                                    <?php echo e($contract['agent']['legalAddress']); ?>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Банк:</b> <?php echo e($contract['ownAgent']['accounts']['rows'][0]['bankName']); ?>

                                </td>
                                <td><b>Банк:</b> <?php echo e($user->contract->bank); ?></td>
                            </tr>
                            <tr>
                                <td><b>р/с:</b> <?php echo e($contract['ownAgent']['accounts']['rows'][0]['accountNumber']); ?></td>
                                <td><b>р/с:</b> <?php echo e($user->contract->rs); ?></td>
                            </tr>
                            <tr>
                                <td><b>БИК:</b> <?php echo e($contract['ownAgent']['accounts']['rows'][0]['bic']); ?></td>
                                <td><b>БИК:</b> <?php echo e($user->contract->bik); ?></td>
                            </tr>
                            <tr>
                                <td><b>к/с:</b> <?php echo e($contract['ownAgent']['accounts']['rows'][0]['correspondentAccount']); ?></td>
                                <td><b>к/с:</b> <?php echo e($user->contract->ks); ?></td>
                            </tr>
                            <tr>
                                <td><b>Тел.:</b> <?php echo e($contact::format_phone(config('app.phone'))); ?></td>
                                <td><b>Тел.:</b> <?php echo e($contact::format_phone($user->contract->phone)); ?></td>
                            </tr>
                            <tr>
                                <td><b>E-mail:</b> <?php echo e($contract['ownAgent']['email']); ?></td>
                                <td><b>E-mail:</b> <?php echo e($user->contract->email); ?></td>
                            </tr>
                        </table>
                        
                        
                        <table class="w-100 mb-5">
                            <tr>
                                <td class="w-50">
                                    <p>_____________________ Генеральный директор</p>
                                    <p><br />&#160;&#160;М.П.</p>
                                </td>
                                <td class="w-50">
                                    <p>_____________________ Генеральный директор</p>
                                    <p><br />&#160;&#160;М.П.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php endif; ?>

    <p></p> 
    <?php if($deal::status() === 'z'): ?>
    <div class="d-flex align-items-center row mt-4">
        <div class="col-12 col-lg-5 d-flex gap-3">
            <form action="/dashboard/action/deal" method="post">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['icon' => 'done','color' => 'dark','type' => 'submit','text' => 'Подтвердить']); ?>
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
            </form>
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','href' => 'agreement/edit','icon' => 'edit','color' => 'outline-dark','text' => 'Редактировать']); ?>
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
        <div class="col-12 col-lg-7">
            <div class="d-flex align-items-center gap-2 bg-soft-warning rounded p-3">
                <span class="material-symbols-outlined fs-1 text-warning">warning</span>
                <small class="text-muted lh-1">
                    Пожалуйста, внимательно ознакомьтесь с деталями договора. Если всё указано верное, нажмите кнопку "Подтвердить".
                    На данный момент вы всё ещё можете отредактировать данный договор.
                </small>                
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="d-flex align-items-center row mt-4 d-print-none">
        <div class="col-12 col-lg-6 d-flex gap-3">
            <?php if($deal::status() === '2'): ?>
            <?php else: ?>
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'a','color' => 'dark','href' => 'javascript:;','text' => 'Распечатать','icon' => 'print']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['onclick' => 'window.print(); return false;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?> 
            <?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['type' => 'button','color' => 'outline-dark','text' => 'Связаться с менеджером','icon' => 'headset_mic']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['data-bs-toggle' => 'modal','data-bs-target' => '#manager']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>             
        </div>
        <div class="col-12 col-lg-6">
            <?php if($deal::status() === '2'): ?>
            <?php else: ?>
            <small class="text-muted">
                Распечатайте договор и подпишите в двух экземплярах, и отправьте на почту 
                <?php echo $contact::getEmail('info@prospekt-parts.com', ['text-muted']); ?>

                либо на адрес А\Я г. Мытищи, <br />ЭДО Калуга-Астрал
            </small>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>

<?php else: ?>
    <div class="card shadow-sm border-0">
        <form action="/dashboard/agreements" class="card-body" method="post">
            <?php echo csrf_field(); ?>
            <div class="mt-2">
                <label class="fw-bold">Ваше Ф.И.О.</label>
                <input 
                    type="text" 
                    name="name" 
                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                    value="<?php echo e(old('name')); ?>"
                    placeholder="Ваше Ф.И.О." 
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
            <div class="mt-2">
                <label class="fw-bold">Действуете на основании:</label>
                <select name="action" class="form-control <?php $__errorArgs = ['action'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                    <option value="" selected disabled>Действуете на основании...</option>
                    <?php $__currentLoopData = ['устава', 'договоренности и устава', 'учредительного договора']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($value); ?>" <?php if($value === old('action')): ?> selected <?php endif; ?>><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['action'];
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
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mt-2">
                        <label class="fw-bold">Банк:</label>
                        <input 
                            type="text" 
                            name="bank" 
                            class="form-control <?php $__errorArgs = ['bank'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('bank')); ?>"
                            placeholder="Наименование Банка" 
                        />
                        <?php $__errorArgs = ['bank'];
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
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mt-2">
                        <label class="fw-bold">р/с:</label>
                        <input 
                            type="text" 
                            name="rs" 
                            class="form-control <?php $__errorArgs = ['rs'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('rs')); ?>"
                            placeholder="Рассчётный счёт (номер)" 
                        />
                        <?php $__errorArgs = ['rs'];
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
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mt-2">
                        <label class="fw-bold">БИК:</label>
                        <input 
                            type="text" 
                            name="bik" 
                            class="form-control <?php $__errorArgs = ['bik'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('bik')); ?>"
                            placeholder="БИК (номер)" 
                        />
                        <?php $__errorArgs = ['bik'];
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
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mt-2">
                        <label class="fw-bold">к/с:</label>
                        <input 
                            type="text" 
                            name="ks" 
                            class="form-control <?php $__errorArgs = ['ks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('ks')); ?>"
                            placeholder="корр.счёт (номер)" 
                        />
                        <?php $__errorArgs = ['ks'];
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
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="mt-2">
                        <label class="fw-bold">Телефон: ( без пробелов и скобок )</label>
                        <input 
                            type="text" 
                            name="phone" 
                            class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('phone')); ?>"
                            placeholder="Контактный номер телефона" 
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
                </div>
                <div class="col-12 col-lg-6">
                    <div class="mt-2">
                        <label class="fw-bold">E-mail:</label>
                        <input 
                            type="text" 
                            name="email" 
                            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                            value="<?php echo e(old('email')); ?>"
                            placeholder="Контактный E-mail (корпоративный)" 
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
                </div>
            </div>
            <div class="mt-4">
                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['icon' => 'drive_file_rename_outline','color' => 'dark','type' => 'submit','text' => 'Заключить договор']); ?>
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
    </div>
<?php endif; ?>
<div class="modal fade" id="manager" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <form class="modal-content border-0" novalidate @submit.prevent="SendManager('<?php echo e($user->verified); ?>')" v-if="!send">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-5">Обратная связь</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-0">
                <div class="mt-2">
                    <textarea 
                        rows="5" 
                        class="form-control" 
                        :class="[error.message && message === '' ? 'is-invalid' : '']"
                        v-model="message" 
                        placeholder="Опишите здесь ваш вопрос..."
                    >
                    </textarea>
                    <div class="invalid-feedback d-block m-0" v-if="error.message && message === ''">
                        Пожалуйста, напишите ваш вопрос.
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <div class="btn btn-outline-light text-dark px-3" data-bs-dismiss="modal">Отмена</div>
                <button type="submit" class="btn btn-dark px-4 d-flex align-items-center gap-2 justify-content-center" v-if="!loading">
                    <span class="material-symbols-outlined spin">autorenew</span>
                    Отправляю...
                </button>
                <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, ['color' => 'dark','icon' => 'forward','type' => 'submit','text' => 'Отправить менеджеру']); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['v-else' => true,'v-on:click' => 'Sender']); ?>
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
                <h1 class="modal-title fs-5">Обратная связь</h1>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/document/agreement.blade.php ENDPATH**/ ?>