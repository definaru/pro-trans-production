<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> <?php echo e($errorCode); ?></title>
    <link rel="shortcut icon" href='/img/prospectdesktopicon.png' type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body class="bg-dark">
    <div class="d-flex flex-column justify-content-center vh-100">
        <div class="text-center text-black align-self-center">
            <span class="text-danger material-symbols-outlined fs-1">warning</span>
            <h1 class="text-danger"><?php echo e($title); ?> <?php echo e($errorCode); ?></h1>
            <p class="text-xl text-muted">               
                <?php echo e($text); ?>

                <div>
                    <a href="<?php echo e(url('/dashboard')); ?>" class="btn btn-primary px-5">Назад</a>
                </div>
            </p>
        </div>
    </div>
</body>
</html><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/error.blade.php ENDPATH**/ ?>