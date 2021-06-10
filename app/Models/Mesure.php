<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesure extends Model
{
    use HasFactory;

    public function raws()
    {
        return $this->hasMany(Raw::class);
    }

    public function mesure()
    {
        return $this->belongsTo(Mesure::class);
    }
}
