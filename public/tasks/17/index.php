<?php
$data = [
    'hello1' => 'value2',
    'hello2' => 'value3',
    'hello3' => 'value4',
    'hello4' => 'value5',
    'hello5' => 'value1',
    'hello6' => 'value2',
    'hello7' => 'value3'
];

$data1 = [];
$data2 = [];

foreach ($data as $key => $value) {
    $lastDigit = intval(substr($key, -1));
    if ($lastDigit % 2 === 0) {
        $data1[$key] = $value;
    } else $data2[$key] = $value;
}

print_r($data1);
print_r($data2);

