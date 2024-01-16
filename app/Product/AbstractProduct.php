<?php

namespace App\Product;

class AbstractProduct
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}