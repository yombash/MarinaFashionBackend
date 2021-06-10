<?php

namespace App\Repositories\Contracts;

interface BasketRepositoryContract
{
    /**
     * Add items to the basket.
     * @param int $id
     * @param int $qty
     * @return void
     */
    public function add(int $id, int $qty): void;

    /**
     * Get item's current quantity.
     * @param int $id
     * @return int
     */
    public function getCurrentQty(int $id): int;

    public function all(): array;




}