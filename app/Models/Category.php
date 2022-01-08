<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','position'];

    public function templates()
    {
        return $this->belongsToMany(Template::class);
    }

    public static function search($searchArray)
    {
        return self::whereHas('templates.fashions.items.products.offers')
            ->with('templates.fashions.items.products.offers')
            ->where(function ($q) use ($searchArray) {
                foreach ($searchArray as $word)
                    $q->orWhere('name', 'LIKE', '%' . $word . '%');
            });

    }

    public static function inOffers()
    {
        return self::whereHas('templates.fashions.items.products.offers')
            ->orderBy('position');
    }
}
