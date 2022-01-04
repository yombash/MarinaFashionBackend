<?php

namespace App\Repositories\Contracts;

interface BasketRepositoryContract
{
    /**
     * Add items to the basket.
     * @param int $id Идентификатор
     * @param int $qty Кол-во в заказе
     * @param int $price Цена 1шт товара
     * @param int $mult Кол-во в размерном ряду
     * @return void
     */
    public function add(int $id, int $qty, int $price=0, int $mult=1): void;


    /**
     * Set items quantity in the basket.
     * @param int $id Идентификатор
     * @param int $qty Кол-во в заказе
     * @param int $price Цена 1шт товара
     * @param int $mult Кол-во в размерном ряду
     * @return void
     */
    public function set(int $id, int $qty, int $price=0, int $mult=1): void;


    /*
     * Сумма корзины
     * @return int
     */
    public function sum(): int;


    /**
     * Удаление товара из корзины
     * @param int $id
     * @return void
     */
    public function remove(int $id): void;


    /**
     * Очистка корзины
     * @param int $id
     * @return void
     */
    public function clear(): void;


    /**
     * Кол-во товара (шт) по ID.
     * @param int $id
     * @return int
     */

    public function getCurrentQty(int $id): int;

    public function all(): array;

    public function countItems(): int;
}
