<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activity;
use App\Models\Admin\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_properties = DB::table('properties')->get();

        $properties =

        DB::table('properties')

            ->join('areas','areas.id','=','properties.area_id')

            ->select('properties.*','areas.name')

            ->where('property_status', '=', 1)

            ->take(12)

            ->get();

            $shuffledProperties = $properties->shuffle();

            $activities = ActivityCategory::all();

            $shuffledActivities = $activities->shuffle();

            $areas =

            DB::table('areas')

            ->take(4)

            ->skip(0)

            ->get();

            $shuffledAreas = $areas->shuffle();

            $seoData = new SEOData(
            
                title: 'Bali Holiday at Your Fingertips | BVR Bali Holiday Rentals',
    
                description: "Experiencing paradise vibes never gets easier. With BVR Bali Holiday Rentals, make your Bali holiday perfect, at your fingertips!"
    
            );


        return view ('pages.static.index',[ 'properties'=>$shuffledProperties,'activities'=>$shuffledActivities,'all_properties'=>$all_properties,'areas'=>$shuffledAreas,            'seoData' =>$seoData,
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
    public function show($id)
    {
        //
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
