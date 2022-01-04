<?php

namespace App\Http\Livewire\Admin\Crud\Price;

use App\Models\Fashion;
use App\Models\Price;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Web extends Component
{
    public $price = [];
    protected $fashions;

    public function mount()
    {
        $fashions = Fashion::query()
            ->with([
                'items.products.prices.type'
            ])->get();

        foreach ($fashions as $fashion) {
            $this->price[$fashion->id] = 0;
            if ($fashion->items->count() > 0)
                if ($fashion->items->first()->products->count() > 0)
                if ($fashion->items->first()->products->first()->prices->count() > 0)
                    $this->price[$fashion->id] = $fashion->items->first()->products->first()->prices->first()->value;
        }

    }

    public function render()
    {

        $fashions = Fashion::query()
            ->with([
                'media',
                'template.template_group.gender',
                'raws.raw_type',
                'items.size'
            ])
            ->simplePaginate(24);

        return view('livewire.admin.crud.price.web', [
            'fashions' => $fashions
        ]);
    }

    public function set_price(Fashion $fashion)
    {
        foreach ($fashion->items()->get() as $item) {
//            dd($item);
            foreach ($item->products()->get() as $product)
                $price = Price::create([
                    'product_id' => $product->id,
                    'value' => $this->price[$fashion->id]
                ]);
        }
    }


}
