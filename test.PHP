<?php

echo "PHP работает!\n";

$name = 'Amazon rewriter';
$version = 1.0;
$is_active = true;
$price = 'Много';

echo "Проект: $name\n";
echo "Версия: $version\n";
echo "Активен: " . ($is_active ? "да" : "нет") . "\n\n";

function amazon_repricer($price) 
{echo "Стоимость: $price\n";}

amazon_repricer($price);

for ($i = 0; $i < 5; $i++){
    echo $i . "\n";
}

$products = ['Phone', 'Laptop', 'Tablet'];

foreach ($products as $product){
    echo $product . "\n";
}

$product_prices = [
    "Phone" => 299, "Laptop" => 999, "Tablet" => 499
];

foreach($product_prices as $name => $price) {
    echo "$name: \$$price\n";
}

$myname = readline();
echo "Вы ввели: $myname\n\n";
$input1 = readline('Ввидите число1:');
$input2 = readline('Введите число2:');
$number1 = (int)$input1;
$number2 = (int)$input2;
function calc1($number1, $number2) {
    $result1 = $number1 + $number2;
    print "$result1\n";
}
function calc2($number1, $number2) {
    $result2 = $number1 - $number2;
    print "$result2\n";
}

function calc3($number1, $number2) {
    $result3 = $number1 * $number2;
    print "$result3\n";
}
function calc4($number1, $number2) {
    if ($number2 == 0) {
        $result4 = "ошибка деления на 0\n";
    }
    else $result4 = $number1 / $number2;
    print "$result4\n";
}



calc1($number1, $number2);
calc2($number1, $number2);
calc3($number1, $number2);
calc4($number1, $number2);

function myfisttry($myname){
    echo "Досвидания, $myname\n\n";
}
myfisttry($myname);

?>