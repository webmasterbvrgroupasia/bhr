<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpecialOfferController extends Controller
{
    public function index() {
    
        $special_offers = SpecialOffer::paginate(10);
        
        return view('pages.guest.specialoffers.index',compact('special_offers'));
    
    }

    public function show($slug) {

        $offer = DB::table('special_offer')->where('slug',$slug)->first();

        return view('pages.guest.specialoffers.detail',compact('offer'));

    }
    
}
