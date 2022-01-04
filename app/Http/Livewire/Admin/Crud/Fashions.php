<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Fashion;
use App\Models\Raw;
use App\Models\RawType;
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
    public $fashionId;
    public $fashion;
    public $raw_type;
    public $parentId;
    public $parentName;
    public $image;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'raw_type.id' => 'required',
    ];

    public function mount(int $parentId, string $parentName)
    {
        $this->parentId = $parentId;
        $this->parentName = $parentName;
    }

    public function render()
    {

        return view('livewire.admin.crud.fashions', [
            'fashions' => Fashion::query()
                ->where('template_id', '=', $this->parentId)
                ->with(['template', 'media', 'raws.raw_type'])
                ->orderByDesc('id')
//                ->latest()
                ->paginate(20),
            'raw_types' => RawType::query()
                ->orderBy('name')
                ->get()
        ]);
    }

    public function create()
    {
        $this->showModal = true;
        $this->fashion = ['template_id' => $this->parentId];
        $this->fashionId = null;
    }

//    public function edit($productId)
//    {
//        $this->showModal = true;
//        $this->productId = $productId;
//        $this->product = Fashion::find($productId);
//    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->fashionId)) {
            $this->fashion->save();
        } else {
            $fashion = Fashion::create($this->fashion);
            if (!($raw = Raw::query()->whereNull('name')->where('raw_type_id',$this->raw_type['id'])->first()))
                $raw = Raw::create([
                    'name' => null,
                    'raw_type_id' => $this->raw_type['id']
                ]);
            $fashion->raws()->attach($raw->id);
        }
        $this->showModal = false;
        $this->raw_type = null;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete($fashionId)
    {
        $fashion = Fashion::find($fashionId);
        if ($fashion) {
            $fashion->media()->delete();
            $res_delete['raw_types'] = $fashion->raws()->detach();
            $res_delete['fashion'] = $fashion->delete();

        }

    }

    /*
     * Photo
     */

    public function editPhoto($fashionId)
    {
//        $this->showModal = true;
        $this->showModalPhoto = true;
        $this->fashionId = $fashionId;
        $this->fashion = Fashion::find($fashionId);
    }

    public function savePhoto()
    {

//        dd($this);
        $this->validate([
            'image' => 'file|mimes:jpg,bmp,png,webp|required',
        ]);


        if (!is_null($this->fashionId)) {
            $this->fashion->save();
        } else {
            $fashion = Fashion::create($this->fashion);
            $fashion->raw_types()->attach($this->raw_type['id']);
        }
        $this->showModal = false;
        $this->raw_type = null;
    }

    public function closePhoto()
    {
        $this->showModalPhoto = false;
    }

    public function uplodeImage($fashionId)
    {
        $fashion = Fashion::find($fashionId);
        $fashion
            ->addMediaFromUrl($this->image->temporaryUrl())
            ->usingName(str_slug($fashion->name) . $fashion->media->count())
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
