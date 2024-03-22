<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailNotificationToAdmin;
use App\Mail\SendEmailToGuest;
use App\Models\Feedback;
use App\Models\Voucher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class VoucherController extends Controller
{
    function index()
    {

        $vouchers = Voucher::orderBy('created_at','desc')->paginate(10);

        return view('pages.dashboard.superadmin.voucher.index', [
            'vouchers' => $vouchers
        ]);
    }

    function create() {
        
        return view('pages.dashboard.superadmin.voucher.create');

    }

    function store(Request $request) : RedirectResponse {
        
        $validatedData = $request->validate([
            'code' => 'required',
            'title' => 'required|string',
            'inclusions' => 'required|string',
            'valid_date_start' => 'required|date',
            'valid_date_end' => 'required|date',
        ]);

        Voucher::create($validatedData);

        return redirect()->route('admin.vouchers.index');

    }

    function select_user(string $id): View
    {

        $feedbacks = Feedback::all();

        $voucher = Voucher::where('id', '=', $id)->first();

        return view('pages.dashboard.superadmin.voucher.select-user', [
            'feedbacks' => $feedbacks,
            'voucher' => $voucher,
        ]);
    }

    function send_email(Request $request)
    {

        $voucherData = $request->validate([

            'code' => 'required|string',

            'title' => 'required|string',

            'inclusions' => 'required|string',

            'valid_date_start' => 'required',

            'valid_date_end' => 'required',

            'valid_date_end' => 'required',

        ]);

        $userId = $request->input('user_id');

        $userData = Feedback::where('id', '=', $userId)->first();

        Mail::to($userData['email_address'])->send(new SendEmailToGuest($voucherData,$userData));

        return redirect()->route('admin.vouchers.index')->with('success','Voucher sent succesfully!');
    }

    function disable(string $voucherId) : RedirectResponse {
        
        $voucher = Voucher::find($voucherId);

        $voucher->delete();

        return redirect()->back();

    }
}
