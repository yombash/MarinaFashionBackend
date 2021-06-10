<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function show(int $offerId)
    {
        $offer = Offer::query()->find($offerId);
//        var_dump($offer->toArray());
        return view('livewire.product-details')
                ->with('offer',$offer);
    }
}
