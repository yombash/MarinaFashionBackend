<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Template;
use Livewire\Component;
use Livewire\WithPagination;

class Templates extends Component
{

    use WithPagination;

    public $showModal = false;
    public $productId;
    public $product;
    public $parentId;
    public $parentName;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'product.name' => 'required',
    ];

    public function mount(int $parentId, string $parentName)
    {
        $this->parentId = $parentId;
        $this->parentName = $parentName;
    }

    public function render()
    {
        return view('livewire.admin.crud.templates', [
            'products' => Template::query()->where('template_group_id','=',$this->parentId)->orderBy('name')->latest()
        ->paginate(20)
        ]);
    }

    public function edit($productId)
    {
        $this->showModal = true;
        $this->productId = $productId;
        $this->product = Template::find($productId);
    }

    public function create()
    {
        $this->showModal = true;
        $this->product = [ 'template_group_id' => $this->parentId ];
        $this->productId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
            Template::create($this->product);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($productId)
    {
        $product = Template::find($productId);
        if ($product) {
            $product->delete();
        }
    }

}
