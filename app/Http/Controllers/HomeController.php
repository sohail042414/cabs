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

        return view('pages.home', ['booking_status' => $booking_status]);
    }

    /**
     * Saves boooking from request data 
     */

    public function make_booking(Request $request)
    {

        $booking = new Booking();

        $redirect_page = $request->input('form_page');

        $this->validate(
            $request,
            [
                'from_address' => 'required',
                'to_address' => 'required',
                'car_type' => 'required',
                'phone' => 'required',
                'email' => 'required|email',
                'passangers' => 'required|numeric',
                'booking_date' => 'required|date',
            ],
            [
                'required' => 'Provide :attribute',
                'email.required' => 'Provide :attribute!',
                'date' => 'Invalid date/time!',
            ]
        );

        $booking->from_address = $request->input('from_address');
        $booking->to_address = $request->input('to_address');
        $booking->car_type = $request->input('car_type');
        $booking->status = 'pending';        
        //$booking->booking_date = date('Y-m-d h:i:s', time());
        $booking->booking_date = $request->input('booking_date');
        $booking->phone = $request->input('phone');
        $booking->email = $request->input('email');
        $booking->mode = $request->input('mode');
        $booking->passangers = $request->input('passangers');
        $booking->terminal_pickup = ($request->input('terminal_pickup') == 1) ? true : false;
        $booking->from_lat = $this->formatLatLng($request->input('from_lat'));
        $booking->from_lng = $this->formatLatLng($request->input('from_lng'));
        $booking->to_lat = $this->formatLatLng($request->input('to_lat'));
        $booking->to_lng = $this->formatLatLng($request->input('to_lng'));

        $booking->rate = $request->input('rate');
        $booking->amount = $request->input('amount');
        $booking->distance = $request->input('distance');

        if ($booking->save()) {
            //$request->session()->flash('booking_status', 'Your order booked, we will confirm it soon and contact you!');
            return redirect('/confirmation/' . $booking->id);
        } else {
            $request->session()->flash('booking_status', 'Booking not saved, please try again!');
            return redirect('/' . $redirect_page);
        }

    }

    /**
     * Display booking detail after confirmation. 
     */

    public function confirmation($booking_id)
    {

        $booking = Booking::find($booking_id);
        return view('pages.confirmation', ['booking' => $booking]);


    }

    private function formatLatLng($input)
    {
        return number_format($input, 14);
    }
}