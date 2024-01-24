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

            $filename = uniqid().'.'.$validatedData['image']->getClientOriginalExtension();

            $validatedData['image'] = $request->file('image')->storeAs('blogpost-images', $filename, 'public');

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
    public function edit(Blogpost $blogpost)
    {
        return view('pages.dashboard.superadmin.blogpost.edit', compact('blogpost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogpost $blogpost)
    {
        $validatedData = $request->validate([
            'title' => 'required',

            'slug' => 'required',

            'content' => 'required',

            'image'=>'mimes:jpeg,jpg,png,gif',

            'status' => 'required'
        ]);

        if ($request->has('image')) {

            $filename = uniqid().'.'.$validatedData['image']->getClientOriginalExtension();

            $validatedData['image'] = $request->file('image')->storeAs('blogpost-images', $filename, 'public');
        }

        $blogpost->update($validatedData);

        return redirect()->route('blogpost.index')->with('success','Blogpost added successfully!');
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

// inclusion
