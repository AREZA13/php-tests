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
        if ($number % 3 === 0) {
            array_push($three_divided_range, $number);
        }

    }
    return $three_divided_range;
}

var_dump(assert(divisible_by_three(1002, 1002) == [1002]), assert(divisible_by_three(333, 333) == [333]));
//php -d assert.active=1 -d assert.exception=1 4.php


/*Легко? - тогда попробуйте решить задачи так, чтобы тело всех функций начиналось с return. Не используйте call_user_func.*/

function divisible_by_threeDecloration(int $max, int $min): array
{
    return array_filter(range($max, $min), fn($number) => $number % 3 === 0);

}
var_dump(divisible_by_threeDecloration(150,100));
