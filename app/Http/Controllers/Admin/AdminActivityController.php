<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $activities = Activity::with(['category','area'])

        ->where('status',1)

        ->paginate(10);

        return view('pages.dashboard.superadmin.activities.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $areas = DB::table('areas')->get();

        $categories = DB::table('activity_categories')->get();

        return view('pages.dashboard.superadmin.activities.add',[ 'areas' => $areas,'categories'=>$categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request -> validate([

            'name' => 'required',

            'area_id' => 'required',

            'slug' => 'required',

            'images' => 'required|array|max:4056',

            'category_id' => 'required',

            'description' => 'required',

            'inclusion' => 'required',

            'price' => 'required',

            'booking_link'=>'required',

            'status' => 'required'

        ]);

        $images = [];

        foreach ($validatedData['images'] as $image) {

            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $image_path = $image->storeAs('images', $fileName,'public');

            array_push($images, $image_path);
        }

        $allImages = join(',', $images);

        $validatedData['images'] = $allImages;


        Activity::create($validatedData);

        return redirect()->route('activities.index')

        ->with('success', 'Activity created successfully.');
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
    public function edit(Activity $activity)
    {

        $areas = DB::table('areas')->get();

        $categories = DB::table('activity_categories')->get();

        return view ('pages.dashboard.superadmin.activities.edit',compact('activity'))->with(['areas'=>$areas,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $validatedData = $request -> validate([

            'name' => 'required',

            'area_id' => 'required',

            'slug' => 'required',

            'category_id' => 'required',

            'images' => 'array|max:4056',

            'description' => 'required',

            'inclusions' => 'required',

            'price' => 'required',

            'booking_link'=>'required',

            'status' => 'required'

        ]);

        $images = [];

        if ($request->has('images')) {
            foreach ($validatedData['images'] as $image) {

                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

                $image_path = $image->storeAs('images', $fileName,'public');

                array_push($images, $image_path);
            }

            $allImages = join(',', $images);

            $validatedData['images'] = $allImages;
        }



        $activity->update($validatedData);

        return redirect()->route('activities.index')->with('update-success','Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        Activity::destroy($activity->id);

        return redirect()->route('activities.index')->with('success-delete', 'Data removed');
    }
}
