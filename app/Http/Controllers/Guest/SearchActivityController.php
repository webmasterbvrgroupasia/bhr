<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Admin\ActivityCategory;
use App\Models\Guest\Activity;
use Illuminate\Http\Request;

class SearchActivityController extends Controller
{
    public function search(Request $request)
    {

        $destination = $request->destination;

        $categories = ActivityCategory::all();

        $results = Activity::with('location')

            ->where('name', $destination)

            ->where('status', 1)

            ->orWhere('name', 'like', '%' . $destination . '%')

            ->paginate(12);


        return view('pages.guest.activities.index', ['activities' => $results, 'categories' => $categories]);
    }
}
