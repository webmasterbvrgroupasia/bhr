<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    function store(Request $request) {

        $validatedData = $request->validate([
            
            'first_name'=>'required|string',

            'last_name' => 'required|string',
            
            'email' => 'email:rfc,dns',
            
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric|min:8'
        
        ]);

        // dd($validatedData);

        Subscriber::create($validatedData);

        return back()->with('success','Thank you for your submission!');

    }
}
