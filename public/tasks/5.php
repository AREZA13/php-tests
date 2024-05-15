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

var_dump(count_even([1, 2, 3, 4, 5, 6]), assert(count_even([1, 2, 3, 4, 5, 6]) == 3));


/* тогда попробуйте решить задачи так, чтобы тело всех функций начиналось с return. Не используйте call_user_func.*/
function count_evenDeclarative(array $arr): int
{
    return count(array_filter($arr, fn($number) => $number % 2 === 0));
}



