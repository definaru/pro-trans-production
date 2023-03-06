

<?php $__env->startSection('title', 'О Компании'); ?>

<?php $__env->startSection('content'); ?>
<div class="w-100" style="background-image: url(/img/stacey-gabrielle-koenitz-rozells.jpg);background-position: 0px -1005px;background-attachment: fixed;background-size: cover;height: 250px;text-shadow: 1px 2px 3px #000">
    <div class="d-flex align-items-center justify-content-center h-100" style="background-color: #00000059">
        <h2 class="text-white pt-5 mb-0">О Компании</h2>
    </div>
</div>
<section class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text">
                <div class="d-flex align-items-center justify-content-center gap-4 mb-5">
                    <img src="/img/guayaquillib/renault.png" alt="Проспект Транс, Renault" style="width: 40px" />
                    <img src="/public/img/mercedes-benz.png" alt="Проспект Транс, Mercedes-Benz" style="width: 40px" />
                    <img src="/img/guayaquillib/volvo.png" alt="Проспект Транс, Volvo" style="width: 40px" />
                </div>
                <h2 class="fw-bold text-center mb-4">ООО "Проспект Транс" &#128188;</h2>
                <hr class="bar" />
                <p class="text-justify"><strong>Prospekt Parts</strong> — крупнейший дистрибьютор автомобильных запасных частей, 
                компонентов и расходных материалов на рынке Восточной Европы. 
                Компания ведет отсчет своей истории с 2019 года и на сегодняшний день 
                располагает развитой филиальной сетью в Российской Федерации и Турции.</p>

                <p class="text-justify">Prospekt Parts предлагает широкий выбор запасных частей для грузовых автомобилей европейских, 
                японских, корейских и американских марок. Товарное предложение включает более <strong>40 000</strong> 
                артикулов запасных частей для американских и европейских автомобилей — 
                <em>Volvo</em>, <em>Renault</em>, <em>DAF</em>, <em>Mercedes-Benz</em>.</p>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/index', [
    'title' => 'О Компании | Проспект Транс',
    'keywords' => 'сервис, service, компания, автосервис, мерседес бенц, актрос',
    'description' => 'Информация о компании.',
    'image' => 'https://prospekt-parts.com/img/5464765787695.jpg'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/about.blade.php ENDPATH**/ ?>