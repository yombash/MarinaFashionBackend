<?php


namespace App\Repositories\Sessions;

use App\Repositories\Contracts\BasketRepositoryContract;
use Illuminate\Contracts\Session\Session;

class BasketRepository implements BasketRepositoryContract
{
    private Session $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function identity($id): string
    {
        return 'basket.' . $id;
    }

    public function identity_sum($id): string
    {
        return 'basket_sum.' . $id;
    }

    public function add(int $id, int $qty, int $price = 0, int $mult = 1): void
    {
        $this->session->put($this->identity($id), [
            'qty'   =>  $qty,
            'price' =>  $price,
            'mult'  =>  $mult
        ]);
    }

    public function set(int $id, int $qty, int $price = 0, int $mult = 1): void
    {
        $this->add($id, $qty, $price, $mult);
    }

    /**
     * @inheritDoc
     */
    public function getCurrentQty(int $id): int
    {
        $qty = 0;
        if ($item = $this->session->get($this->identity($id), 0))
            $qty = $item['qty'];
        return $qty;
    }

    /**
     * @inheritDoc
     */

    public function all(): array
    {
//        dd($this->session->get('basket', []));
        return $this->session->get('basket', []);
    }

    public function countItems():int
    {
        return count($this->all());
    }

    public function remove(int $id): void
    {
        $this->session->remove($this->identity($id));
    }

    public function clear(): void
    {
        $this->session->remove('basket');
    }

    public function sum(): int
    {
        $sum = 0;
        if ($items = $this->all())
            foreach ($items as $item)
                $sum += $item['qty']*$item['price']*$item['mult'];
        return (int)$sum;
    }

}
