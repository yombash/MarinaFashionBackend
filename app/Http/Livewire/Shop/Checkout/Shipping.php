<?php

namespace App\Http\Livewire\Shop\Checkout;

use Livewire\Component;

class Shipping extends Component
{
    public $name;
    public $phone;
    public $email;


    public function render()
    {
        return view('livewire.shop.checkout.shipping');
    }

    public function checkout()
    {
        checkout()->save_order($this->phone, $this->name, $this->email);
        $this->redirect(route('shop.index'));

    }
}
