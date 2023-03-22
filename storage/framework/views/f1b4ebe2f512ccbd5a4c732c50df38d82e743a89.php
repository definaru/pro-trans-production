<div style="background:#ddd;padding:20px 40px;">
    <div style="background:#fff;padding:20px 40px;border-radius:7px;box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)">
        <p>
            <img src="https://prospekt-parts.com/img/color_logo.png" style="width: 150px" alt="Проспект Транс" />
        </p>
        <h2>Здравствуйте</h2> 
        <p>Вы получили данное письмо, потому что зарегистрировались на сайте <?php echo e(config('app.url')); ?></p>
        <br />
        <p><strong>Логин:</strong> <br /><?php echo e($login); ?></p>
        <p><strong>Ваш временный пароль:</strong> <br /><?php echo e($password); ?></p>
        <p style="color: red">ОБЯЗАТЕЛЬНО ПОМЕНЯЙТЕ ПАРОЛЬ ПОСЛЕ ВХОДА !</p>
        <hr/>
        <p>
            <small style="color: #999">
                © <?php echo e(date('Y')); ?> - <?php echo e(config('app.name')); ?>. <?php echo app('translator')->get('Все права защищены.'); ?>
            </small>
        </p>
    </div>
</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/mail/newuser.blade.php ENDPATH**/ ?>