<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class FeedbackController extends Controller
{
    function index(): View
    {

        $seoData = new SEOData(
            title: 'Guest Feedback Form | BVR Bali Holiday Rentals',
            description: 'Thank you for choosing BVR Bali Holiday Rentals for your stay. We greatly value your feedback.'
        );

        return view('pages.guest.feedback.index', [
            'seoData' => $seoData,
        ]);
    }

    function submit(Request $request)
    {

        $validatedData = $request->validate([

            'first_name' => 'required|string',

            'last_name' => 'nullable|string',

            'email_address' => 'required|string:rfc,dns',

            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',

            'nationality' => 'required|string',

            'unit' => 'required|string',

            'room' => 'string',

            'first_time' => 'required',

            'reference' => 'required|string',

            'reservation_rating' => 'required|string',

            'cleanliness' => 'required|string',

            'housekeeping' => 'required|string',

            'staff_friendliness' => 'required|string',

            'staff_competence' => 'required|string',

            'service_quality' => 'required|string',

            'ambience' => 'required|string',

            'location' => 'required|string',

            'general_review' => 'required|string',

            'quality_and_price' => 'required|string',

            'unit_service' => 'required|string',

            'consideration' => 'required|string',

            'recommendation' => 'required|string',

            'employee_who_made_stay_more_pleasurable' => 'required|string',

            'review_writings' => 'required|string',

            'subscribe_to_newsletter' => 'required|string',

        ]);
        
        if ($validatedData['subscribe_to_newsletter'] == 'yes') {

            Feedback::create($validatedData);

            return view('pages.guest.feedback.voucher',[

                'first_name' => $validatedData['first_name'],

                'last_name' => $validatedData['last_name'],

                'email_address' => $validatedData['email_address'],

                'phone_number' => $validatedData['phone_number'],

                'nationality' => $validatedData['nationality'],
            
            ]);
        
        } else {

            Feedback::create($validatedData);

            return view('pages.guest.feedback.thankyou');
        
        }
    }
}
