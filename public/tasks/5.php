<?php
/*Напишите функцию count_even(array $arr): int,
которая считает количество четных чисел в массиве.
В массиве [1, 2, 3] - только 1 четный элемент.*/

function count_even(array $arr): int
{
    $count = 0;
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            $count++;
        }
    }
    return $count;
}

echo count_even([1, 2, 3, 4, 5, 6]);