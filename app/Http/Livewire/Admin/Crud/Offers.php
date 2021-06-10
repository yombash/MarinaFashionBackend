<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Offer;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Offers extends Component
{
    use WithPagination;

    public $showModal = false;
    public $offerId;
    public $offer;
    public $product_list = [];
    public $checked;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'checked' => 'array|required',
    ];

    public function render()
    {
        return view('livewire.admin.crud.offers', [
            'offers' => Offer::query()->orderBy('name')->latest()
                ->paginate(20),
            'product_list' => $this->product_list,
            'hierarchy' => $this->toHierarchy()
        ]);
    }

    public function edit(Offer $offer)
    {
        $this->showModal = true;
        $this->offerId = $offer->id;
        $this->offer = $offer;
    }

    public function create()
    {
        $this->showModal = true;
        $this->offer = null;
        $this->offerId = null;
        $this->product_list = Product::query()
        ->withCount('offers')
        ->with('price_latest',
            'items.size',
            'items.fashion.template.template_group.gender',
            'items.fashion.raws.raw_type')
        ->get();
//        dd($this->product_list);
        dd($this->toHierarchy());
        $this->checked = null;

    }

    public function save()
    {

        dd($this->checked);

        $this->validate();

        if (!is_null($this->offerId)) {
            $this->offer->save();
        } else {
            Offer::create($this->offer);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete(Offer $offer)
    {
        if ($offer) $offer->delete();
    }

    private function toHierarchy() {
        $res = [];
        foreach ($this->product_list as $product)
            foreach ($product->items as $item)
                {
                $res
                [$item->fashion->template->template_group->gender->name]
                [$item->fashion->template->template_group->name]
                [$item->fashion->template->name]
                [$item->fashion->id]
                = $item->id;

            }
//dd($res);
            return $res;
    }
}
