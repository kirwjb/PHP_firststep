<?php

$data = [
    'name' => 'Amazon Product',
    'price' => 199.99,
    'features' => ['wireless', 'noise cancelling'],
    'in_stock' => true
];


$serialized = serialize($data);
echo "Сериализованные данные:\n";
echo $serialized . "\n\n";


file_put_contents('product.pickle', $serialized);


$loaded = unserialize(file_get_contents('product.pickle'));
echo "Загруженные данные:\n";
print_r($loaded);


echo "\nДанные одинаковы? " . ($data == $loaded ? '✅ Да' : '❌ Нет');
?>