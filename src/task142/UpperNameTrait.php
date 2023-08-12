<?php

namespace App\task142;
trait UpperNameTrait
{
    public function upperName():string {
        return strtoupper($this->name);
    }
}