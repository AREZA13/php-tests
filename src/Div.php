<?php

namespace App;

use Exception;

class Div implements Operation
{

    private float $inputNumber1, $inputNumber2;

    public function __construct(float $inputNumber1, float $inputNumber2)
    {
        $this->inputNumber1 = $inputNumber1;
        $this->inputNumber2 = $inputNumber2;
    }


    public function calculate($inputNumber1, $inputNumber2): float
    {
        if ($inputNumber2 != 0) {
            return $this->inputNumber1 / $this->inputNumber2;
        } else {
            throw new Exception("Division ny zero");
        }
    }
}