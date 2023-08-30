<?php

namespace App\Http\Controllers;

use App\Models\Admin\Area;
use App\Models\Admin\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindPropertyController extends Controller
{
    public function find_property (Request $request)
    {
        $search = $request->search;

        $properties = Property::query()

            ->where('name', 'like', "%$search%")

            ->paginate();


		return view('pages.dashboard.superadmin.properties.index', ['properties' => $properties]);
    }
}
