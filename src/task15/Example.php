<?php

namespace App\task15;
class Example
{
    public function processString(string $input)
    {
        echo "processed string: $input";
    }

    public function processArray(array $input)
    {
        echo "Processed array: " . implode(',', $input);
    }
}