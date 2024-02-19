<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class AboutUsController extends Controller
{
    function index() : View {
        
        $seoData = new SEOData(
            
            title: 'About Us | BVR Bali Holiday Rentals',

            description: 'Discover the story behind BVR Bali Holiday Rentals - your gateway to unforgettable vacations. Learn more about our mission and commitment to excellence.'
        
        );

        return view('pages.static.about',[
           
            'seoData' => $seoData,
        
        ]);

    }
}
