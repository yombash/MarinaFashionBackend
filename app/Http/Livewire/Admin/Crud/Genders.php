<?php

namespace App\Http\Livewire\Admin\Crud;

use App\Models\Gender;
use Livewire\Component;
use Livewire\WithPagination;

class Genders extends Component
{

    use WithPagination;

    public $showModal = false;
    public $genderId;
    public $gender;

    protected $paginationTheme = 'bootstrap';

    public $designTemplate = 'tailwind';

    protected $rules = [
        'gender.name' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.crud.genders', [
            'genders' => Gender::query()->orderBy('name')->latest()
                ->paginate(20)
        ]);
    }

    public function edit(Gender $gender)
    {
        $this->showModal = true;
        $this->genderId = $gender->id;
        $this->gender = $gender;
    }

    public function create()
    {
        $this->showModal = true;
        $this->gender = null;
        $this->genderId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->genderId)) {
            $this->gender->save();
        } else {
            Gender::create($this->gender);
        }
        $this->showModal = false;
    }

    public function close()
    {
        $this->showModal = false;
    }

    public function delete(Gender $gender)
    {
        if ($gender) $gender->delete();
    }

}
