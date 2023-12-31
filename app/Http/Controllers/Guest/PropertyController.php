<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties =

            DB::table('properties')

            ->join('areas', 'areas.id', '=', 'properties.area_id')

            ->select('properties.*', 'areas.location')

            ->where('property_status', '=', 1)

            ->orderBy('created_at','desc')

            ->paginate(15);

        return view('pages.guest.properties.index', ['properties' => $properties]);
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

        //Declaring variable to store values from the database.
        $value = $property->images;
                    
        //Removing the quote symbol from the raw value
        $value = str_replace(['"'], '', $value);
        
        // Split the string into an array using the comma as delimiter
        $images = explode(',', $value);
            
        return view('pages.guest.properties.detailed', ['property' => $property,'images'=>$images]);
        
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
