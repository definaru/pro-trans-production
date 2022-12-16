<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счет покупателю №{{$order['name']}}</title>
    <link rel="shortcut icon" href="{{ asset('img/prospectdesktopicon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <style type="text/css">
        /* * {font-family: "DejaVu Sans", sans-serif;} */
        /* Calibri, Candara, Segoe, Segoe UI, Optima, Arial,  */
        @page {
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
                <img src="{{ asset('img/color_logo.png') }}" alt="Logo" style="width: 8rem;">
            </th>
            <th style="width:35%;text-align: right;">
                <p style="margin:0;font-size:14px;">#{{$order['name']}}</p>
                <b>ООО "ПРОСПЕКТ ТРАНС"</b>
                <p style="font-size:12px;font-weight: normal">{{ config('app.address') }}</p>
            </th>
        </tr>
    </table>

    <table class="w-100">
        <tr>
            <th style="width:50%">
                <p style="font-size:12px;font-weight: normal;">
                    <b>Плательщик:</b> <br />
                    <i>{{$order['agent']['name']}}</i> <br />
                    {{$order['agent']['legalAddress']}}
                </p>
            </th>
            <th style="width:50%;text-align: right;font-size:12px;font-weight: normal">
                <p style="margin:0;"><b>Дата счета:</b>&#160;{{date_format(date_create($order['created']), 'd/m/Y')}}</p>
                <p style="margin:0;"><b>Срок оплаты:</b>&#160;{{date_format(date_create($order['moment']), 'd/m/Y')}}</p>
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
        @foreach($order['positions']['rows'] as $invoice)
        <tr style="font-size:12px">
            <td>{{ $loop->iteration }}</td>
            <td>
                <b>{{$invoice['assortment']['article']}}</b>&#160;
                {{$invoice['assortment']['name']}}
            </td>
            <td>{{$invoice['quantity']}} шт</td>
            <td>{{$invoice['vat']}}%</td>
            <td>{{$invoice['discount']}}%</td>
            <td>@php echo number_format(($invoice['price']) / 100, 2, '.', ' ') @endphp ₽</td>
        </tr>
        @endforeach          
    </table>

    <table class="w-100">
        <tr>
            <th style="width:60%;font-size:11px;font-weight: normal;color: #999">
                <p>
                    Если у вас есть какие-либо вопросы<br /> относительно этого счета, 
                    используйте следующую контактную информацию:<br /><br />
                    {{ $contact::format_phone(config('app.phone')) }}<br />
                    {{ config('app.email') }}                   
                </p>
            </th>
            <th style="width:40%;text-align: right;font-size:12px;font-weight: normal;vertical-align: top;">
                <table class="w-100">
                    <tr>
                        <td style="text-align: right;"><b>Промежуточный итог:</b></td>
                        <td style="text-align: right;">@php echo number_format(($order['sum']) / 100, 2, '.', ' ') @endphp ₽</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><b>Кол-во:</b></td>
                        <td style="text-align: right;">{{$order['positions']['meta']['size']}}</td>
                    </tr>
                    <tr>
                        <td style="text-align: right;"><b>НДС:</b></td>
                        <td style="text-align: right;">@php echo number_format(($order['vatSum']) / 100, 2, '.', ' ') @endphp ₽</td>
                    </tr>
                    <tr style="font-size:14px;">
                        <td style="text-align: right;"><b>Итого:</b></td>
                        <td style="text-align: right;">@php echo number_format(($order['sum']) / 100, 2, '.', ' ') @endphp ₽</td>
                    </tr>
                </table>
            </th>
        </tr>
    </table>
    <hr />
    <p style="font-size:12px;">
        Всего {{$order['positions']['meta']['size']}} {{$decl::name($order['positions']['meta']['size'])}}, 
        на сумму {!! $currency::rub(number_format(($order['sum']) / 100, 2, '.', '')) !!}
    </p>
</body>
</html>