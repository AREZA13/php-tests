<?php

use App\traitStringPlus;
use App\Aclass;
require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

/*Трейты, генераторы, магические методы  (6 часов)



1. Почините тест написав код вместо троеточия
```php
    class A {
        ...
    }

    assert(
        "GGGG" ==
        (new A) . (new A)
    );
```*/

echo new Aclass . new Aclass;

assert(
    "GGGG" ==
    (new Aclass) . (new Aclass)
);


