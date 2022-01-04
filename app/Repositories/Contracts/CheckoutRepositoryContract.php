<?php

namespace App\Repositories\Contracts;

interface CheckoutRepositoryContract
{
    /**
     * @param string $phone
     * @param string $name
     * @param string $email
     * @return bool
     */
    public function save_order(string $phone, string $name, string $email):bool;

    public function send_order_confirmation();
}
