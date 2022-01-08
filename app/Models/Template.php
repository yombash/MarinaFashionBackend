<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Template extends Model
{

    protected $fillable = [
        'brand_id', 'template_group_id', 'name'
    ];

    public function template_group()
    {
        return $this->belongsTo(TemplateGroup::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function fashions()
    {
        return $this->hasMany(Fashion::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public static function search($searchArray)
    {
        return self::whereHas('fashions.items.products.offers')
            ->with(['template_group','fashions.raws.raw_type'])
            ->where(function ($q) use ($searchArray) {
                foreach ($searchArray as $word)
                    $q->orWhere('name', 'LIKE', '%' . $word . '%');
            });

    }


}
