<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Fashion;
use App\Models\Gender;
use App\Models\Offer;
use App\Models\OfferSet;
use App\Models\Product;
use App\Models\ProductsOffer;
use App\Models\Size;
use App\Models\Template;
use App\Models\TemplateGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function show(Request $request)
    {

        $query = Offer::with(
            'offer_sets.set.set_products.products.fashion.template.template_group.gender',
            'offer_sets.set.set_products.products.fashion.template.brand',
            'offer_sets.set.set_products.products.size',
            'offer_sets.set.set_products.products.fashion.raw_items.raw.raw_type'
        );

        if ($gender_id = $request->get('gender_id'))
            $query->whereHas('offer_sets.set.set_products.products.fashion.template.template_group.gender',
                function (Builder $q) use ($gender_id)  {
                $q->where('id','=',$gender_id);
                });

        if ($template_id = $request->get('template_id'))
            $query->whereHas('offer_sets.set.set_products.products.fashion.template',
                function (Builder $q) use ($template_id)  {
                    $q->where('id','=',$template_id);
                });

        $offers = $query->get();



        foreach ($offers as $i => $offer) {

            $response[$i] = new Offer();
            $response[$i]->set_name($offer);
            $response[$i]->set_sizes($offer);
            $response[$i]->set_fashions($offer);

        }

//        dump($response[0]);

//        exit();

        return view('livewire.offers');
    }
}
