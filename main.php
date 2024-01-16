<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Kitchen;

$kitchen = new Kitchen();

$menu = [
    'Мариано Итальяно за 275' => [
        'name' => 'Мариано Итальяно',
        'price' => 275,
        'type' => 'pizza'
    ],
    'Пепперони' => [
        'name' => 'Пепперони',
        'price' => 400,
        'type' => 'pizza'
    ],
    'Сет Старый рыбак' => [
        'name' => 'Сет суш старый рыбак',
        'price' => 600,
        'type' => 'sushi'
    ],
];

$product = $kitchen->makeOrder($menu['Мариано Итальяно за 275']);
echo PHP_EOL;

$product = $kitchen->makeOrder($menu['Сет Старый рыбак']);
echo PHP_EOL;