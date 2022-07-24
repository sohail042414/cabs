<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\BookingConirmation;
use App\Models\Booking;
use App\Models\SimpleMail;
use Illuminate\Http\Request;
use App\Mail\BookingReceived;
use App\Mail\BookingReceivedAdmin;
use Carbon\Carbon;

use Twilio\Rest\Client;

class BookingController extends Controller
{

    

    // Your Account SID and Auth Token from twilio.com/console
    public $twillio_sid = 'ACefc2b8192b3eeb48bde44ab577fb0d60';
    public $twillio_auth_token = '5480ba3cccbf231c81c1081c7a007ddf';
    public $twillio_phone_no = '+13258800340';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function paypalStart(){
        
        return view('front.paypal-start');
    }

    /**
     * Saves boooking from request data 
     */

    public function make_booking(Request $request)
    {

        $booking = new Booking();

        $redirect_page = $request->input('form_page');

        $type = $request->input('type');

        if (empty($type)) {
            $type = 'standard';
        }

        $rules = [
            'car_type' => 'required',
            'phone' => 'required|min:9|max:14',
            'email' => 'required|email',
            'passangers' => 'required|numeric',
            'booking_date' => 'required|date',
            'origin' => 'max:50',
            'flight_no' => 'max:30',
        ];

        if ($type == 'standard') {
            $rules['from_address'] = 'required';
            $rules['to_address'] = 'required';
        } else {
            $rules['airport_id'] = 'required';
        }

        if ($type == 'from_airport') {
            $rules['to_address'] = 'required';
        }

        if ($type == 'to_airport') {
            $rules['from_address'] = 'required';
        }

        $this->validate(
            $request,
            $rules,
            [
                'required' => 'Provide :attribute',
                'email.required' => 'Provide :attribute!',
                'date' => 'Invalid date/time!',
                'airport_id.required' => 'Select Airport.',
            ]
        );

        $user_id = Auth::check() ? Auth::id() : 0;
        $booking->user_id = $user_id;

        $airport_id = $request->input('airport_id');
        $booking->airport_id = !empty($airport_id) ? $airport_id : 0;

        $booking->from_address = $request->input('from_address');
        $booking->to_address = $request->input('to_address');
        $booking->car_type = $request->input('car_type');
        $booking->status = 'pending';        

        $booking->booking_date = $request->input('booking_date');

        $booking_time = $request->input('booking_hours').':'.$request->input('booking_minutes');        
        $booking->booking_time = $booking_time;
        //$booking->booking_date = Carbon::createFromFormat('Y-m-d h:i',$request->input('booking_date'));
        $booking->flight_no = $request->input('flight_no');
        $booking->origin = $request->input('origin');
        $booking->phone = $request->input('phone');
        $booking->email = $request->input('email');
        $booking->mode = $request->input('mode');
        $booking->passangers = $request->input('passangers');
        $booking->terminal_pickup = ($request->input('terminal_pickup') == 1) ? true : false;
        $booking->from_lat = $this->formatLatLng($request->input('from_lat'));
        $booking->from_lng = $this->formatLatLng($request->input('from_lng'));
        $booking->to_lat = $this->formatLatLng($request->input('to_lat'));
        $booking->to_lng = $this->formatLatLng($request->input('to_lng'));

        $booking->rate = !empty($request->input('rate')) ? $request->input('rate') : 0;
        $booking->amount = !empty($request->input('amount')) ? $request->input('amount') : 0;
        $booking->distance = !empty($request->input('distance')) ? $request->input('distance') : 0;


        if ($booking->save()) {   
            
            //$this->sendEmails($booking);

            $client = new Client($this->twillio_sid, $this->twillio_auth_token);
             
            // Send message to Customer
            if(!empty($booking->phone)){
                //make sure phone has + sign in start
                $customer_phone = '+'.ltrim($booking->phone,'+');

                $client->messages->create(
                    // the number you'd like to send the message to
                    //'+15558675309',
                    $customer_phone,
                    [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => $this->twillio_phone_no,
                        // the body of the text message you'd like to send
                        'body' => 'Your booking has been created at Rayan Transports, booking id'.$booking->id
                    ]
                );
            }

            // Send Message to Admin
            
            $manager_phone = config('settings.manager_phone');
            
            if(!empty($manager_phone)){
                $client->messages->create(
                    // the number you'd like to send the message to
                    //'+15558675309',
                    $booking->phone,
                    [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => $this->twillio_phone_no,
                        // the body of the text message you'd like to send
                        'body' => 'New Booking at Rayan Transports, Customer Phone No : '.$booking->phone.', Email : '.$booking->email,
                    ]
                );
            }
            
            
            $request->session()->flash('booking_success', 'Please continue and make Payment!');
            return redirect('/booking-payment/' . $booking->id);
        } else {
            $request->session()->flash('booking_status', 'There is some error, Please try again, or contact support@rayantrnasports.com');
            return redirect('/' . $redirect_page);
        }

    }
    /**
     * Dsipay Payment options
     */
    public function bookingPayment($booking_id)
    {

        $booking = Booking::find($booking_id);

        if($booking->status != 'pending'){
            return redirect('/booking-detail/' . $booking->id);
        }

        request()->session()->flash('booking_success', 'Please continue and make Payment!');

        return view('front.booking_payment', ['booking' => $booking]);
    }
    /**
     * Confirm as Cash payment
     */

    public function cashPayment($booking_id)
    {
        $booking = Booking::find($booking_id);

        if($booking->status == 'pending'){
            $booking->status = 'paid';
            $booking->update();
        }

        return redirect('/booking-detail/' . $booking->id);
    }

    /**
     * Display booking detail after confirmation. 
     */
    public function bookingDetail($booking_id)
    {
        $booking = Booking::find($booking_id);
        return view('front.booking_detail', ['booking' => $booking]);
    }


    public function mailTest(){

        $booking_id = 14;

        $booking = Booking::find($booking_id);

        $this->sendEmails($booking);

        echo "Test emails sent"; 
        exit;

    }


    private function sendEmails(Booking $booking)
    {
        //email customer. 
        Mail::to($booking->email)->send(new BookingReceived($booking));
        
        //email manager/admin.                 
        Mail::to(config('settings.manager_email'))->send(new BookingReceivedAdmin($booking));
        
    }


    private function formatLatLng($input)
    {
        return number_format($input, 14);
    }
}