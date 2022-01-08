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

    public static function search($searchArray)
    {
        return self::whereHas('templates.fashions.items.products.offers')
            ->with(['gender'])
            ->where(function ($q) use ($searchArray) {
                foreach ($searchArray as $word)
                    $q->orWhere('name', 'LIKE', '%' . $word . '%');
            });

    }

    public static function inOffers()
    {
        return self::whereHas('templates.fashions.items.products.offers')
            ->with('gender');
    }
}
