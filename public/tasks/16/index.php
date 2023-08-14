<?php

require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


/*### Composer и работа с библиотеками

1. Установить композер на свой компьютер
2. Создать новую директорию в ней `index.php` и директорию `src`, в которой создать класс `Test` с методо `doSomething`
```
.
src
  .
  Test.php
index.php
```
3. Инициализировать проект composer, сгенерировать автолоадер который через `require` подключить в файле index.php и создать объект класса `Test`
4. Подключить библиотеку `monolog/monolog` и при помощи неё логировать каждый вызов метода в файл `/tmp/mylog.log`*/

$log = new Logger('my_log');
$log ->pushHandler(new StreamHandler('tmp/mylog.log', Logger::INFO));

$newTest = new \App\Test();
$newTest->do();

$log->info('Method do() was called on Test object');

