<?php
/*Написать рекурсивную функцию sumn рассчета суммы 1 + 2 + 3 + ... + n.*/

function sumn(int $n)
{
    if ($n == 1) {
        return 1;
    }
    return $n + sumn($n - 1);
}

assert(sumn(2) == 3);
assert(sumn(3) == 6);

var_dump(sumn(2), assert(sumn(2) == 3), assert(sumn(3) == 6));
//php -d assert.active=1 -d assert.exception=1 8.php