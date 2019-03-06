<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\BookingConirmation;
use App\Models\Booking;
use App\Models\SimpleMail;
use Illuminate\Http\Request;
use App\Mail\BookingReceived;
use Carbon\Carbon;

class BookingController extends Controller
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
        //$booking->booking_date = date('Y-m-d h:i:s', time());
        $booking->booking_date = $request->input('booking_date');
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
        
            $this->sendEmails($booking);
            //$this->sendCustomerEmail($booking);
            //$this->sendMangerEmail($booking);
            $request->session()->flash('booking_success', 'Your booking created!');
            return redirect('/booking-detail/' . $booking->id);
        } else {
            $request->session()->flash('booking_status', 'Booking not saved, please try again!');
            return redirect('/' . $redirect_page);
        }

    }

    /**
     * Display booking detail after confirmation. 
     */

    public function detail($booking_id)
    {
        $booking = Booking::find($booking_id);
        return view('front.booking_detail', ['booking' => $booking]);
    }


    public function mailTest(){

        $booking_id = 30;

        $booking = Booking::find($booking_id);

        $this->sendEmails($booking);

    }


    private function sendEmails(Booking $booking)
    {
        //email customer. 
        Mail::to($booking->email)->send(new BookingReceived($booking));
        //email manager/admin. 
        
        /*
            Mail::to(config('app.settings.manager_email'))
            ->cc(config('app.settings.extra_email'))
            ->send(new BookingReceivedAdmin($booking));
         */

    }

    private function sendCustomerEmail(Booking $booking)
    {
        $subject = "Booking Request Received";
        $message = "We have received you request for taxi, we are reviewing booking details, will confirm you booking soon!";
        $message .= "Booking Date/time :" . $booking->booking_date . "<br>";
        $message .= "Pickup address :" . $booking->from_address . "<br>";;
        $message .= "Drop off :" . $booking->to_address . "<br>";;
        $message .= "Distance : " . $booking->distance . "<br>";;
        $message .= "Type :" . $booking->car_type . "<br>";;
        $message .= "Rate :" . $booking->rate . "<br>";;
        $message .= "Fare :" . $booking->amount . "<br>";
        
        $message .= "<br><b> To check status of your Booking at any time, click herer!! </b>";

        $message .= " <br> Thank you for choosing our service!!!!";

        $sent = mail($booking->email, $subject, $message);


                /*
        $status = SimpleMail::make()
            ->setTo($booking->email, "Customer")
            ->setFrom('uktaximanager@gmail.com', "Uk Taxi Manager")
            ->setSubject($subject)
            ->setMessage($message)
            ->setReplyTo('uktaximanager@gmail.com', 'Uk Taxi Manager')
            ->setHtml()
            ->setWrap(100)
            ->send();
        if (!$status) {
            echo "Email not sent";
            exit;
        }
         */
    }
    private function sendMangerEmail(Booking $booking)
    {
        $subject = "Booking Request Received (Tarr Ai Ae Faraz!!!!)";
        $message = "You have received you request for taxi, Kindly review and assign a driver!";
        $message .= "Booking Date/time :" . $booking->booking_date . "<br>";
        $message .= "Pickup address :" . $booking->from_address . "<br>";
        $message .= "Drop off :" . $booking->to_address . "<br>";
        $message .= "Phone :" . $booking->phone . "<br>";
        $message .= "Email :" . $booking->email . "<br>";
        $message .= "Distance :" . $booking->distance . "<br>";
        $message .= "Type :" . $booking->car_type . "<br>";
        $message .= "Rate :" . $booking->rate . "<br>";
        $message .= "Fare :" . $booking->amount . "<br>";
        $message .= " <br> Your business is growing day by day, Thank You SOhail!!!!";

        $sent = mail('naumankhan051@gmail.com', $subject, $message);

        /*
        $status = SimpleMail::make()
            ->setTo('naumankhan051@gmail.com', "Chawal Bossss")
            ->setFrom('uktaximanager@gmail.com', "Uk Taxi Manager")
            ->setSubject($subject)
            ->setMessage($message)
            ->setReplyTo('uktaximanager@gmail.com', 'Uk Taxi Manager')
            ->setHtml()
            ->setWrap(100)
            ->send();
        if (!$status) {
            echo "Email not sent";
            exit;
        }
         */
    }

    private function formatLatLng($input)
    {
        return number_format($input, 14);
    }
}