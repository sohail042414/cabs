<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $booking_status = $request->session()->get('booking_status', 'no');

        return view('pages.home',['booking_status'=>$booking_status]);
    }

    /**
     * Saves boooking from request data 
     */

    public function make_booking(Request $request){
       
        $booking = new Booking();

        $redirect_page = $request->input('form_page');

        $this->validate($request,[
            'from_address' => 'required',
            'to_address' => 'required',
            'car_type' => 'required',
            'phone' => 'required',
        ]);

        $booking->from_address = $request->input('from_address');
        $booking->to_address = $request->input('to_address');
        $booking->car_type = $request->input('car_type');
        $booking->status = 'pending';
        //$booking->booking_date = request('booking_date');
        $booking->booking_date = date('Y-m-d h:i:s',time());
        $booking->phone = $request->input('phone');
        if($booking->save()){
            $request->session()->flash('booking_status', 'Your order booked, we will confirm it soon and contact you!');            
        }else{
            $request->session()->flash('booking_status', 'Booking not saved, please try again!');
        }

        return redirect('/'.$redirect_page);
    }
}