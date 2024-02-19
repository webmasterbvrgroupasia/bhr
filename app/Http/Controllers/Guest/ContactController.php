<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ContactController extends Controller
{
    function index() : View {
        
        $seoData = new SEOData(
            title: 'Contact Us | BVR Bali Holiday Rentals',
            description: 'Contact BVR Bali Holiday Rentals for unforgettable vacation experiences. Reach out today to start planning your dream getaway!'
        );

        return view('pages.static.contact-us',['seoData'=>$seoData]);

    }
}
