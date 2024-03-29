<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\BookingConirmation;
use App\Models\Booking;
use App\Models\SimpleMail;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmation;

class DriverController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->list();
    }

    public function list()
    {
        $per_page = config('app.settings.records_per_page');
        $list = Booking::orderBy('created_at','desc')
                        ->orderBy('id', 'desc')
                        ->where('driver_id', Auth::user()->id)->paginate($per_page);
        return view('front.booking_list', ['list' => $list]);
    }

}