<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Guest\Activity;
use Illuminate\Http\Request;

class DisplayActivitiesByCategory extends Controller
{

    public function filter($id) {

        $activities = Activity::where('category_id',$id)->get();

        $categories = ActivityCategory::all();
        
        return view('pages.guest.activities.index',compact('activities','categories'));

    }

}