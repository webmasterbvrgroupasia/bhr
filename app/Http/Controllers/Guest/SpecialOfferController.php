<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class SpecialOfferController extends Controller
{
    public function index() {
    
        $special_offers = SpecialOffer::paginate(10);

        $seoData = new SEOData(
            title: 'Special Offers | BVR Bali Holiday Rentals',
            description: 'Unlock exclusive deals and create unforgettable memories with BVR Bali Holiday Rentals. Explore our special offers and start planning your dream vacation today!'
        );
        
        return view('pages.guest.specialoffers.index',[
            'special_offers'=>$special_offers,
            'seoData' => $seoData
        ]);
    
    }

    public function show($slug) {

        $offer = DB::table('special_offer')->where('slug',$slug)->first();

        return view('pages.guest.specialoffers.detail',compact('offer'));

    }
    
}
