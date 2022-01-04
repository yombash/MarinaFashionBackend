<?php

namespace App\Http\Livewire\Shop\Cart;

use App\Models\Fashion;
use Livewire\Component;

class BasketItem extends Component
{
    public $fashionId;
    public $qty;
    public $fashion;
    public $price;
    public $mult;

    public function mount($fashionId, $qty, $price, $mult)
    {
//        dd($fashionId);
        $this->fashionId = $fashionId;
        $this->fashion = Fashion::find($this->fashionId);
        $this->qty = $qty;
        $this->price = $price;
        $this->mult = $mult;

    }

    public function render()
    {
//        dump($this->fashion);
        return view('livewire.shop.cart.basket-item', [
            'fashion' => $this->fashion
        ]);
    }

    public function updated()
    {
//        dd($this->fashion);
        basket()->add(
            (int)$this->fashionId,
            (int)$this->qty,
            (int)$this->price,
            (int)$this->mult
        );
        $this->emit('basket_changed');
    }

    public function remove()
    {
//        basket()->remove($this->fashionId);
        $this->qty = 0;
        $this->updated();
    }

    public function basket_add()
    {
        $this->qty = 1;
    }

    public function plus()
    {
        $this->qty++;
        $this->updated();
    }

    public function minus()
    {
        if ($this->qty>1) $this->qty--;
        else $this->qty = 0;
        $this->updated();
    }
}
