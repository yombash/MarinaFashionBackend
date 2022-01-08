<?php

namespace App\Http\Livewire\Admin\Crud\Category;

use App\Models\Template;
use Livewire\Component;

class Binding extends Component
{
    protected $templates;
    protected $categories;

    public function mount()
    {
        $this->templates = Template::query()
            ->whereHas('fashions')
            ->withCount('categories')
            ->with([
                'fashions',
                'fashions.raws.raw_type'
            ])
            ->orderBy('categories_count')
//            ->orderBy('name')

//            ->toSql();
          ->paginate();
//        dd($this->templates);
    }

    public function render()
    {
        return view('livewire.admin.crud.category.binding',[
            'templates' => $this->templates,
            'categories' => $this->categories
        ]);
    }
}
