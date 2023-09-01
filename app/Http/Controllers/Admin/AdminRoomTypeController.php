<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\RoomType;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminRoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([

            'name' => 'required',

            'room_area' => 'required',

            'maximum_adult' => 'required',

            'maximum_child' => 'required',

            'images' => 'required|array',

            'price_per_night' => 'required',

            'property_id' => 'required'
        ]);

        $images = [];

        foreach ($validatedData['images'] as $image) {
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $image_path = $image->storeAs('images', $fileName, 'public');

            Image::make($image->getRealPath())->resize(150, 150)-save($image_path);

            array_push($images, $image_path);
        }

        $allImages = join(',', $images);

        $validatedData['images'] = $allImages;

        RoomType::create($validatedData);

        return redirect()->route('properties.index')->with('success', 'Success Add Room Type');

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
    public function edit(RoomType $roomType)
    {
        return view('pages.dashboard.superadmin.properties.room-types.edit', ['roomTypes' => $roomType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomType $roomType)
    {
        $validateData = $request->validate([
            'name' => 'required',

            'room_area' => 'required',

            'maximum_adult' => 'required',

            'maximum_child' => 'required',

            'images' => 'nullable|array',

            'price_per_night' => 'required',

        ]);

        $images = [];

        if (isset($request['images'])) {

            foreach ($validateData['images'] as $image) {

                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

                $image_path = $image->storeAs('images', $fileName, 'public');

                Image::make($image->getRealPath())->resize(150, 150)-save($image_path);

                array_push($image, $image_path);

            }

            $allImages = join(',', $images);

            $validateData['images'] = $allImages;
        }

        $roomType->update($validateData);

        return redirect()->route('properties.index')->with('success', 'Success Add Room Type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomType $roomType)
    {
        $roomType->delete();

        return redirect()->route('properties.index')->with('success', 'Success Add Room Type');
    }
}
