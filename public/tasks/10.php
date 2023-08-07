<?php
/* Написать функцию `create_min_max_validator(int $min, int $max)`
которая возвращает функцию принимающую один аргумент,
функция проверяет входит ли аргумент в диапазон от $min до $max включительно.*/

function create_min_max_validator(int $min, int $max)
{
    return function ($inputNumber) use ($min, $max) {
        if ($inputNumber <= $max && $inputNumber >= $min) {
            echo "Number ($inputNumber) is in range" . "<br>";
        } else {
            echo "Number ($inputNumber) is not in range" . "<br>";
        }
    };

}

$validator = create_min_max_validator(2, 5);
$validator(10);
$validator(2);
$validator(3);