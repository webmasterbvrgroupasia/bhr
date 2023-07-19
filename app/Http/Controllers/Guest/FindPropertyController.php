<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindPropertyController extends Controller
{
    public function find_property (Request $request)
    {
        $search = $request->search;
 
		$properties = DB::table('properties')

        ->join('areas', 'areas.id', '=', 'properties.area_id')

        ->where('name','like',"%".$search."%")

        ->paginate();
 
		return view('pages.guest.properties.index', ['properties' => $properties]);
    }
}
