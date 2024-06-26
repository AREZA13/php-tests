<?php
/*Напишите функцию min_sum_elements(array $arr): array
    которая возвращает два соседних элемента, сумма которых минимальна.
В массиве [1, 2, 3, 4] это элементы [1, 2].*/

function min_sum_elements(array $arr): array
{
    $minSum = $arr[0] + $arr[1];
    $minPara = [$arr[0], $arr[1]];
    for ($i = 1; $i < count($arr) - 1; $i++) {
        $sum = $arr[$i] + $arr[$i + 1];
        if ($sum < $minSum) {
            $minSum = $sum;
            $minPara = [$arr[$i], $arr[$i + 1]];
        }
    }
    return $minPara;
}


var_dump(min_sum_elements([1, 2, 4, 5, 12, 342, 5, 0, 1]), assert(min_sum_elements([1, 2, 4, 5, 12, 342, 5, 0, 1]) == [0, 1]));
//php -d assert.active=1 -d assert.exception=1 7.php

/*SOLVED TASK USING Declarative programming PARADIGM */
function min_sum_elements2(array $arr): array
{
    return array_filter($arr,
        static function ($element, $index) use ($arr)
    {
        if ($index < count($arr) - 1)
        {
            $sum = $element + $arr[$index + 1];
            return $sum === min(array_map(static function ($e) use ($arr, $index) {
                    return $arr[$index] + $e;
                }, array_slice($arr, $index + 1)));
        }
        return false;
    }, ARRAY_FILTER_USE_BOTH);
}
