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

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    static public function offer_templates_cards($offers) {
        foreach ($offers as $offer)
            foreach ($offer->products as $product)
                foreach ($product->items as $item)
                    $templates[] = $item->fashion->template->id;
        $templates = array_unique($templates);
        dd($templates);
    }

    static public function offer_card(Offer $offer): array
    {
        $res = [];

        foreach ($offer->products as $product)
            foreach ($product->items as $item)
                $fashions[] = $item->fashion->id;
        $fashions = array_unique($fashions);

        // если товарное предложение включает только моно-фасон
        if (count($fashions) == 1) {
            $res['template'] = $offer->products->first()->items->first()->fashion->template->name;
            $res['template_group'] = $offer->products->first()->items->first()->fashion->template->template_group->name;
            $res['raw_type'] = $offer->products->first()->items->first()->fashion->raws->first()->raw_type->name;

            $res['raw_type_additional']=[];
            foreach ($offer->products as $product)
                foreach ($product->items as $item)
                    foreach ($item->fashion->raws as $raw)
                        if ($res['raw_type'] != $raw->raw_type->name)
                            $res['raw_type_additional'][$raw->raw_type->id] = $raw->raw_type->name;

            $res['sizes']=[];
            foreach ($offer->products as $product)
                foreach ($product->items as $item)
                    $res['sizes'][$product->id] = $item->size->name;

            $res['prices']=[];
            foreach ($offer->products as $product)
                    $res['prices'][$product->id] = $product->price_latest->first();

            $res['sizes_count'] = count($res['sizes']);

            $res['thumb_url'] = $offer->products->first()->items->first()->fashion->getFirstThumbUrl();
            $res['image_url'] = $offer->products->first()->items->first()->fashion->getFirstImageUrl();


//            dd($res);

        } // если товарное предложение -- это комплект из нескольких фасонов
        elseif (count($fashions) > 1) {

        } else return [];

        return $res;
    }

//    public function set_sizes($offer)
//    {
//        foreach ($offer->offer_products as $offer_product)
//            foreach ($offer_sets->set->set_products as $set_products)
//                $res[] = $set_products->products->size->name;
//        $res = array_unique($res);
//        asort($res);
//        $this->sizes_array = $res;
//        $this->sizes_count = count($this->sizes_array);
//
//    }

//    public function set_name($offer)
//    {
//        foreach ($offer->offer_sets as $offer_sets)
//            foreach ($offer_sets->set->set_products as $set_products)
//                $res[] =
//                    $set_products->products->fashion->template
//                        ->template_group->name
//                    . ' '
//                    . $set_products->products->fashion->template
//                        ->name;
//        $res = array_unique($res, SORT_STRING);
//        asort($res);
//        $this->offer_name = '';
//        if (sizeof($res) > 1) $this->offer_name = "Комплект ";
//        $this->offer_name .= implode(' + ', $res);
//
//    }

//    public function set_fashions($offer)
//    {
//        foreach ($offer->offer_sets as $offer_sets)
//            foreach ($offer_sets->set->set_products as $set_products)
//                foreach ($set_products->products->fashion->raw_items as $raw_item)
//                    $res[$raw_item->id] = [
//                        'name' => $raw_item->raw->raw_type->name,
//                        'share' => $raw_item->share
//                    ];;
////        $res = array_unique($res);
////        asort($res);
//        $this->fashions_array = $res;
//        $this->fashions_count = count($this->fashions_array);
//        if ($this->fashions_count == 1) {
//            $res = reset($this->fashions_array);
//            $res['share'] = 100;
//            $this->fashions_array = $res;
//        }
//
//
//    }

}
