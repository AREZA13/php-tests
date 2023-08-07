<?php
/*Напишите функцию min_even(array $arr): int
Найдите наименьший четный(по значению) элемент массива.
В массиве [1, 2, 3, 4] - 2 наименьший четный элемент.*/

function min_even(array $arr): int
{
    $arrayWithEven = array();
    foreach ($arr as $num) {
        if ($num != 0 && $num % 2 == 0) {
            array_push($arrayWithEven, $num);
        }
    }
    $min = min($arrayWithEven);
    return $min;
}

echo min_even([1, 2, 4, 5, 3, 2, 3, 0]);