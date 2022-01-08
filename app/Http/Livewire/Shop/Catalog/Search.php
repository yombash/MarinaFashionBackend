<?php

namespace App\Http\Livewire\Shop\Catalog;

use App\Models\Category;
use App\Models\RawType;
use App\Models\Template;
use App\Models\TemplateGroup;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        $searchArray = array_filter(explode(' ', $this->search), function($element) {
            return !empty($element);
        });

        $templates = $categories = $raw_types = $template_groups = [];
        $flag_match_found = false;
        $isEmpty = '';

        if (!empty($this->search)) {

            $templates = Template::search($searchArray)->take(5)->get();
            $categories = Category::search($searchArray)->take(5)->get();
            $raw_types = RawType::search($searchArray)->take(5)->get();
            $template_groups = TemplateGroup::search($searchArray)->take(5)->get();

            if (
                $templates->count() > 0
                || $categories->count() > 0
                || $raw_types->count() > 0
                || $template_groups->count() > 0
            ) $flag_match_found = true;

            if (!$flag_match_found) $isEmpty = 'Ничего не найдено';
        }

        return view('livewire.shop.catalog.search', [
            'templates' => $templates,
            'categories' => $categories,
            'raw_types' => $raw_types,
            'template_groups' => $template_groups,
            'isEmpty' => $isEmpty
        ]);
    }
}
