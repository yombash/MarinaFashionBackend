<?php

namespace App\Http\Livewire\Shop\Cart;

use Livewire\Component;

class BasketButton extends Component
{
//    public $count=0;
    public $sum=0;
    protected $listeners = [
        'basket_changed'
    ];

    public function mount()
    {
//        session()->flush();
//        $this->count = basket()->countItems();
        $this->sum = basket()->sum();
    }

    public function render()
    {
        return view('livewire.shop.cart.basket-button');
    }

    public function basket_changed()
    {
//        $this->count = basket()->countItems();
        $this->sum = basket()->sum();
    }

}
