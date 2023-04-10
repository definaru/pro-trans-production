<?php
//header('Content-Type: application/json');
$input = '<p data-placeholder="Опишите товар здесь..."><strong>Материал:</strong> Изделие металлическое цилиндрическое с роликом.<br><strong>Описание:</strong> Толкатель клапана распредвала ДВС.<br><strong>Производитель:</strong> Daimler Truck AG<br><strong>Адрес:</strong> Россия, Московская область, г. Мытищи</p>';

echo $seo::keywords($input);
?>