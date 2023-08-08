<?php
/* Создать файл index.php и директорию `classes` в которой создать файлы `Test1.php` и  `Test1.php`.
В каждом файле разместить одноименный класс с методом `do()`.
В файле index.php написать функцию автолоадер и не используя `require` и `include`
 создать экземпляры каждого из классов и запустить метод do()*/


spl_autoload_register(function ($class) {
    $FilePath = 'classes/' . $class . '.php';
    echo $FilePath;
    if (file_exists($FilePath)) {
        include_once $FilePath;
    }
});

$test2 = new Test2();
$test2->do();
$test1 = new Test1();
$test1->do();