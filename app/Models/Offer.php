<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    public $offer_name;
    public $sets_count;
    public $fashions_array;
    public $fashions_count;
    public $sizes_array;
    public $sizes_count;

    protected $fillable = [
        'name'
    ];

    public function sets()
    {
        return $this->belongsToMany(Set::class);
    }

    public function set_sizes($offer)
    {
        foreach ($offer->offer_products as $offer_product)
            foreach ($offer_sets->set->set_products as $set_products)
                $res[] = $set_products->products->size->name;
        $res = array_unique($res);
        asort($res);
        $this->sizes_array = $res;
        $this->sizes_count = count($this->sizes_array);

    }

    public function set_name($offer)
    {
        foreach ($offer->offer_sets as $offer_sets)
            foreach ($offer_sets->set->set_products as $set_products)
                $res[] =
                    $set_products->products->fashion->template
                        ->template_group->name
                    . ' '
                    . $set_products->products->fashion->template
                        ->name;
        $res = array_unique($res, SORT_STRING);
        asort($res);
        $this->offer_name = '';
        if (sizeof($res) > 1) $this->offer_name = "Комплект ";
        $this->offer_name .= implode(' + ', $res);

    }

    public function set_fashions($offer)
    {
        foreach ($offer->offer_sets as $offer_sets)
            foreach ($offer_sets->set->set_products as $set_products)
                foreach ($set_products->products->fashion->raw_items as $raw_item)
                    $res[$raw_item->id] = [
                        'name' => $raw_item->raw->raw_type->name,
                        'share' => $raw_item->share
                    ];;
//        $res = array_unique($res);
//        asort($res);
        $this->fashions_array = $res;
        $this->fashions_count = count($this->fashions_array);
        if ($this->fashions_count == 1) {
            $res = reset($this->fashions_array);
            $res['share'] = 100;
            $this->fashions_array = $res;
        }


    }

}
