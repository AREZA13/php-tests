<?php

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