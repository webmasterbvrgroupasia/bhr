<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blogpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminBlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all data from the database. Each page will have 10 records stored in $posts variable.
        
        $posts = DB::table('blogpost')->paginate(10);

        return view('pages.dashboard.superadmin.blogpost.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.dashboard.superadmin.blogpost.add');
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

            'title'=>'required',
            
            'slug'=>'required',
            
            'image'=>'required|mimes:jpeg,jpg,png,gif',

            'content'=>'required',

            'status'=>'required'

        ]);

        if($request->file('image')) {

            $validatedData['image'] = $request->file('image')->store('blogpost-images');
        
        }

        // dd($validatedData);

        Blogpost::create($validatedData);

        return redirect()->route('blogpost.index')->with('success','Blogpost added successfully!');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blogpost::destroy($id);

        return redirect()->route('blogpost.index')->with('delete-success','Blogpost Deleted Successfully');
    }
}
