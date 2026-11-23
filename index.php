<?php

declare(strict_types=1);

$is_auth = rand(0, 1);

$user_name = 'Sleepy cat';

$category_list = [
    'Доски и лыжи',
    'Крепления',
    'Ботинки',
    'Одежда',
    'Инструменты',
    'Разное'
];

$lots = [
    [
        'name'          => '2014 Rossignol District Snowboard',
        'category'      => $category_list[0],
        'price'         => 10999,
        'picture_path'  => 'img/lot-1.jpg'
    ],
    [
        'name'          =>'DC Ply Mens 2016/2017 Snowboard',
        'category'      =>$category_list[0],
        'price'         => 159999,
        'picture_path'  => 'img/lot-2.jpg'
    ],
    [
        'name'          => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category'      => $category_list[1],
        'price'         => 8000,
        'picture_path'  => 'img/lot-3.jpg'
    ],
    [
        'name'          => 'Ботинки для сноуборда DC Mutiny Charcoal',
        'category'      => $category_list[2],
        'price'         => 10999,
        'picture_path'  => 'img/lot-4.jpg'
    ],
    [
        'name'          => 'Куртка для сноуборда DC Mutiny Charcoal',
        'category'      => $category_list[3],
        'price'         => 7500,
        'picture_path'  => 'img/lot-5.jpg'
    ],
    [
        'name'          => 'Маска Oakley Canopy',
        'category'      => $category_list[4],
        'price'         => 5400,
        'picture_path'  => 'img/lot-6.jpg'
    ]
];

function format_price(int $lot_price): string
{
    $lot_price = ceil($lot_price);

    if ($lot_price >= 1000) {
        $lot_price = number_format($lot_price, 0, ' ', ' ');
    }

    return $lot_price . ' &#8381';
}

require_once 'helpers.php';

$page_content = include_template ( 'main.php', ['category_list' => $category_list, 'lots' => $lots]);
$layout_content = include_template ('layout.php', ['content' => $page_content, 'title' => 'Главная', 'is_auth' => $is_auth, 'user_name' => $user_name]);

print $layout_content;
