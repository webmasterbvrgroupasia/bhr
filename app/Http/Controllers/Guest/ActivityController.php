<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Guest\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $activities = Activity::with('category')->where('status',1)->paginate(10);

        $categories = ActivityCategory::all();
        
        return view('pages.guest.activities.index',compact('activities','categories'));
    
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
        $activities = DB::table('activities')

        ->join('areas' , 'areas.id','=','activities.area_id')

        ->select('activities.*','areas.location')
        
        ->where('slug', $slug)
        
        ->first();

        $inclusions = $activities->inclusions;

        $inclusions = explode(",",$inclusions);

        //Declaring variable to store values from the database.
        $value = $activities->images;
                    
        //Removing the quote symbol from the raw value
        $value = str_replace(['"'], '', $value);
        
        // Split the string into an array using the comma as delimiter
        $images = explode(',', $value);
        

            return view('pages.guest.activities.detailed', ['activities' => $activities,'images'=>$images,'inclusions'=>$inclusions]);
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
