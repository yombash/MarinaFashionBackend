<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Types\This;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Brands extends Component
{

    use WithPagination, WithFileUploads;

    public $showModal = false;
    public $brandId;
    public $brand;
    public $image;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'brand.name' => 'required',
    ];

    public function render()
    {
//        dd(Brand::with('media')->orderBy('name')->get());
        return view('livewire.admin.crud.brands', [
            'brands' => Brand::with('media')->orderBy('name')->latest()
                ->paginate(20)
        ]);
    }

    public function edit(Brand $brand)
    {
        $this->showModal = true;
        $this->brandId = $brand->id;
        $this->brand = $brand;
    }

    public function create()
    {
        $this->showModal = true;
        $this->brand = null;
        $this->brandId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->brandId)) {
            $this->brand->save();
        } else {
            Brand::create($this->brand);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete(Brand $brand)
    {
//        $brand = Brand::find($brandId);
        if ($brand) {
            $brand->delete();
        }
    }

    public function uplodeImage(Brand $brand)
    {
//        $product = Brand::find($productId);
        $brand
            ->addMediaFromUrl($this->image->temporaryUrl())
            ->usingName(str_slug($brand->name).$brand->media->count())
            ->usingFileName($this->image->getClientOriginalName())
            ->toMediaCollection('images');
        $this->showModal = false;
    }

    public function deleteImage(Media $image)
    {
//        $image = Media::find($imgId);
        if ($image) {
            $image->delete();
        }
        $this->showModal = false;
    }

}
