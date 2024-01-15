<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Guest\Property;
use Illuminate\Http\Request;

class SearchPropertyController extends Controller
{
    public function search(Request $request){

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
            
            return view('pages.guest.properties.index',['properties'=>$results]);

        } else {
            
            return view('pages.guest.properties.index',['properties'=>$results]);
        
        }
        


    }
}
