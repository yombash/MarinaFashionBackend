<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Size;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\This;

class Sizes extends Component
{

    use WithPagination;

    public $showModal = false;
    public $productId;
    public $product;
    public $image;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'product.name' => 'required',
    ];

    public function render()
    {
//        dd(Brand::with('media')->orderBy('name')->get());
        return view('livewire.admin.crud.sizes', [
            'products' => Size::query()->orderBy('name')->latest()
                ->paginate(20)
        ]);
    }

    public function edit($productId)
    {
        $this->showModal = true;
        $this->productId = $productId;
        $this->product = Size::find($productId);
    }

    public function create()
    {
        $this->showModal = true;
        $this->product = null;
        $this->productId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
            Size::create($this->product);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($productId)
    {
        $product = Size::find($productId);
        if ($product) {
            $product->delete();
        }
    }

}
