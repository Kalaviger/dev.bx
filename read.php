<?php

function ConsoleReader(string $data){

    echo $data.":";
    $input = trim(fgets(STDIN));

    if($input === true || $input === false){

        $input = (bool)$input;

    } else if (is_numeric($input)){

        $input = +$input;

    } else {
        $input = (string)$input;
    }
    var_dump($input);

    return $input;
}

