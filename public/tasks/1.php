<?php
declare(strict_types=1);
//1) Запускаем скрипт и убеждаемся,
// что он падает из-за проваленных assert.
//  Затем  пишем тело функции и "чиним" все ассерты

function factorial(int $n): int
{
    $sum = 1;
    for ($i = 1; $i <= $n; $i++) {
        $sum = $sum * $i;
    }
    return $sum;
}

assert(factorial(0) == 1);
assert(factorial(1) == 1);
assert(factorial(4) == 24);

//php -d assert.active=1 -d assert.exception=1 your_script.php