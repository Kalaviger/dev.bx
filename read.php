<?php

function ConsoleReader(string $data){

    echo $input . ":";
    $input = trim(fgets(STDIN));

    if ($input === true || $input === false) {

        $input = (bool)$input;

    } else {
        if (is_numeric($input)) {

            $input = +$input;

        } else {
            $input = (string)$input;
        }
    }
    var_dump($input);

    return $input;
}


/* function sumLogic(string $val)
{

    $arr = explode(" ", $val);

    foreach ($arr as &$value) {

        $value = +$value;
    }
    $sum = array_sum($arr);

    if ($sum != 0) {

        echo "Сумма = $sum";

    } else {

        exit('Буквы использовать нельзя!');


    }

    return $sum;
}
*/