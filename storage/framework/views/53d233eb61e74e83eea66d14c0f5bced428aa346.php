<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счет покупателю №<?php echo e($order['name']); ?></title>
    <link rel="shortcut icon" href="<?php echo e(asset('img/prospectdesktopicon.png')); ?>" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <style type="text/css">
        /* * {font-family: "DejaVu Sans", sans-serif;} */
        /* Calibri, Candara, Segoe, Segoe UI, Optima, Arial,  */
        @page  {
            margin: 20px;
        }
        @font-face {
            font-family: 'Prospekt-Trans';           
            src: local('Prospekt-Trans'), url('/fonts/arialuni.ttf') format('ttf');
            font-weight: normal;
            font-style: normal;

        }        
        * {
            font-family: 'Prospekt-Trans', "DejaVu Sans", sans-serif !important;
        }
    </style>
</head>
<body>
    <table class="w-100">
        <tr>
            <th style="width:65%">
                <img src="<?php echo e(asset('img/color_logo.png')); ?>" alt="Logo" style="width: 8rem;">
            </th>
            <th style="width:35%;text-align: right;">
                <p style="margin:0;font-size:14px;">#<?php echo e($order['name']); ?></p>
                <b>ООО "ПРОСПЕКТ ТРАНС"</b>
                <p style="font-size:12px;font-weight: normal"><?php echo e(config('app.address')); ?></p>
            </th>
        </tr>
    </table>

    <table class="w-100">
        <tr>
            <th style="width:50%">
                <p style="font-size:12px;font-weight: normal;">
                    <b>Плательщик:</b> <br />
                    <i><?php echo e($order['agent']['name']); ?></i> <br />
                    <?php echo e($order['agent']['legalAddress']); ?>

                </p>
            </th>
            <th style="width:50%;text-align: right;font-size:12px;font-weight: normal">
                <p style="margin:0;"><b>Дата счета:</b>&#160;<?php echo e(date_format(date_create($order['created']), 'd/m/Y')); ?></p>
                <p style="margin:0;"><b>Срок оплаты:</b>&#160;<?php echo e(date_format(date_create($order['moment']), 'd/m/Y')); ?></p>
            </th>
        </tr>
    </table>
  
    <table class="table table-striped">
        <tr class="text-muted bg-white" style="font-size:11px">
            <th>#</th>
            <th>Наименование</th>
            <th>Кол-во</th>
            <th>НДС</th>
            <th>Скидка</th>
            <th>Цена</th>
        </tr>
        <?php $__currentLoopData = $order['positions']['rows']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr style="font-size:12px">
            <td><?php echo e($loop->iteration); ?></td>
            <td>
                <b><?php echo e($invoice['assortment']['article']); ?></b>&#160;
                <?php echo e($invoice['assortment']['name']); ?>

            </td>
            <td><?php echo e($invoice['quantity']); ?> шт</td>
            <td><?php echo e($invoice['vat']); ?>%</td>
            <td><?php echo e($invoice['discount']); ?>%</td>
            <td><?php echo number_format(($invoice['price']) / 100, 2, '.', ' ') ?> ₽</td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
    </table>

    <table class="w-100">
        <tr>
            <th style="width:60%;font-size:11px;font-weight: normal;color: #999">
                <p>
                    Если у вас есть какие-либо вопросы<br /> относительно этого счета, 
                    используйте следующую контактную информацию:<br /><br />
                    <?php echo e($contact::format_phone(config('app.phone'))); ?><br />
                    <?php echo e(config('app.email')); ?>                   
                </p>
            </th>
            <th style="width:40%;text-align: right;font-size:12px;font-weight: normal;vertical-align: top;">
                <table class="w-100">
                    <tr>
                        <td style="text-align: right;"><b>Промежуточный итог:</b></td>
                        <td style="text-align: right;"><?php echo number_format(($order['sum']) / 100, 2, '.', ' ') ?> ₽</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><b>Кол-во:</b></td>
                        <td style="text-align: right;"><?php echo e($order['positions']['meta']['size']); ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><b>НДС:</b></td>
                        <td style="text-align: right;"><?php echo number_format(($order['vatSum']) / 100, 2, '.', ' ') ?> ₽</td>
                    </tr>
                    <tr style="font-size:14px;">
                        <td style="text-align: right;"><b>Итого:</b></td>
                        <td style="text-align: right;"><?php echo number_format(($order['sum']) / 100, 2, '.', ' ') ?> ₽</td>
                    </tr>
                </table>
            </th>
        </tr>
    </table>
    <hr />
    <p style="font-size:12px;">
        Всего <?php echo e($order['positions']['meta']['size']); ?> <?php echo e($decl::name($order['positions']['meta']['size'])); ?>, 
        на сумму <?php echo $currency::rub(number_format(($order['sum']) / 100, 2, '.', '')); ?>

    </p>
</body>
</html><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/document/pdf.blade.php ENDPATH**/ ?>