<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SpecialOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminSpecialOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = DB::table('special_offer')->paginate(10);

        return view('pages.dashboard.superadmin.specialoffers.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboard.superadmin.specialoffers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offerData = $request->validate([
            
            'meta_keywords'=>'required|string',

            'meta_description'=>'required|string',

            'package_name' => 'required|string',

            'description'=>'required',

            'inclusions'=>'string',

            'booking_link'=>'required',
            
            'slug' => 'required|string',

            'image' => 'required',

            'related_images'=> 'array',
            
            'additional_notes'=>'string',

        ]);

        $image = $offerData['image'];

        $relatedImages = [];

        $fileName = uniqid() . '.' . $offerData['image']->getClientOriginalExtension();

        $imagePath = $image->storeAs('offerImages',$fileName,'public');

        $offerData['image'] = $imagePath;

        if (isset($offerData['related_images'])) {

            foreach ($offerData['related_images'] as $relatedImage) {

                $fileName = uniqid() . '.' . $relatedImage->getClientOriginalExtension();

                $imagePath = $relatedImage->storeAs('offerImages',$fileName,'public');

                array_push($relatedImages,$imagePath);

            }

            $allRelatedImages = join(',',$relatedImages);

            $offerData['related_images'] = $allRelatedImages;

        }
        
        // dd($offerData);

        SpecialOffer::create($offerData);

        return redirect()->route('special-offers.index');
       

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
        
        $offer = SpecialOffer::find($id);

        return view('pages.dashboard.superadmin.specialoffers.edit',compact('offer'));

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
        $updateData = $request->validate([
            
            'meta_keywords'=>'required|string',

            'meta_description'=>'required|string',

            'package_name' => 'required|string',

            'description'=>'required',

            'inclusions'=>'string',

            'booking_link'=>'required',
            
            'slug' => 'required|string',

            'image' => 'required',

            'related_images'=>'array',
            
            'additional_notes'=>'string',

        ]);

        $image = $updateData['image'];

        $relatedImages = [];

        $fileName = uniqid() . '.' . $updateData['image']->getClientOriginalExtension();

        $imagePath = $image->storeAs('offerImages',$fileName,'public');

        $updateData['image'] = $imagePath;

        if (isset($updateData['related_images'])) {

            foreach ($updateData['related_images'] as $relatedImage) {

                $fileName = uniqid() . '.' . $relatedImage->getClientOriginalExtension();

                $imagePath = $relatedImage->storeAs('offerImages',$fileName,'public');

                array_push($relatedImages,$imagePath);

            }

            $allRelatedImages = join(',',$relatedImages);

            $updateData['related_images'] = $allRelatedImages;

        }

        // dd($updateData);

        $specialOffer = SpecialOffer::find($id);

        $specialOffer->update($updateData);

        return redirect()->route('special-offers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SpecialOffer::find($id)->delete();

        return redirect()->back();
    }
}
