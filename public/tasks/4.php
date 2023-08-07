<?php
/*Напишите функцию divisible_by_three(int $max, int $min): array, которая формирует убывающий массив от
$max и до $min из чисел, которые делятся на 3 без отстатка. В тестах проверьте что первый,
последний и любой некрайний элемент списка действительно делятся на 3. Например для
three_devided_range(1002, 0) вернет массив [1002, 999, ... 0]*/

function divisible_by_three(int $max, int $min): array
{
    $sortedNumbers = array();
    foreach (range($max, $min) as $number) {
        array_push($sortedNumbers, $number);
    }

    $three_divided_range = array();
    foreach ($sortedNumbers as $number) {
        if ($number % 3 == 0) {
            array_push($three_divided_range, $number);
        }

    }
    return $three_divided_range;
}

print_r(divisible_by_three(1002, 0));