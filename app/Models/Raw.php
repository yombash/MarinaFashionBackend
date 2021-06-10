<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Raw extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100)
            ->performOnCollections('images');
    }

    protected $fillable = [
        'name',
        'raw_type_id'
    ];

    public function raw_type()
    {
        return $this->belongsTo(RawType::class)->orderBy('name');
    }

    public function fashions()
    {
        return $this->belongsToMany(Fashion::class);
    }
}
