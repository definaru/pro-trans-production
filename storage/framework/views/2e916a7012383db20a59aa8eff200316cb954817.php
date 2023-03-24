

<?php $__env->startSection('title', 'Контакты'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-100 bg-primary" style="height: 170px">
    <div class="d-flex justify-content-center align-items-center h-100" style="background-color: #00000059">
        <h2 class="text-white pt-5 mb-0 mt-1">Контакты</h2>
    </div>
</div>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text">
                    <h3 class="text-dark mb-4">ООО «Проспект Транс»</h3>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <p><strong>ИНН:</strong> 9715366031</p>
                            <p><strong>ОГРН:</strong> 1197746624107</p>
                            <p><strong>КПП:</strong> 771501001</p>   
                            
                            <iframe src="https://yandex.ru/sprav/widget/rating-badge/8347363005?type=rating" width="150" height="50" frameborder="0"></iframe>         
                            
                            <div class="d-flex align-items-center gap-3 mt-5">
                                <div class="border p-2" style="width:100px">
                                    <img src="/img/qr.png" class="w-100" alt="QR код" />
                                </div>      
                                <div>
                                    <strong>QR-code Визитка</strong>  
                                    <p class="m-0">для мобильного телефона.</p> 
                                    <a href="https://yandex.ru/maps/-/CCUG7IeaKC" class="badge bg-dark text-decoration-none" target="_blank" rel="noopener noreferrer">
                                        Оставить отзыв
                                    </a>
                                </div>                          
                            </div>
                            <div class="d-block mt-3">
                                <a href="/doc" class="text-muted">Юридическая информация</a>
                                
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="d-flex flex-column border rounded p-3">
                                <strong>По вопросам сотрудничества: </strong> 
                                <?php echo $contact::getEmail(config('app.email'), ['text-muted']); ?>

                            </p>
                            <p class="d-flex flex-column border rounded p-3">
                                <strong>Связаться с менеджером:</strong> 
                                <?php echo $contact::getPhone(config('app.phone'), ['text-muted']); ?>

                            </p>
                            <p class="d-flex flex-column border rounded p-3">
                                <strong>Связаться с тех.поддержкой:</strong> 
                                <?php echo $contact::getPhone('89151389077', ['text-muted']); ?>

                            </p>
                            <p class="d-flex flex-column border rounded p-3">
                                <strong>Юридический адрес:</strong> 
                                <?php echo e(config('app.address')); ?>

                            </p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-light border-top">
    <p class="container mb-1 text">
        <strong>Фактический Адрес:</strong> 
        <a href="https://yandex.ru/maps/-/CCUG7IeaKC" class="text-dark" target="_blank" rel="noopener noreferrer">
            141006, г.Мытищи, Московская область, 4536-й проезд, стр. 10
        </a> 
    </p>
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Acb78d2e01e4906db46d1cb905adc20776626bb0d53f91909978164445bf6ffa7&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => 'Контакты | Проспект Транс',
    'keywords' => 'контакты, сервис, service, чинить, автосервис, мерседес бенц, актрос',
    'description' => 'Контактная информация компании ООО "Проспект Транс"',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/contact.blade.php ENDPATH**/ ?>