<?php

namespace App;

class Plus implements Operation
{
    private float $inputNumber1, $inputNumber2;

    public function __construct(float $inputNumber1, float $inputNumber2)
    {
        $this->inputNumber1 = $inputNumber1;
        $this->inputNumber2 = $inputNumber2;
    }

    public function calculate($inputNumber1, $inputNumber2): float
    {
        return $this->inputNumber1 + $this->inputNumber2;
    }
}