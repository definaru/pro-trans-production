<?php
use Carbon\Carbon;
$testdata = '2023-06-22 17:13:01';
//$data = Carbon::parse($testdata)->format('d-m-Y H:i:s');
$dt = Carbon::createFromFormat('Y-m-d H:i:s', $testdata, 'Europe/Moscow');
//use Illuminate\Support\Facades\Hash;
//$password = Hash::make('378b895a-0600-11ee-0a80-0d4600189f0b');
//header('Content-Type: application/json');
//$input = '<p data-placeholder="Опишите товар здесь..."><strong>Материал:</strong> Изделие металлическое цилиндрическое с роликом.<br><strong>Описание:</strong> Толкатель клапана распредвала ДВС.<br><strong>Производитель:</strong> Daimler Truck AG<br><strong>Адрес:</strong> Россия, Московская область, г. Мытищи</p>';

//echo $seo::keywords($input).'<br/>';
//echo strtotime('11.05.1995').'<br/>';
//echo $password;

echo $dt->toRssString();
?>