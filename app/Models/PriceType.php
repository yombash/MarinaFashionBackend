<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
