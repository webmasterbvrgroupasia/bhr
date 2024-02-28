<?php

namespace App\Http\Controllers\Admin;

use App\Exports\AllFeedbackExport;
use App\Exports\FeedbacksExport;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class FeedbackController extends Controller
{
    function index() : View {
        
        $feedbacks = Feedback::orderBy('created_at','desc')->paginate(10);

        return view('pages.dashboard.superadmin.feedback.index',[

            'feedbacks' => $feedbacks,
            
        ]);
        
    }

    function download() {
        
        $feedbackData = Feedback::orderBy('created_at','desc')->get();

        return Excel::download(new AllFeedbackExport($feedbackData),'bhr_all.xlsx');

    }

    function downloadWithFilter(Request $request) {
            
        $validatedData = $request->validate([

            'from_date' => 'required|date',

            'end_date' => 'required|date',

        ]);

        $startDate = $validatedData['from_date'];

        $endDate = $validatedData['end_date'];

        $filteredFeedbackData = Feedback::whereBetween('created_at',[$startDate, $endDate])->get();

        // dd($filteredFeedbackData);

        return Excel::download(new FeedbacksExport($filteredFeedbackData),'bhr_filtered.xlsx');

    }

}
