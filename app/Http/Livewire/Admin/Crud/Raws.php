<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Raw;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Raws extends Component
{
    use WithPagination, WithFileUploads;

    public $showModal = false;
    public $showModalPhoto = false;
    public $productId;
    public $productName;
    public $product;
    public $parentId;
    public $parentName;
    public $image;

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

        return view('livewire.admin.crud.raws', [
            'products' => Raw::query()
                ->where('raw_type_id','=',$this->parentId)
                ->with(['raw_type', 'media'])
                ->orderByDesc('id')
                ->latest()
                ->paginate(20)
        ]);
    }

    public function create()
    {
        $this->showModal = true;
        $this->product = [ 'raw_type_id' => $this->parentId ];
        $this->productId = null;
    }

//    public function edit($productId)
//    {
//        $this->showModal = true;
//        $this->productId = $productId;
//        $this->product = Fashion::find($productId);
//    }

    public function edit($productId)
    {
        $this->showModal = true;
        $this->productId = $productId;
        $this->product = Raw::find($productId);
//        $this->productName = $this->product->name;
    }

    public function save()
    {

//        dd($this);
        $this->validate();



        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
            $fashion = Raw::create($this->product);
        }
        $this->showModal = false;
        $this->raw = null;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($productId)
    {
        $product = Raw::find($productId);
        if ($product) {
            $product->delete();
            $product->media()->delete();

        }

    }

    /*
     * Photo
     */

    public function editPhoto($productId)
    {
        $this->showModalPhoto = true;
        $this->productId = $productId;
        $this->product = Raw::find($productId);
        $this->productName = $this->product->name;
    }

    public function savePhoto()
    {

//        dd($this);
        $this->validate([
            'image' => 'file|mimes:jpg,bmp,png,webp|required',
        ]);



        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
            $fashion = Raw::create($this->product);
            $fashion->raws()->attach($this->raw['id']);
        }
        $this->showModal = false;
        $this->raw = null;
    }

    public function closePhoto()
    {
        $this->showModalPhoto = false;
    }

    public function uplodeImage($productId)
    {
        $product = Raw::find($productId);
        $media = $product
            ->addMediaFromUrl($this->image->temporaryUrl())
            ->usingName(str_slug($product->name).$product->media->count())
            ->usingFileName(str_slug($this->image->getClientOriginalName()).'.'
                .$this->image->getClientOriginalExtension())
            ->toMediaCollection('images');
//        dd($media->getUrl('thumb'));
//        $product
//            ->addMedia($this->image)
//            ->usingName(str_slug($product->name).$product->media->count())
//            ->usingFileName($this->image->getClientOriginalName())
//            ->toMediaCollection('images');
        $this->showModal = false;
        $this->showModalPhoto = false;
    }

    public function deleteImage($imgId)
    {
        $image = Media::find($imgId);
        if ($image) {
            $image->delete();
        }
        $this->showModal = false;
        $this->showModalPhoto = false;
    }
}
