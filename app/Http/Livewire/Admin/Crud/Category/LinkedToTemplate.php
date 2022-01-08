<?php

namespace App\Http\Livewire\Admin\Crud\Category;

use App\Models\Category;
use App\Models\Template;
use Livewire\Component;

class LinkedToTemplate extends Component
{
    protected $categories;
    public $template_id;

    public function mount($id)
    {
        $this->categories = Category::query()->orderBy('position')->pluck('name', 'categories.id');
        $this->template_id = $id;

    }

    public function hydrate()
    {
        $this->categories = Category::query()->orderBy('position')->pluck('name', 'categories.id');
    }

    public function updateLinked($list)
    {
        $template = Template::find($this->template_id);
//        dd($template);
        $flag_add_category = true;
//        dd($list);
        foreach ($list as $u)
        {
            $value = $u['value'];
            if ($value == 0) $flag_add_category = false;
            if ($flag_add_category) $template->categories()->attach($value);
            else $template->categories()->detach($value);


        }



    }

    public function render()
    {
        $linked = Category::query()
            ->whereHas('templates', function ($q) {
                $q->where('templates.id', '=', $this->template_id);
            })->orderBy('position')->pluck('name', 'id');

        $not_linked = [];
        foreach ($this->categories as $id => $name) {
            if (empty($linked[$id])) $not_linked[$id] = $name;
        }

        return view('livewire.admin.crud.category.linked-to-template', [
            'linked' => $linked,
            'not_linked' => $not_linked,
//            'categories' => $this->categories,
//            'template_id' => $this->template_id
        ]);
    }
}
