<?php

require_once 'read.php';
require_once 'PostFunctionUse.php';

echo 'ведите дане для проверки';

function TddTest()
{
    $vhodnie = ConsoleReader('');

    switch ($vhodnie) {

    case'true':
        print 'роверка на True пройдена';
        return $vhodnie;
        break;

        case'false':
            print 'роверка на false пройдена';
            return $vhodnie;
            break;

        case'!stop':
            print 'роверка на !stop пройдена';
            return null;
            break;

        case'1.3':
            print 'роверка на 1.3 пройдена';
            return $vhodnie;
            break;

        case'test':
            print 'роверка на test пройдена';
            return $vhodnie;
            break;

        case'1':
            print 'роверка на 1 пройдена';
            return $vhodnie;
            break;

    default:
        print 'Ни одной проверки не прошло';
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







