<?php
declare(strict_types=1);
//1) Запускаем скрипт и убеждаемся,
// что он падает из-за проваленных assert.
//  Затем  пишем тело функции и "чиним" все ассерты

function factorial(int $n): int
{
    $sum = 1;
    for ($i = 1; $i <= $n; $i++) {
        $sum = $sum * $i;
    }
    return $sum;
}


assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);

/*
2) логика моя.Создать функцию even_to_zero(int $number)
Которая цифры на четных ПОЗИЦИЯХ занулит.
Например, из 12345 получается число 10305.
Внимание! Важна позиция цифры, а не значение.*/

function evenToZero(int $number)
{
    $arrayToString = str_split((string)$number);

    $array = array_map( // [1,2,...]
        'intval',
        $arrayToString // ['1','2,...]
    );

    for ($i = 0; $i < count($array); $i++) { //это я подсмотрел
        if ($i % 2 !== 0) {
            $array[$i] = 0;
        }
    }

    return intval(implode("", $array)); //это я подсмотре
}


function evenToZero2(int $number): int
{
    $array = str_split((string)$number);

    foreach ($array as $key => $value) {
        if ($key % 2 !== 0) {
            $array[$key] = 0;
        }
    }

    return (int)(implode("", $array));
}


assert(evenToZero2(12345) == 10305);
assert(evenToZero2(666666) == 606060);

/*3) Создать функцию is_palindrome(string $word) которая выведет
true если строка является палиндромом(читается одинаково в зад и вперед,
например: шалаш) и иначе false. Внимание! Обязательно включите в
проверки русские слова "шалаш" и "такси".*/

/** Poebota
 * @param string $word parameter description
 * @return bool True if the word in parameter is palindrome
 */
function is_palindrome(string $word): bool
{
    $stringAsArray = preg_split('//u', $word, -1, PREG_SPLIT_NO_EMPTY);
    $mirroredArray = array_reverse($stringAsArray);

    foreach ($stringAsArray as $key => $value) {
        if ($mirroredArray[$key] != $stringAsArray[$key]) {
            return false;
        }
    }

    return true;
}

assert(is_palindrome('шалаш') == true);
assert(is_palindrome('такси') == false);


//4) Написать функцию array_double, которая принимает на вход массив чисел, например [1,2,3]
//и возвращает массив, в котором все числа умножены на 2, например [2, 4, 6]

function array_double(array $array): array
{
    foreach ($array as &$value) {
        $value = $value * 2;
    }
    return $array;
}

function array_double2(array $array): array
{
    $returnArray = [];

    foreach ($array as $value) {
        $returnArray[] = $value * 2;
    }

    return $returnArray;
}

assert(array_double([1, 2, 3, 4]) == [2, 4, 6, 8]);