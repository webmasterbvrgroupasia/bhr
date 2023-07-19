<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindActivityController extends Controller
{
    public function find_activity (Request $request)
    {
        $search = $request->search;
 
		$activities = DB::table('activities')

        ->join('areas', 'areas.id', '=', 'activities.area_id')

        ->where('name','like',"%".$search."%")

        ->paginate();
 
		return view('pages.dashboard.superadmin.activities.index', ['activities' => $activities]);
    }
}
