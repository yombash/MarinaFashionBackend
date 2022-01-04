<?php

namespace App\Http\Livewire\Shop\Catalog;

use App\Models\Template;
use Livewire\Component;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class Offers extends Component
{
    public $price = [];
    public $cartProducts = [];
    public $showModal = false;
    public $templateId;

    public function mount()
    {
//        $fashions = Fashion::query()
//            ->with([
//                'items.products.prices.type'
//            ])->get();
//
//        foreach ($fashions as $fashion) {
//            $this->price[$fashion->id] = 0;
//            if ($fashion->items->count() > 0)
//                if ($fashion->items->first()->products->count() > 0)
//                    if ($fashion->items->first()->products->first()->prices->count() > 0)
//                        $this->price[$fashion->id] = $fashion->items->first()->products->first()->prices->first()->value;
//        }

    }

    public function render()
    {

        $templates = QueryBuilder::for(Template::class)
//            Template::query()
            ->allowedFilters([
                AllowedFilter::exact('тип','template_group.gender.name'),
                AllowedFilter::exact('категория','template_group.name'),
                AllowedFilter::exact('материал','fashions.raws.raw_type.name')
            ])
//            ->allowedIncludes(['template_group'])
            ->whereHas('fashions.items.products.offers')
            ->with([
                'fashions.media',
                'template_group.gender',
                'fashions.raws.raw_type',
                'fashions.items.size',
                'fashions.items.products.prices'
            ])
            ->simplePaginate(24);

//        dd($templates);

        return view('livewire.shop.catalog.offers', [
            'templates' => $templates
        ]);
    }

    public function addToCart($productId)
    {
        Cart::create(['product_id' => $productId]);
        $this->cartProducts[] = $productId;
        $this->emit('updateCart');
    }

    public function removeFromCart($productId)
    {
        Cart::where('product_id', $productId)->delete();
        if (($key = array_search($productId, $this->cartProducts)) !== false) {
            unset($this->cartProducts[$key]);
        }
        $this->emit('updateCart');
    }

    public function show_modal_product_details(Template $template)
    {
        $this->emit('showModalProductDetails', $template->id);
        $this->showModal = true;
    }

    public function close()
    {
        $this->emit('showModalProductDetails', 0);
        $this->showModal = false;
    }

}
