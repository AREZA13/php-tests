<?php
/*Создать функцию even_to_zero(int $number)
Которая цифры на четных ПОЗИЦИЯХ занулит.
Например, из 12345 получается число 10305.
Внимание! Важна позиция цифры, а не значение*/
/*function evenToZero(int $number)
{
    $arrayToString = str_split((string)$number);

    $array = array_map( // [1,2,...]
        'intval',
        $arrayToString // ['1','2,...]
    );

    for ($i = 0; $i < count($array); $i++) {
        if ($i % 2 !== 0) {
            $array[$i] = 0;
        }
    }

    return intval(implode("", $array));
}*/

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

var_dump(evenToZero2(12345), assert(evenToZero2(12345) == 10305), assert(evenToZero2(666666) == 606060));
//php -d assert.active=1 -d assert.exception=1 2.php

//Best One without bugs.
function evenToZero3(int $n): int // [1234567]
{
    if ($n % 2 === 0) {
        $cnt_n = floor(log10($n)) + 1; // 6+
        $a = array_fill(0, $cnt_n, 0); // [0,0,0,0,0,0]
        $return_value = 0;
        foreach ($a as $key => $value) {
            // $key = 1 вторая итерация
            $exponent = $key + 1; // 2
            $divider = 10 ** $exponent; // 100
            $new_value = $n % $divider; // 123'456 % 100 = 56
            $new_value = floor($new_value / 10 ** $key); // 56 / 10 ~ 5
            $a[$key] = $new_value;
            $return_value += ($key % 2) ? $new_value * 10 ** $key : 0;
        }
        return $return_value;
    }

        $n *= 10;
        $cnt_n = floor(log10($n)) + 1;
        $a = array_fill(0, $cnt_n, 0); // [0,0,0,0,0,0]
        $return_value = 0;
        foreach ($a as $key => $value) {
            // $key = 1 вторая итерация
            $exponent = $key + 1; // 2
            $divider = 10 ** $exponent; // 100
            $new_value = $n % $divider; // 123'456 % 100 = 56
            $new_value = floor($new_value / 10 ** $key); // 56 / 10 ~ 5
            $a[$key] = $new_value;
            $return_value += ($key % 2) ? $new_value * 10 ** $key : 0;
        }

        return $return_value/10;

}
print("evenToZero3 result is: " . evenToZero3(1234567) . PHP_EOL);

//Declarative paradigm  ! (Problems with big numbers!!!! 
function evenToZeroWithDeclarativeParadigm(int $number): int
{
    return (int)implode("", array_map(
        static function ($index, $digit) {
            return $index % 2 === 1 ? 0 : $digit;
        },
        array_keys(str_split($number)),
        str_split($number)
    ));
}



//can be applyied for any numbers (using logarithm)
function evenToZero4(int $n): int // [1234567]
{   if ($n % 2 === 0) {
    $countNumber = floor(log10($n)) + 1; // 6+
    $arrayFilledWithZeros = array_fill(0, $countNumber, 0); // [0,0,0,0,0,0]
    $return_value = 0;
    foreach ($arrayFilledWithZeros as $key => $value) {
        // $key = 1 вторая итерация
        $exponent = $key + 1; // 2
        $divider = 10 ** $exponent; // 100
        $new_value = $n % $divider; // 123'456 % 100 = 56
        $new_value = floor($new_value / 10 ** $key); // 56 / 10 ~ 5
        $arrayFilledWithZeros[$key] = $new_value;
        $return_value += ($key % 2) ? $new_value * 10 ** $key : 0;
    }
    return $return_value;
    }

        $n *= 10;
        $countNumber = floor(log10($n)) + 1;
        $arrayFilledWithZeros = array_fill(0, $countNumber, 0); // [0,0,0,0,0,0]
        $return_value = 0;
        foreach ($arrayFilledWithZeros as $key => $value) {
            // $key = 1 вторая итерация
            $exponent = $key + 1; // 2
            $divider = 10 ** $exponent; // 100
            $new_value = $n % $divider; // 123'456 % 100 = 56
            $new_value = floor($new_value / 10 ** $key); // 56 / 10 ~ 5
            $arrayFilledWithZeros[$key] = $new_value;
            $return_value += ($key % 2) ? $new_value * 10 ** $key : 0;
        }

        return $return_value/10;

}

print("evenToZero4 result is: " . evenToZero4(123456455832167) . PHP_EOL);


//Declarative paradigm  ! (Can be any large number not only int size) 
function evenToZeroWithDeclarativeParadigm2(int $n): int
{
    return ($n % 2 === 0) ?
        (array_reduce(array_keys(array_fill(0, floor(log10($n)) + 1, 0)), static function ($carry, $key) use ($n) {
        return $carry + (($key % 2) ? floor($n % 10 ** ($key + 1) / 10 ** $key) * 10 ** $key : 0);
    }, 0)) :
        ((array_reduce(array_keys(array_fill(0, floor(log10($n*10)) + 1, 0)), static function ($carry, $key) use ($n) {
        return $carry + (($key % 2) ? floor($n*10 % 10 ** ($key + 1) / 10 ** $key) * 10 ** $key : 0);
}, 0)))/10;
}
print("WTF result is: " . evenToZeroWithDeclarativeParadigm2(123456789) . PHP_EOL);

