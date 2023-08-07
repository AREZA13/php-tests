<?php
/*Написать функцию add_item($arr, $item),
которая ничего не возвращает, но при этом добавляет в конец массива $arr элемент $item*/

$arr = [1, 2, 3, 4];
function add_item(&$arr, $item)
{
    array_push($arr, $item);

}

add_item($arr, 10);

print_r($arr);