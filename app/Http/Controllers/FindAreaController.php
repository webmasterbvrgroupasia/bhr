<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindAreaController extends Controller
{
    public function find_area (Request $request)
    {
        $search = $request->search;
 
		$areas = DB::table('areas')

        ->where('location','like',"%".$search."%")

        ->paginate();
 
		return view('pages.dashboard.superadmin.areas.index', ['areas' => $areas]);
    }
}
