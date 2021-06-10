<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemplateGroup extends Model
{
    protected $fillable = [
      'name', 'gender_id'
    ];

    public function templates()
    {
        return $this->hasMany(Template::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
