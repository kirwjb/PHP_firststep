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

?>