<?php

namespace App\Cook;

use App\Product\AbstractProduct;
use App\Product\Sushi;

class JapaneseCook implements CookInterface
{
    public function cook(string $name): AbstractProduct
    {
        echo 'うわー、なんて美味しい寿司がめちゃくちゃになるんだろう' . PHP_EOL;
        return new Sushi($name);
    }
}