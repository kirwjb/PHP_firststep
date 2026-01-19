<?php
require 'vendor/autoload.php';

use function Termwind\render;

// Стили как в CSS!
render(<<<'HTML'
    <div class="mx-2 my-1">
        <div class="px-1 bg-green-300 text-black">Зеленый фон</div>
        <div class="px-1 bg-blue-400">Синий фон</div>
        <div class="px-1 bg-yellow-400 text-black">Желтый фон</div>
        <div class="px-1 bg-red-500">Красный фон</div>
        <div class="px-1 bg-yellow-400 text-green">Желтый фон, зеленый текст</div>
    </div>
HTML);

// Динамические стили
$succes = readline('введите 1 или ...');
if ($succes == 1){
    $s = True;
}
else $s = False;

render('<div class="text-'.($s ? 'green' : 'red').'-500">Конец</div>');
?>