<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class RawType extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name'
    ];

    public function raws()
    {
        return $this->hasMany(Raw::class);
    }

    public function mesure()
    {
        return $this->belongsTo(Mesure::class);
    }

    public static function search($searchArray)
    {
        return self::whereHas('raws.fashions.items.products.offers')
//            ->with(['template_group','fashions.raws.raw_type'])
            ->where(function ($q) use ($searchArray) {
                foreach ($searchArray as $word)
                    $q->orWhere('name', 'LIKE', '%' . $word . '%');
            });

    }

    public static function inOffers()
    {
        return self::whereHas('raws.fashions.items.products.offers');

    }
}
