<?php

namespace App\Http\Livewire\Shop\Catalog;

use Livewire\Component;

class Card extends Component
{
    public $template;
    public $fashion_index = 0; // индекс фасона, который отображается в карточке товара
    public $mult; // кол-во размеров в размерном ряду
    public $price;
    public $raw_name;

    public function mount($template, $fashionIndex = 0)
    {
        $this->template = $template;
        $this->choose_fashion($fashionIndex);
        $this->set_params();
    }

    public function render()
    {
        return view('livewire.shop.catalog.card', [
            'template' => $this->template,
            'fashion' => $this->template->fashions[$this->fashion_index]
        ]);
    }

    public function set_params()
    {
        $fashion = $this->template->fashions[$this->fashion_index];

        $this->price = $fashion->items->first()->products->first()->prices->first()->value;
        $this->mult = $fashion->items->count();
        $this->raw_name = $fashion->raws->first()->raw_type->name;
    }

    public function choose_fashion($fashion_index)
    {
        $this->fashion_index = $fashion_index;
        $this->set_params();
    }

    public function basket_add($id)
    {
        $qty = basket()->getCurrentQty($id) + 1;
//        dd($id);
        basket()->add($id, $qty, $this->price, $this->mult);
        $this->emit('basket_changed');
    }

}
