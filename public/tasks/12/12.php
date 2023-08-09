<?php
/*Создать класс исключения `MyException` и отдельную функцию `mythrow` которая бросает исключение класса `MyException`.
2. Написать код, который перехватывает все исключения брошенные функцией `mythrow` и выводит
 при спойманном исключении текст 'exception', иначе выводит 'passed'
3. Написать функцию `customthrow(int $i)` которая бросает исключение \Exception если $i меньше 6.
Написать свою реализацию функции  `assertException`(стандартными средствами языка php),
которая будет проверять что вызывается нужное исключение. Вызов функции может выглядеть так:*/

/*```php
assertException(
    \Exception::class,
    function() {
        customthrow(2);
    }
);*/
spl_autoload_register(function ($class) {
    $FilePath = $class . '.php';
    //echo $FilePath;
    if (file_exists($FilePath)) {
        include_once $FilePath;
    }
});

function mythrow()
{
    throw new MyException('exception has been thrown');
}

function customthrow(int $i)
{
    if ($i < 6) {
        throw new Exception('number is less that 6');
    }
}

function assertException(string $exceptionClassName, callable $function)
{
    try {
        $function();
        echo "assertException haven't caught any exceptions <br>";
    } catch (\Exception $e) {
        assert($exceptionClassName === get_class($e));
        echo "assertException caught given exception <br>";
    }
}

try {
    mythrow();
    echo 'passed';
} catch (MyException $e) {
    echo 'exeption';
}

assertException(
    \Exception::class,
    function() {
        customthrow(2);
    }
);

assertException(
    \Exception::class,
    function() {
        customthrow(7);
    }
);
