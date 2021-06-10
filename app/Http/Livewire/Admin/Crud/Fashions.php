<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Fashion;
use App\Models\Raw;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use mysql_xdevapi\Exception;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Fashions extends Component
{

    use WithPagination, WithFileUploads;

    public $showModal = false;
    public $showModalPhoto = false;
    public $productId;
    public $product;
    public $raw;
    public $parentId;
    public $parentName;
    public $image;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'raw.id' => 'required',
    ];

    public function mount(int $parentId, string $parentName)
    {
        $this->parentId = $parentId;
        $this->parentName = $parentName;
    }

    public function render()
    {

        return view('livewire.admin.crud.fashions', [
            'products' => Fashion::query()
                ->where('template_id','=',$this->parentId)
                ->with(['raws.raw_type.mesure','template','media'])
                ->orderByDesc('id')
//                ->latest()
            ->paginate(20),
            'raws'  =>  Raw::query()
                ->with('raw_type')
                ->orderBy('name')
                ->get()
        ]);
    }

    public function create()
    {
        $this->showModal = true;
        $this->product = [ 'template_id' => $this->parentId ];
        $this->productId = null;
    }

//    public function edit($productId)
//    {
//        $this->showModal = true;
//        $this->productId = $productId;
//        $this->product = Fashion::find($productId);
//    }

    public function save()
    {

//        dd($this);
        $this->validate();



        if (!is_null($this->productId)) {
            $this->product->save();
        } else {
            $fashion = Fashion::create($this->product);
            $fashion->raws()->attach($this->raw['id']);
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
        $product = Fashion::find($productId);
        if ($product) {
                $res_delete['product'] = $product->delete();
                $res_delete['raws'] = $product->raws()->detach();
                $product->media()->delete();

        }

    }

    /*
     * Photo
     */

    public function editPhoto($productId)
    {
//        $this->showModal = true;
        $this->showModalPhoto = true;
        $this->productId = $productId;
        $this->product = Fashion::find($productId);
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
            $fashion = Fashion::create($this->product);
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
        $product = Fashion::find($productId);
        $product
            ->addMediaFromUrl($this->image->temporaryUrl())
            ->usingName(str_slug($product->name).$product->media->count())
            ->usingFileName($this->image->getClientOriginalName())
            ->toMediaCollection('images');
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
