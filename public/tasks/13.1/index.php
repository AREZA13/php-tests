<?php

/*Создать интерфейс Operation с методом calculate. Создать классы имплементирующие этот интерфейс(Plus, Minus, Mult, Div), каждый класс в конструктор принимает 2 числа и каждый класс реализует метод calculate по-своему. Создайте класс Calculator устроенный согласно шаблоны Fluent interface. Сделайте так, чтобы код из примера заработал. Допишите своих тестов.

```php
$calculator = new Calculator();
assert(
    $calculator->firstNumber(2)
        ->secondNumber(2)
        ->operation(Mult::class)
        ->result() == 4

);*/

use App\Calculator;
use App\Div;
use App\Minus;
use App\Mult;
use App\Plus;


require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$calculator = new Calculator();
$calculator
    ->inputNumber1(777)
    ->inputNumber2(888)
    ->operation(Div::class);

echo $calculator->result() . "<br>";

$calculator = new Calculator();
$calculator
    ->inputNumber1(777)
    ->inputNumber2(0)
    ->operation(Plus::class);

echo $calculator->result() . "<br>";


$calculator
    ->inputNumber1(777)
    ->inputNumber2(0)
    ->operation(Mult::class);

echo $calculator->result() . "<br>";

$calculator
    ->inputNumber1(777)
    ->inputNumber2(666)
    ->operation(Minus::class);

echo $calculator->result() . "<br>";


assert(
    $calculator
        ->inputNumber1(2)
        ->inputNumber2(2)
        ->operation(Mult::class)
        ->result() == 4

);