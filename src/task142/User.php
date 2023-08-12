<?php

namespace App\task142;

class User
{
    use UpperNameTrait;

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;

    }

}