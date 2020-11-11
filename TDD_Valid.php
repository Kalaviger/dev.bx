<?php

require_once 'read.php';
require_once 'PostFunctionUse.php';


echo 'Введите данные для проверки';


function TddTest()
{
    $vhodnie = ConsoleReader('');

    switch ($vhodnie) {

    case'true':
        echo 'Ваши данные '.$vhodnie.PHP_EOL.'Совпали с тест кейсом true'.PHP_EOL;
        echo 'Поздравляю тест пройден!';
        return $vhodnie;
        break;

        case'false':
            echo 'Ваши данные '.$vhodnie.PHP_EOL.'Совпали с тест кейсом false'.PHP_EOL;
            echo 'Поздравляю тест пройден!';
            return $vhodnie;
            break;

        case'!stop':
            echo 'Ваши данные '.$vhodnie.PHP_EOL.'Совпали с тест кейсом !stop'.PHP_EOL;
            echo 'Поздравляю тест пройден!';
            return null;
            break;

        case'1.3':
            echo 'Ваши данные '.$vhodnie.PHP_EOL.'Совпали с тест кейсом 1.3'.PHP_EOL;
            echo 'Поздравляю тест пройден!';
            return $vhodnie;
            break;

        case'test':
            echo 'Ваши данные '.$vhodnie.PHP_EOL.'Совпали с тест кейсом test'.PHP_EOL;
            echo 'Поздравляю тест пройден!';
            return $vhodnie;
            break;

        case'1':
            echo 'Ваши данные 1'.$vhodnie.PHP_EOL.'Совпали с тест кейсом 1'.PHP_EOL;
            echo 'Поздравляю тест пройден!';
            return $vhodnie;
            break;

    default:
        print 'Не выявлено соответствий с тест кейсами';
        break;
}

return $vhodnie;
}

/*
Результаты выполнения функции для разных входных данных.
readFromConsole('', 'true') - true;
readFromConsole('', 'false') - false;
readFromConsole('', '!stop') - null;
readFromConsole('', '1.3') - 1.3;
readFromConsole('', '1') - 1;
readFromConsole('', 'test') = 'test;

*/







