<div style="background:#ddd;padding:20px 40px;">
    <div style="background:#fff;padding:20px 40px;border-radius:7px;box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)">
        <p>
            <img src="https://prospekt-parts.com/img/color_logo.png" style="width: 150px" alt="Проспект Транс" />
        </p>
        <h2>Здравствуйте</h2> 
        <p>Спасибо за выбор нашего сервиса.</p>
        <p>На этот адрес мы пришлём вам счёт.</p>
        <p>По всем вопросам, обращайтесь к нашему менеджеру.</p>
        <br />
        <strong>+7 (901) 733-18-66</strong>
        <?php /*
            Ваш шестизначный код для подтверждения 
            <br /><b>{{$pin}}</b>        
        */ ?>
        <hr/>
        <p>
            <small style="color: #999">
                © <?php echo e(date('Y')); ?> - <?php echo e(config('app.name')); ?>. <?php echo app('translator')->get('Все права защищены.'); ?>
            </small>
        </p>
    </div>
</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/mail/verify.blade.php ENDPATH**/ ?>