<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admin\Constructor\Offer;
use App\Models\Fashion;
use App\Models\Gender;
use App\Models\Raw;
use App\Models\RawType;
use App\Models\Template;
use App\Models\TemplateGroup;
use Illuminate\Http\Request;

class TablesController extends Controller
{

    public function template_groups(int $parent_id)
    {

//        dd($parent_id);
        $model = TemplateGroup::query()->where('gender_id', '=', $parent_id)->with('gender')->get();
//        dd($model);

        return view('admin.tables.template_groups', [
            'model' => $model
        ]);
    }

    public function templates(int $parent_id)
    {

        $model_parent = TemplateGroup::query()->whereId($parent_id)->with('gender')->get();

        return view('admin.tables.templates', [
            'model_parent' => $model_parent,

        ]);
    }

    public function fashions(int $parent_id)
    {
        $model_parent = Template::query()->whereId($parent_id)->with('template_group.gender')->get();

//        dd($model_parent);
        return view('admin.tables.fashions', [
            'model_parent' => $model_parent,

        ]);
    }

    public function items(int $parent_id)
    {

        $model_parent = Fashion::query()->whereId($parent_id)->with(['template.template_group.gender', 'raws.raw_type'])
            ->get();

        $parent_name = 'Ссылка уже удалена';
        if ($model_parent[0]->raws->count()>0)
            $parent_name = "{$model_parent[0]->raws[0]->raw_type->name}: Фасон №{$model_parent[0]->id}";

//        dd($model_parent);
        return view('admin.tables.items', [
            'model_parent' => $model_parent,
            'parent_name' => $parent_name
        ]);
    }

    public function raws(int $parent_id)
    {

        $model_parent = RawType::query()->whereId($parent_id)->get();

        return view('admin.tables.raws', [
            'model_parent' => $model_parent,

        ]);
    }

}
