<?php

namespace App\Http\Livewire\Main\Index;

use App\Models\TemplateGroup;
use Illuminate\Support\Str;
use Livewire\Component;

class TemplatesList extends Component
{
    public function render()
    {
//        $list = TemplateGroup::inOffers()->get() ?? [];
//        $str = 'прекрасный ассортимент трикотажа';
//        switch (count($list))
//        {
//            case 1: $str = Str::lower($list['name']); break;
//            default:
//                $last_name = array_pop($list);
//                $str = implode(', ',$list). " и ". $last_name;
//        }

        return view('livewire.main.index.templates-list', [
            'template_groups' => TemplateGroup::inOffers()->get() ?? []
        ]);
    }
}
