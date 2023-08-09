<?php

//3. Написать функцию `customthrow(int $i)` которая бросает исключение \Exception если $i меньше 6.
//Написать свою реализацию функции  `assertException`(стандартными средствами языка php),
//которая будет проверять что вызывается нужное исключение. Вызов функции может выглядеть так//

/*```php
assertException(
    \Exception::class,
    function() {
        customthrow(2);
    }
);*/
class MyException extends Exception
{
}


