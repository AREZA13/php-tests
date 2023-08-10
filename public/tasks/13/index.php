<?php
/*1. Создать абстрактный класс Figure в пространстве имен `My\Abstract` с методами вычисления площади и периметра, а также методом, выводящим информацию о фигуре на экран(Тип, Площадиь и периметр). Создать производные классы в пространстве имен `My\Concrete\`: Rectangle (прямоугольник), Circle (круг), Triangle (треугольник) со своими методами вычисления площади и периметра.Создать массив n фигур и вывести полную информацию о фигурах на экран.*/

use App\My\Concrete\Circle;
use App\My\Concrete\Rectangle;
use App\My\Concrete\Triangle;

require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


$circle = new Circle(10);
echo $circle->getPerimeter() . "<br>";
echo $circle->getSquare() . "<br>";
/*echo $circle->getInfo(). "<br>";*/

$triangle = new Triangle(10, 10, 10);
echo $triangle->getPerimeter() . "<br>";
echo $triangle->getSquare() . "<br>";
echo $triangle->getInfo() . "<br>";

$rectangle = new Rectangle(10, 15);
echo $rectangle->getPerimeter() . "<br>";
echo $rectangle->getSquare() . "<br>" . "<br>";


$arrayOfFigures = [
    new Circle(10),
    new Circle(17),
    new Triangle(10, 10, 10),
    new Rectangle(10, 15),
    new Rectangle(9, 25)
];

foreach ($arrayOfFigures as $singleFigure) {
    print_r("Figure: " . $singleFigure->getInfo() . "<br>");
    print_r("Square: " . $singleFigure->getSquare() . "<br>");
    print_r("Perimeter: " . $singleFigure->getPerimeter() . "<br>" . "<br>");
}

