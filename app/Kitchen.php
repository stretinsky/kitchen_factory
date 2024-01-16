<?php

namespace App;

use App\Cook\ItalianCook;
use App\Cook\JapaneseCook;
use App\Product\AbstractProduct;

class Kitchen
{
    public function makeOrder($order): AbstractProduct
    {
        switch ($order['type']) {
            case 'pizza':
                $cook = new ItalianCook();
                break;
            case 'sushi':
                $cook = new JapaneseCook();
                break;
            default:
                throw new \Exception('Такого нет в меню, брат');
        }

        return $cook->cook($order['name']);
    }
}