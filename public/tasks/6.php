<?php
/*Напишите функцию min_even(array $arr): int
Найдите наименьший четный(по значению) элемент массива.
В массиве [1, 2, 3, 4] - 2 наименьший четный элемент.*/

function min_even(array $arr): int
{
    $arrayWithEven = array();
    foreach ($arr as $num) {
        if ($num != 0 && $num % 2 == 0) {
            $arrayWithEven[] = $num;
        }
    }
    return min($arrayWithEven);
}

var_dump(min_even([1, 2, 4, 5, 3, 2, 3, 0]), assert(min_even([1, 2, 3, 4, 5, 6]) == 2));
//php -d assert.active=1 -d assert.exception=1 6.php


function min_even2(array $arr): int
{
    return min(array_filter($arr, fn($number) => $number !== 0 && $number % 2 === 0));
}
var_dump(min_even2([1, 2, 4, 5, 3, 2, 3, 0]), assert(min_even([1, 2, 3, 4, 5, 6]) == 2));


