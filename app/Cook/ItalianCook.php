<?php

namespace App\Cook;

use App\Product\AbstractProduct;
use App\Product\Pizza;

class ItalianCook implements CookInterface
{
    public function cook(string $name): AbstractProduct
    {
        echo 'mamma mia готовлю белисимо пицца' . PHP_EOL;
        return new Pizza($name);
    }
}