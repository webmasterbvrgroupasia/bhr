<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AreaUpdateRequest;
use App\Models\Admin\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $areas = DB::table('areas')->paginate(10);

        return view('pages.dashboard.superadmin.areas.index',['areas'=>$areas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.dashboard.superadmin.areas.add');
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

            'location' => 'required',

            'description' => 'required',

            'image' => 'mimes:jpeg,jpg,png,webp,gif|required|max:4056',

        ]);

        if($request->file('image')) {

            $filename = uniqid() . '.' . $validatedData['image']->getClientOriginalExtension();

            $validatedData['image'] = $request->file('image')->storeAs('area-images', $filename, 'public');

        }

        Area::create($validatedData);

        return redirect()->route('areas.index')->with('success-add','Area added successfully');

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
    public function edit(Area $area)
    {
        return view('pages.dashboard.superadmin.areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $validatedData = $request->validate([

            'location' => 'string',

            'description' => 'string',

            'image' => 'mimes:jpeg,jpg,png,webp,gif|max:4056'
        ]);

        if($request->file('image')) {

            $filename = uniqid() . '.' . $validatedData['image']->getClientOriginalExtension();

            $validatedData['image'] = $request->file('image')->storeAs('area-images', $filename, 'public');

        }

        $area->update($validatedData);

        return redirect()->route('areas.index')->with('update-success', 'Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {

        Area::destroy($area->id);

        return redirect()->route('areas.index')->with(['delete-success' => 'Data Removed']);

    }
}
