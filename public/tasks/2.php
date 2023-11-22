<?php
/*Создать функцию even_to_zero(int $number)
Которая цифры на четных ПОЗИЦИЯХ занулит.
Например, из 12345 получается число 10305.
Внимание! Важна позиция цифры, а не значение*/
/*function evenToZero(int $number)
{
    $arrayToString = str_split((string)$number);

    $array = array_map( // [1,2,...]
        'intval',
        $arrayToString // ['1','2,...]
    );

    for ($i = 0; $i < count($array); $i++) {
        if ($i % 2 !== 0) {
            $array[$i] = 0;
        }
    }

    return intval(implode("", $array));
}*/

function evenToZero2(int $number): int
{
    $array = str_split((string)$number);

    foreach ($array as $key => $value) {
        if ($key % 2 !== 0) {
            $array[$key] = 0;
        }
    }

    return (int)(implode("", $array));
}

var_dump(evenToZero2(12345), assert(evenToZero2(12345) == 10305), assert(evenToZero2(666666) == 606060));
//php -d assert.active=1 -d assert.exception=1 2.php
