<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Guest\Property;
use Illuminate\Http\Request;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class SearchPropertyController extends Controller
{
    public function search(Request $request){

        $seoData = new SEOData(

            title: 'Explore Our Properties | BVR Bali Holiday Rentals',
            
            description: "Embark on a journey through our exquisite properties at BVR Bali Holiday Rentals. Discover luxury, comfort, and the perfect getaway.",
            
            url: "https://bvrbaliholidayrentals.com/properties",
        
        );

        $validatedData = $request->validate([

            'destination'=>'required|string',
        
        ]);

        $destination = $validatedData['destination'];

        $results = Property::with('location')
        
        ->where('name',$destination)

        ->where('property_status',1)

        ->orWhere('name','like','%'.$destination.'%')
                
        ->paginate(12);

        if (!$results) {
            
            return view('pages.guest.properties.index',[
                
                'properties'=>$results,
            
                'seoData' => $seoData

            ]);

        } else {
            
            return view('pages.guest.properties.index',[
                
                'properties'=>$results,
            
                'seoData' => $seoData
            
            ]);
        
        }
        


    }
}
