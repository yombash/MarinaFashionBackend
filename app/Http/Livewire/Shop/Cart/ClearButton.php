<?php

namespace App\Http\Livewire\Shop\Cart;

use Livewire\Component;

class ClearButton extends Component
{
    public function render()
    {
        return view('livewire.shop.cart.clear-button');
    }

    public function clear_basket()
    {
        basket()->clear();
        $this->redirect(route('shop.index'));
    }
}
