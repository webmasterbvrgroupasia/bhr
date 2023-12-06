<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Guest\Activity;
use Illuminate\Http\Request;

class DisplayActivitiesByCategory extends Controller
{

    public function filter($id) {

        $activities = Activity::where('category_id',$id)->paginate(10);

        $categories = ActivityCategory::find($id);
        
        return view('pages.guest.activities.filtered',compact('activities','categories'));

    }

}
