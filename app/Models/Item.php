<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'fashion_id',
        'size_id'
    ];

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function fashion() {
        return $this->belongsTo(Fashion::class);
    }

    public function size() {
        return $this->belongsTo(Size::class);
    }


}
