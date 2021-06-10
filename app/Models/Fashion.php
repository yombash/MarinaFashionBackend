<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Fashion extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
      'template_id'
    ];

    public function raws()
    {
        return $this->belongsToMany(Raw::class)
            ->withPivot(['qty']);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->performOnCollections('images');
    }
}
