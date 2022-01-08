<?php

namespace App\Http\Livewire\Layout\Vertical;

use App\Models\Category;
use App\Models\RawType;
use App\Models\TemplateGroup;
use Livewire\Component;

class SideMenu extends Component
{

    public $checkbox = [];
    public $price = [];
    public $template_groups;
    public $raw_types;
    public $categories;

    public function mount()
    {
        $this->template_groups = TemplateGroup::inOffers()->get();
        $this->raw_types = RawType::inOffers()->get();
        $this->categories = Category::inOffers()->get();
    }

    public function render()
    {
        return view('livewire.layout.vertical.side-menu');
    }
}
