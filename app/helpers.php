<?php

use App\Repositories\Contracts\BasketRepositoryContract;
use App\Repositories\Contracts\CheckoutRepositoryContract;

if (!function_exists('int_to_decimal')) {
    function int_to_decimal(int $number)
    {
        return number_format(($number / 100), 2);
    }
}

if (!function_exists('rub')) {
    function rub(int $number)
    {
        return number_format($number, 0, ".", "'"). " руб.";
    }
}

if (!function_exists('basket')) {
    function basket()
    {
        return app(BasketRepositoryContract::class);
    }
}

if (!function_exists('checkout')) {
    function checkout()
    {
        return app(CheckoutRepositoryContract::class);
    }
}
