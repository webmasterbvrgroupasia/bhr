<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Guest\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $seoData = new SEOData(
            
            title: 'Amazing Activities | BVR Bali Holiday Rentals',

            description: 'Embark on unforgettable adventures with BVR Bali Holiday Rentals. Explore thrilling activities that will elevate your Bali experience. Start planning your next adventure today!',
        
        );

        $categories = ActivityCategory::all();

        $activities = Activity::where('status',1)->paginate(10);

        return view('pages.guest.activities.index',[

            'seoData' => $seoData,
            
            'categories' => $categories,
            
            'activities' => $activities,
        
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
    public function show($slug)
    {
        $activity = DB::table('activities')

        ->join('areas' , 'areas.id','=','activities.area_id')

        ->select('activities.*','areas.location')

        ->where('slug', $slug)

        ->first();

        $price = $activity->price;

        $markup = $price * 20 / 100;

        $dummyPrice = $price + $markup;

        //Declaring variable to store values from the database.
        $value = $activity->images;

        //Removing the quote symbol from the raw value
        $value = str_replace(['"'], '', $value);

        // Split the string into an array using the comma as delimiter
        $images = explode(',', $value);

        return view('pages.guest.activities.detailed', [
            
            'activity' => $activity,
            
            'images'=>$images,
        
            'dummyPrice' => $dummyPrice,

        ]);
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
