<?php
/* Написать функцию `create_min_max_validator(int $min, int $max)`
которая возвращает функцию принимающую один аргумент,
функция проверяет входит ли аргумент в диапазон от $min до $max включительно.*/

function create_min_max_validator(int $min, int $max)
{
    return function ($inputNumber) use ($min, $max) {
        if ($inputNumber <= $max && $inputNumber >= $min) {
            return true;
        } else {
            return false;
        }
    };
}

$validator = create_min_max_validator(2, 5);
assert($validator(10) === false);
assert($validator(2) === true);
assert($validator(3) === true);

//php -d assert.active=1 -d assert.exception=1 10.php
