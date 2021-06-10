<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    public function offers()
    {
        return $this->belongsToMany(Offer::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class)
//            ->orderByDesc('created_at')
            ->latest('created_at')
            ;
    }

    public function price_latest()
    {
        return $this->hasMany(Price::class)
//            ->orderByDesc('created_at')
            ->latest('created_at')->limit(1)
            ;
    }
}
