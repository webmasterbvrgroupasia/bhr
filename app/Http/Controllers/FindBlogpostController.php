<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FindBlogpostController extends Controller
{
    public function find_blogpost (Request $request)
    {
        $search = $request->search;
 
		$posts = DB::table('blogpost')

        ->where('title','like',"%".$search."%")

        ->paginate();
 
		return view('pages.dashboard.superadmin.blogpost.index', ['posts' => $posts]);
    }
}
