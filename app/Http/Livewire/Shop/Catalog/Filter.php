<?php

namespace App\Http\Livewire\Shop\Catalog;

use App\Models\RawType;
use App\Models\TemplateGroup;
use Livewire\Component;

class Filter extends Component
{

    public $checkbox = [];
    public $price = [];
    public $template_groups;
    public $raw_types;

    public function mount()
    {
        $this->template_groups = TemplateGroup::query()
            ->whereHas('templates.fashions.items.products.offers')
            ->with('gender')
            ->get();

        $this->raw_types = RawType::query()
            ->whereHas('raws.fashions.items.products.offers')
            ->get();
//        $template_groups = TemplateGroup::query()
//            ->whereHas('templates.fashions.items.products.offers')
//            ->get();
//        foreach ($this->template_groups as $template_group)
//            $this->checkbox['template_group'][$template_group->id] = true;
//        dd($template_groups);
    }

    public function render()
    {
        return view('livewire.shop.catalog.filter');
    }
}
