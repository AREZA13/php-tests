<?php
/*аписать функцию array_double, которая принимает на вход массив чисел, например [1,2,3]
//и возвращает массив, в котором все числа умножены на 2, например [2, 4, 6]*/


/*function array_double(array $array): array
{
    foreach ($array as &$value) {
        $value = $value * 2;
    }

    return $array;
}*/


function array_double2(array $array): array
{
    $returnArray = [];

    foreach ($array as $value) {
        $returnArray[] = $value * 2;
    }

    return $returnArray;
}
var_dump(array_double2([1,2,3,4]));
echo '<br />';
echo '<br />';
var_dump(assert(array_double2([1, 2, 3, 4]) == [2, 4, 6, 8]));