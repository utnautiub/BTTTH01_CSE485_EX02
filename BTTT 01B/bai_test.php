<?php
$arrs = [5, 5];

$sum = array_sum($arrs);
$multiple = array_product($arrs);
$diff = array_reduce($arrs, function ($carry, $item) {
return $carry - $item;
});
$div = array_reduce($arrs, function ($carry, $item) {
return $carry / $item;
});

echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = " . $sum . "<br>";
echo "Tích các phần tử = " . implode(' * ', $arrs) . " = " . $multiple . "<br>";
echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = " . $diff . "<br>";
echo "Thương các phần tử = " . implode(' / ', $arrs) . " = " . $div . "<br>";
