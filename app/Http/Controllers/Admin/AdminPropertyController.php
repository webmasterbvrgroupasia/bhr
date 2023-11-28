<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Area;
use App\Models\Admin\Property;
use App\Models\Admin\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::query()

            ->orderBy('created_at', 'desc')

            ->paginate(9);

        return view('pages.dashboard.superadmin.properties.index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $areas = DB::table('areas')->get();

        return view('pages.dashboard.superadmin.properties.add', ['areas' => $areas]);
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

            'area_id' => 'required',

            'slug' => 'required',

            'description' => 'required',

            'images' => 'required|array',

            'pool_images' => 'array',

            'restaurant_images' => 'array',

            'room_images' => 'array',

            'header_images' => 'array',

            'pool' => 'required',

            'bar' => 'required',

            'sauna' => 'required',

            'garden' => 'required',

            'non_smoking_room' => 'required',

            'family_room' => 'required',

            'hot_tub' => 'required',

            'jacuzzi' => 'required',

            'air_conditioning' => 'required',

            'property_status' => 'required',

            'booking_link' => 'required',

            'link_youtube' => 'nullable',

            'balcony' => 'required',

            'tv' => 'required',

            'electric_kettle' => 'required',

            'clothes_rack' => 'required',

            'hair_dryer' => 'required',

            'private_entrance' => 'required',

            'safety_box' => 'required',

            'desk' => 'required',

            'socket' => 'required',

            'private_bathroom' => 'required',

            'toilet_paper' => 'required',

            'shower' => 'required',

            'bathtub' => 'required',

            'slipper' => 'required',

            'toileteries' => 'required',

            'minibar' => 'required',

            'refrigerator' => 'required',

            'tea_coffee_maker' => 'required',

            'smoke_alarm' => 'required',

            'fire_extinguisher' => 'required',

        ]);

        $images = [];

        $pool_images = [];

        $restaurant_images = [];

        $room_images = [];

        $header_images = [];

        foreach ($validatedData['images'] as $image) {

            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

            $image_path = $image->storeAs('images', $fileName, 'public');

            array_push($images, $image_path);
        }

        if (isset($validatedData['pool_images'])) {

            foreach ($validatedData['pool_images'] as $pool_image) {

                $fileName = uniqid() . '.' . $pool_image->getClientOriginalExtension();

                $image_path = $pool_image->storeAs('images', $fileName, 'public');

                array_push($pool_images, $image_path);
            }

        }


        if (isset( $validatedData['restaurant_images'])) {

            foreach ($validatedData['restaurant_images'] as $restaurant_image) {

                $fileName = uniqid() . '.' . $restaurant_image->getClientOriginalExtension();

                $image_path = $restaurant_image->storeAs('images', $fileName, 'public');

                array_push($restaurant_images, $image_path);

            }
        }

        if (isset($validatedData['room_images'])) {

            foreach ($validatedData['room_images'] as $room_image) {

                $fileName = uniqid() . '.' . $room_image->getClientOriginalExtension();

                $image_path = $room_image->storeAs('images', $fileName, 'public');

                array_push($room_images, $image_path);
            }

        }

        if (isset($validatedData['header_images'])) {

            foreach ($validatedData['header_images'] as $header_image) {

                $fileName = uniqid() . '.' . $header_image->getClientOriginalExtension();

                $image_path = $header_image->storeAs('images', $fileName, 'public');

                array_push($header_images, $image_path);
            }

        }



        $allImages = join(',', $images);

        $allPoolImages = join(',', $pool_images);

        $allRoomImages = join(',', $room_images);

        $allHeaderImages = join(',', $header_images);

        $allRestaurantImages = join(',', $restaurant_images);

        $validatedData['images'] = $allImages;

        $validatedData['pool_images'] = $allPoolImages;

        $validatedData['room_images'] = $allRoomImages;

        $validatedData['header_images'] = $allHeaderImages;

        $validatedData['restaurant_images'] = $allRestaurantImages;

        // dd($validatedData);

        Property::create($validatedData);

        return redirect()->route('properties.index')->with('success', 'Property has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {

        $property->load('room_type');

        return view('pages.dashboard.superadmin.properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property, Area $area)
    {

        /**
         * Display data from areas table.
         */

        $areas = DB::table('areas')->get();

        return view('pages.dashboard.superadmin.properties.edit', compact('property'))->with(['areas' => $areas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        $validatedData = $request->validate([

            'name' => 'required',

            'area_id' => 'required',

            'slug' => 'required',

            'description' => 'required',

            'images' => 'array',

            'pool_images' => 'array',

            'restaurant_images' => 'array',

            'room_images' => 'array',

            'header_images' => 'array',

            'pool' => 'required',

            'bar' => 'required',

            'sauna' => 'required',

            'garden' => 'required',

            'non_smoking_room' => 'required',

            'family_room' => 'required',

            'hot_tub' => 'required',

            'jacuzzi' => 'required',

            'air_conditioning' => 'nullable',

            'property_status' => 'required',

            'booking_link' => 'nullable',

            'link_youtube' => 'nullable',

            'balcony' => 'nullable',

            'tv' => 'nullable',

            'electric_kettle' => 'nullable',

            'clothes_rack' => 'nullable',

            'hair_dryer' => 'nullable',

            'private_entrance' => 'nullable',

            'safety_box' => 'nullable',

            'desk' => 'nullable',

            'socket' => 'nullable',

            'private_bathroom' => 'nullable',

            'toilet_paper' => 'nullable',

            'shower' => 'nullable',

            'bathtub' => 'nullable',

            'slipper' => 'nullable',

            'toileteries' => 'nullable',

            'minibar' => 'nullable',

            'refrigerator' => 'nullable',

            'tea_coffee_maker' => 'nullable',

            'smoke_alarm' => 'nullable',

            'fire_extinguisher' => 'nullable',

        ]);

        $images = [];

        $pool_images = [];

        $restaurant_images = [];

        $room_images = [];

        $header_images = [];

        if (isset($validatedData['images'])) {

            foreach ($validatedData['images'] as $image) {

                $fileName = uniqid() . '.' . $image->getClientOriginalExtension();

                $image_path = $image->storeAs('images', $fileName, 'public');

                array_push($images, $image_path);
            }

            $allImages = join(',', $images);

            $validatedData['images'] = $allImages;


        }

        if (isset($validatedData['pool_images'])) {

            foreach ($validatedData['pool_images'] as $pool_image) {

                $fileName = uniqid() . '.' . $pool_image->getClientOriginalExtension();

                $image_path = $pool_image->storeAs('images', $fileName, 'public');

                array_push($pool_images, $image_path);
            }

            $allPoolImages = join(',', $pool_images);

            $validatedData['pool_images'] = $allPoolImages;
        }


        if (isset( $validatedData['restaurant_images'])) {

            foreach ($validatedData['restaurant_images'] as $restaurant_image) {

                $fileName = uniqid() . '.' . $restaurant_image->getClientOriginalExtension();

                $image_path = $restaurant_image->storeAs('images', $fileName, 'public');

                array_push($restaurant_images, $image_path);

            }

            $allRestaurantImages = join(',', $restaurant_images);

            $validatedData['restaurant_images'] = $allRestaurantImages;
        }

        if (isset($validatedData['room_images'])) {

            foreach ($validatedData['room_images'] as $room_image) {

                $fileName = uniqid() . '.' . $room_image->getClientOriginalExtension();

                $image_path = $room_image->storeAs('images', $fileName, 'public');

                array_push($room_images, $image_path);
            }

            $allRoomImages = join(',', $room_images);

            $validatedData['room_images'] = $allRoomImages;
        }

        if (isset($validatedData['header_images'])) {

            foreach ($validatedData['header_images'] as $header_image) {

                $fileName = uniqid() . '.' . $header_image->getClientOriginalExtension();

                $image_path = $header_image->storeAs('images', $fileName, 'public');

                array_push($header_images, $image_path);
            }

            $allHeaderImages = join(',', $header_images);

            $validatedData['header_images'] = $allHeaderImages;

        }


        $property->update($validatedData);

        return redirect()->route('properties.index')->with('update-success', 'Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        Property::destroy($property->id);

        return redirect()->route('properties.index')->with('success-delete', 'Data Removed');
    }

    public function add_room_type($id)
    {

        $property = Property::find($id);

        return view('pages.dashboard.superadmin.properties.room-types.add', compact('property'));
    }
}
