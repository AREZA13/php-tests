<?php
declare(strict_types=1);
use App\task15\Example;
require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
## Работа с стандартной библиотекой(SPL)

//1. При помощи класса `RecursiveDirectoryIterator` выведите список только файлов,
// которые находятся в вашей домашней директории включая все поддиректории


$PathToMyHomeDirectory = '/application/public';
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($PathToMyHomeDirectory), RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $fileInfo) {
    if ($fileInfo->isFile()){
        echo $fileInfo->getPathname() . "\n" . "<br>";
    }

}


/*//2. Зачем нужен класс исключений `InvalidArgumentException` и какие еще классы исключений из SPL вы знаете?
это часть стандартной standart php library , этот класс позволяет получить исклуключение , когда аргумент,
    переданный в методе или фуннции является не допустимым. Что позволяет исправлять ошибки кода
легче и наглядней. Например когда мы ожидаем полдучить аргумент типа int , а функции передается string, либо ожижает
массив , а возвразается обьект
В SPL также входят такие классы как:
LogicException - базовый класс для исключений связан с ошибками логики в работе программы
RuntimeException - базовый класс для исключений. Которые могут возникнуть в процессе работы программы
FileNotFoundException - при попытке открыть несузествующий файл
DivisionByZeroError - при попытке деления на ноль
TypeError - пи неправильных типах аргументов или переменных
и другие
*/

try {
    $example = new \App\task15\Example();
    $inputNumber = 42;
    $example->processString($inputNumber); //will be exception

    $inputObject = new stdClass();
    $example->processArray($inputObject);//will be exception

} catch (InvalidArgumentException $e) {
    echo "Caught InvalidArgumentException: " . $e->getMessage(). "<br>";
}catch (Exception $e) {
    echo "Caught generic Exception: " . $e->getMessage(). "<br>";
}