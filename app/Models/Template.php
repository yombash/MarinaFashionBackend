<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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


}
