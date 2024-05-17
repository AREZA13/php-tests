<?php
declare(strict_types=1);
//1) Запускаем скрипт и убеждаемся,
// что он падает из-за проваленных assert.
//  Затем  пишем тело функции и "чиним" все ассерты

//use classes\Test1;
//use classes\Test2;



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

//method body starts with return
function is_palindroime2(string $word) : bool
{
    return empty(
        array_diff_assoc(
            array_reverse(mb_str_split(mb_strtolower($word))), mb_str_split(mb_strtolower($word))
        )
    );
}
assert(is_palindrome2('шалаШ') == true);
assert(is_palindrome2('шалаш') == true);
assert(is_palindrome2('такси') == false);

//method body starts with return2
function is_palindroime3(string $word) : bool
{
    return empty(
    array_diff_assoc(
        array_reverse(preg_split('//u', mb_strtolower($word), -1, PREG_SPLIT_NO_EMPTY)), preg_split('//u', mb_strtolower($word), -1, PREG_SPLIT_NO_EMPTY)
    ));
}


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

/*print_r(divisible_by_three(1002, 0));*/


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

/*echo count_even([1, 2, 3, 4, 5, 6]);*/


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

/*echo min_even([1, 2, 4, 5, 3, 2, 3, 0]);*/


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

/*print_r(min_sum_elements([1, 2, 4, 5, 12, 342, 5, 0, 1]));*/

/*Написать рекурсивную функцию sumn рассчета суммы 1 + 2 + 3 + ... + n.*/

function sumn(int $n)
{
    if ($n == 1) {
        return 1;
    }
    return $n + sumn($n - 1);
}

assert(sumn(2) == 3);
assert(sumn(3) == 6);

/*echo sumn(2);*/


/*Написать функцию add_item($arr, $item),
которая ничего не возвращает, но при этом добавляет в конец массива $arr элемент $item*/

$arr = [1, 2, 3, 4];
function add_item(&$arr, $item)
{
    array_push($arr, $item);

}

add_item($arr, 10);
/*print_r($arr);*/

/* Написать функцию `create_min_max_validator(int $min, int $max)` которая возвращает функцию принимающую один аргумент,
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

/*$validator = create_min_max_validator(2, 5);
$validator(10);
$validator(2);
$validator(3);*/


/* Создать файл index.php и директорию `classes` в которой создать файлы `Test1.php` и  `Test2.php`.
В каждом файле разместить одноименный класс с методом `do()`.
В файле index.php написать функцию автолоадер и не используя `require` и `include` создать экземпляры каждого из классов и запустить метод do()*/

spl_autoload_register(function ($className) {
    $FilePath ='classes/' . $className . '.php';
    if (file_exists($FilePath)) {
        require_once $FilePath;
    }
});


/*$test1 = new \application\classes\Test1();
$test1->do();

$test2 = new \application\classes\Test2();
$test2->do();*/


/*2. Создать файл index.php и директорию `src` в которой размещать классы соответственно стандарту автозагрузки PSR-4,
в каждом классе должен быть метод do. `Автозагрузчик сгенерировать при помощи `composer.
В файле index.php добавить use для таких классов `One\Test`, `Two\Test`, `Three\Four\Test` создать экземпляры всех классов
и вызвать для них метод `do`, чтобы не было конфликта имен использовать псевдонимы Test1, Test2, Test3 соответственно.*/
