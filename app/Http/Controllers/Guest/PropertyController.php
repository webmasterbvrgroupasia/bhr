<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\Property;
use App\Models\Guest\Property as GuestProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seoData = new SEOData(

            title: 'Explore Our Properties | BVR Bali Holiday Rentals',
            
            description: "Embark on a journey through our exquisite properties at BVR Bali Holiday Rentals. Discover luxury, comfort, and the perfect getaway.",
            
            url: "https://bvrbaliholidayrentals.com/properties",
        
        );

        $properties =

            GuestProperty::with('location')
           
            ->where('property_status', '=', 1)

            ->orderBy('created_at','desc')

            ->paginate(15);

        return view('pages.guest.properties.index', ['properties' => $properties,'seoData' => $seoData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $property = DB::table('properties')

        ->join('areas' , 'areas.id','=','properties.area_id')

        ->select('properties.*','areas.location')
        
        ->where('slug', $slug)
        
        ->first();

        $metaDescription = $property->description;

        $metaDescription = explode('.',$metaDescription);

        $seoData = new SEOData(
            
            title:  $property->name . ' | BVR Bali Holiday Rentals',

            description: $metaDescription[0] . '.',
        
        );

        $propertyId = $property->id;

        //Declaring variable to store values from the database.
        $value = $property->images;
                    
        //Removing the quote symbol from the raw value
        $value = str_replace(['"'], '', $value);
        
        // Split the string into an array using the comma as delimiter
        $images = explode(',', $value);

        $similiarProperties = GuestProperty::with('location')
        
        ->where('area_id','=',$property->area_id)

        ->where('id','!=',$propertyId)

        ->orderBy('created_at','desc')

        ->skip(0)

        ->take(3)

        ->get();
        
        // dd($similiarProperties);
            
        return view('pages.guest.properties.detailed', ['property' => $property,'images'=>$images,'similiarProperties'=>$similiarProperties,'seoData'=>$seoData]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
