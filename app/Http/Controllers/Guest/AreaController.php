<?php

namespace App\Http\Controllers\Guest;

use App\Models\Guest\Area;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $areas = Area::get();

        $seoData = new SEOData(
          
            title: 'Recommended Areas | BVR Bali Holiday Rentals',
          
            description: "Discover Bali's Hidden Gems: Dive Into Local Culture and Landscapes with BVR Bali Holiday Rentals. Explore the beauty and charm of Bali's diverse regions. Start your journey now!"
        
        );

        return view('pages.guest.areas.index',[
            
            'areas'=>$areas,
        
            'seoData' => $seoData

        ]);
    
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
    public function show($location)
    {

        $area = DB::table('areas')
        
        ->where('location', $location)
        
        ->first();

        return view ('pages.guest.areas.detailed', compact('area'));


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
