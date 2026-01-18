<?php

$text = readline("Вставтье сюда свой текст");
echo "Ваш текст $text\n";
$text_len = strlen($text);
$text_symb_len = mb_strlen($text,"UTF-8");
$text_word = str_word_count($text);
echo "Длина вашего текста в байтах $text_len\n 
Длина вашего текста в символах $text_symb_len\n\n
Количество слов $text_word";


function SMS_calc(){
    $phone = readline('Введите ваш  SMS. До 160 слов бесплатно!');
    echo "$phone\n";

    $cost = 0.0;
    $extra_cost = 0.0;

    $phone_len = str_word_count($phone);
    if ($phone_len <= 160){
        $total_cost = 0;
        echo "($phone_len/160) Стоимость услуги $total_cost рублей\n";
    }
    if ($phone_len > 160){
        $extra_cost = ($phone_len - 160) * 0.01; 
        $total_cost = $cost + $extra_cost;
        echo "($phone_len/160) Стоимость услуги $total_cost рублей\n";

    }

    echo "\nДетали:\n";
    echo "- Слов: $phone_len\n";
    echo "- Бесплатных: 160\n";
    echo "- Сверх лимита: " . max(0, $phone_len - 160) . "\n";
    echo "- Стоимость: $total_cost руб.\n";
}

echo "------SMS CALCULATOR------\n\n";
SMS_calc();

?>