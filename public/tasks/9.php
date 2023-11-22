<?php
/*Написать функцию add_item($arr, $item),
которая ничего не возвращает, но при этом добавляет в конец массива $arr элемент $item*/

$arr = [1, 2, 3, 4];
function add_item(&$arr, $item)
{
    $arr[] = $item;
}

add_item($arr, 10);

var_dump(($arr), assert($arr) == [1, 2, 3, 4, 10]);
//php -d assert.active=1 -d assert.exception=1 9.php