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

        $offers = Offer::query()
            ->with('products.items.fashion','products.price_latest')
            ->orderBy('name')->latest()
            ->paginate(20);

//        dd(Offer::offer_card($offers));

        return view('livewire.admin.crud.offers', [
            'offers' => $offers,
            'product_list' => $this->product_list,
//            'hierarchy' => $this->toHierarchy()
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
            ->doesntHave('offers')
//            ->withCount('offers')
            ->withCount('items')
            ->with('price_latest',
                'items.size',
                'items.fashion.template.template_group.gender',
                'items.fashion.raws.raw_type',
                'items.fashion.media')
            ->get();
//        dd($this->product_list);
//        dd($this->toHierarchy());
        $this->checked = null;

    }

    public function save()
    {

//        dd($this->checked);

        if (!is_array($this->checked)) return false;

        $this->validate();
        $offer = Offer::create();
        foreach ($this->checked as $product_id => $value)
            $offer->products()->attach($product_id);
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete(Offer $offer)
    {
        $offer->products()->detach();
        if ($offer) $offer->delete();
        $this->showModal = false;
    }

    /*
     * Форматирование списка нераспределённых продуктов
     * в виде группированных карточек
     * для формирования товарных предложений
     */
    private function toHierarchy()
    {
        $res = [];
        foreach ($this->product_list as $product) {

            // TODO: Доделать случай комплектов товаров
            // пока что обрабатывается только случай товаров-одиночек
            if ($product->items_count > 1) continue;
            foreach ($product->items as $item) {
                unset($raw_array);
                $raw_array[$item->fashion->id] = [];
                foreach ($item->fashion->raws as $raw) {
                    $raw_array[$item->fashion->id][$raw->raw_type->name] = $item->fashion->getFirstThumbUrl();
                }


//                dd($raw_array);

//                $res
//                [$item->fashion->template->template_group->gender->name]
//                [$item->fashion->template->template_group->name]
//                [$item->fashion->template->name]
//                [$item->fashion->id]
//                    = [
//                    'raw'
//                    [$item->id]
//                        = $product->id;]
            }
        }
//dd($res);
        return $res;
    }
}
