<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?> / <?php echo e(config('app.name')); ?> </title>
    <link rel="shortcut icon" href='/img/prospectdesktopicon.png' type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/defina.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.css')); ?>" />
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
</head>
<body>
    <div id="admin" :class="[isOpen ? 'panel' : 'panel-close']" class="d-print-block" v-cloak>
        <?php echo $__env->make('layout.main.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="bg-light content d-print-table w-100">
            <?php echo $__env->make('layout.main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <section style="overflow-y: scroll;height: 83vh" class="d-print-table w-100">
                <div class="container-fluid d-print-table">
                    <div class="row d-print-table">
                        <div class="col-md-12 mt-5 d-print-table">
                            <main class="px-3 pb-5 d-print-block">
                                <div class="d-print-none">
                                    <?php echo $__env->yieldContent('breadcrumbs'); ?>
                                </div>
                                <?php echo $__env->make('layout.main.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </main>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="border-top py-2 d-print-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-muted text-center m-0">
                                <small style="font-size: 12px">Copyright &copy; <?php echo e(date('Y')); ?> 
                                    &middot; Все права защищены. 
                                    &middot; <span class="text-dark"><?php echo e(config('app.name')); ?></span>
                                    | <?php echo e(config('app.email')); ?>

                                    &middot; <a href="/doc/privatepolice" class="text-muted">Политика конфиденциальности</a>
                                </small>
                            </p>                            
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vue.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/defina.admin.min.js')); ?>"></script>

    <script>
        const editor = document.querySelector('#editor');
        if(editor) {
            ClassicEditor
                .create(editor, {
                    placeholder: 'Опишите товар здесь...'
                })
                .catch(error=>{
                    console.error(error);
                });             
        }

        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(
            tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl)
        );
    </script>
</body>
</html><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/layout/main.blade.php ENDPATH**/ ?>