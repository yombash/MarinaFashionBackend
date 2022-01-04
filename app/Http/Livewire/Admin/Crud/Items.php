<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Fashion;
use App\Models\Item;
use App\Models\Product;
use App\Models\Raw;
use App\Models\Set;
use App\Models\Size;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Items extends Component
{
    use WithPagination;

    public $showModal = false;
    public $productId;
    public $product;
    public $size;
    public $parentId;
    public $parentName;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'product.size_id' => 'required',
    ];

    public function mount(int $parentId, string $parentName)
    {
        $this->parentId = $parentId;
        $this->parentName = $parentName;
    }

    public function render()
    {

        return view('livewire.admin.crud.items', [
            'items' => Item::query()
                ->where('fashion_id','=',$this->parentId)
                ->with([
                    'products',
                    'size' => function($query){
                        $query->orderBy('name');
                    }
                ])
                ->latest()
                ->paginate(20),
            'sizes'  =>  Size::query()
                ->orderBy('name')
                ->get()
        ]);
    }

    public function edit($productId)
    {
        $this->showModal = true;
        $this->productId = $productId;
        $this->product = Item::find($productId);
    }

    public function create()
    {
        $this->showModal = true;
        $this->product = [ 'fashion_id' => $this->parentId ];
        $this->productId = null;
    }

    public function save()
    {

//        dd($this);
        $this->validate();



        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
                $item = Item::create($this->product);
                $product = Product::create();
                $item->products()->attach($product->id);
        }
        $this->showModal = false;
        $this->size = null;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($itemId)
    {
        $product = Item::find($itemId);
        if ($product) {
            $product->delete();
        }
    }

    public function insert_mono_product(int $itemId)
    {
        $item = Item::find($itemId);
        $product = Product::create();
        $item->products()->attach($product->id);
    }

    public function remove_mono_product(int $itemId)
    {
        $item = Item::find($itemId);
        foreach($item->products as $product)
        {
            DB::transaction(function () use ($product) {
                $product->items()->detach();
                $product->delete();
                });

        }
    }

}
