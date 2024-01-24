<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminActivityCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = DB::table('activity_categories')->paginate(10);

        return view('pages.dashboard.superadmin.activity-categories.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.superadmin.activity-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name'=>'required|string',

            'keywords' => 'required|string',

            'images' => 'required|max:4056'

        ]);

        $image = $validatedData['images'];

        $filename = uniqid() . '.' . $validatedData['images']->getClientOriginalExtension();

        $imagePath = $image->storeAs('categoryImages',$filename, 'public');

        $validatedData['images'] = $imagePath;

        ActivityCategory::create($validatedData);

        return redirect()->route('activity-categories.index');

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
        $category = ActivityCategory::find($id);

        return view('pages.dashboard.superadmin.activity-categories.edit',compact('category'));

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

        $updatedData = $request->validate([

            'name'=>'required',

            'keywords' => 'nullable',

            'images' => 'nullable'

        ]);


        if (isset($updatedData['images'])) {

            $image = $updatedData['images'];

            $filename = uniqid() . '.' . $updatedData['images']->getClientOriginalExtension();

            $imagePath = $image->storeAs('categoryImages',$filename, 'public');

            $updatedData['images'] = $imagePath;
        }

        $category = ActivityCategory::find($id);

        $category->update($updatedData);

        return redirect()->route('activity-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category = ActivityCategory::find($id);

        $category->delete();

        return redirect()->back();

    }
}
