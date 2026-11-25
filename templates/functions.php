<?php

function format_price(int $lot_price): string
{
    $lot_price = ceil($lot_price);

    if ($lot_price >= 1000) {
        $lot_price = number_format($lot_price, 0, ' ', ' ');
    }

    return $lot_price . ' &#8381';
}

function count_time($expire_date): array
{
    $expire_date = strtotime($expire_date);
    $cur_date = strtotime("now");
    $diff = $expire_date - $cur_date;

    return $time_left = [
        'hours'   => str_pad(floor($diff/3600), 2, "0", STR_PAD_LEFT),
        'minutes' => str_pad(floor(($diff%3600)/60), 2, "0", STR_PAD_LEFT),
    ];
}
