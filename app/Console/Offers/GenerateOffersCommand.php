<?php


namespace App\Console\Offers;


use App\Models\Fashion;

class GenerateOffersCommand
{
    public function exec()
    {
//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        DB::table('offers')->truncate();
//        DB::table('offer_product')->truncate();
//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $fashions = Fashion::query()
            ->whereHas('items.products.prices')
            ->withCount('items')
            ->get();

        foreach ($fashions as $fashion) {
            $offer = \App\Models\Offer::create();
            foreach ($fashion->items as $item)
                foreach ($item->products as $product)
                    $offer->products()->attach($product->id);
        }
    }
}
