<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{

    use WithPagination;

    public $showModal = false;
    public $categoryId;
    public $category;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'category.name' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.crud.categories', [
            'categories' => Category::query()->orderBy('position')->latest()
                ->paginate(20)
        ]);
    }

    public function edit(Category $category)
    {
        $this->showModal = true;
        $this->categoryId = $category->id;
        $this->category = $category;
    }

    public function create()
    {
        $this->showModal = true;
        $this->category = null;
        $this->categoryId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->categoryId)) {
            $this->category->save();
        } else {
            Category::create($this->category);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete(Category $category)
    {
        if ($category) $category->delete();
    }

}
