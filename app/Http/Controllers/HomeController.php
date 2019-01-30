<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConirmation;
use App\Models\Booking;
use App\Models\SimpleMail;
use App\Models\PHPMailer;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmation;

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

        return view('front.home', ['booking_status' => $booking_status]);
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

        $this->sendCustomerEmail($booking);

        $this->sendMangerEmail($booking);

        return view('front.confirmation', ['booking' => $booking]);
    }

    private function testMail()
    {

        //Create a new PHPMailer instance
        $mail = new PHPMailer;
//Set who the message is to be sent from
        $mail->setFrom('uktaximanager@gmail.com', 'First Last');
//Set an alternative reply-to address
        $mail->addReplyTo('uktaximanager@gmail.com', 'First Last');
//Set who the message is to be sent to
        $mail->addAddress('sohail042414@gmail.com', 'John Doe');
//Set the subject line
        $mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
        //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
        $mail->Body = 'THis is mail body';
        $mail->AltBody = 'This is a plain-text message body';
//Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }


    private function sendCustomerEmail(Booking $booking)
    {

        // ini_set('display_startup_errors', 1);
        // ini_set('display_errors', 1);
        // error_reporting(-1);

        $subject = "Booking Request Received";
        $message = "We have received you request for taxi, we are reviewing booking details, will confirm you booking soon!";
        $message .= "Booking Date/time :" . $booking->booking_date . "<br>";
        $message .= "Pickup address :" . $booking->from_address . "<br>";;
        $message .= "Drop off :" . $booking->to_address . "<br>";;
        $message .= "Distance :" . $booking->distance . "<br>";;
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