<?php

namespace App\Http\Livewire\Shop\Catalog;

use App\Models\Template;
use Livewire\Component;

class ModalProductDetails extends Component
{
    public $templateId = 0;

    protected $listeners = ['showModalProductDetails'];

//    public function mount($templateId)
//    {
//        $this->templateId = $templateId;
//    }

    public function render()
    {
        $template = Template::query()
            ->whereId($this->templateId)
            ->whereHas('fashions.items.products.offers')
            ->with([
                'fashions.media',
                'template_group.gender',
                'fashions.raws.raw_type',
                'fashions.items.size',
                'fashions.items.products.prices'
            ])
            ->first();

        return view('livewire.shop.catalog.modal-product-details', [
            'template' => $template
        ]);
    }

    public function showModalProductDetails($template_id)
    {
        $this->templateId = $template_id;
    }

}
