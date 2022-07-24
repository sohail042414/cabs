<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the contact us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('front.contact');
    }

    /**
     * Submit contact form
     *
     * @return \Illuminate\Http\Response
     */
    public function submit_contact(Request $request)
    {
        $this->validate(
            $request,
            [
                'contact_name' => 'required|min:4',
                'contact_email' => 'required|email',
                'contact_message' => 'required|min:20',
            ],
            [
                'contact_name.required' => 'Please enter your name.',
                'contact_email.required' => 'Please enter your email.',
                'contact_email.email' => 'Provide a valid email.',
                'contact_message.required' => 'Enter your message.',
            ]
        );

        $data = $request->only('contact_name', 'contact_email', 'contact_message');

        $subject = "Airport Taxi Contact Email (Some Query).";
        $message = "You have received this message from Name : " . $data['contact_name'] . ", Email:" . $data['contact_email'];
        $message .= "Message : " . $data['contact_message'];
        $message .= "<br>Thak you!";

        $sent = mail('naumankhan051@gmail.com', $subject, $message);
        if ($sent) {
            $request->session()->flash('success_message', 'We have received you message, will get back to you!');
        } else {
            $request->session()->flash('error_message', 'Sorry, your message not sent, please try again later!');
        }

        return redirect('/contact-us');

    }

    /**
     * Show the services us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('front.services');
    }

    /**
     * Show the services us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_taxi()
    {
        $booking_status = request()->session()->get('booking_status', 'no');

        return view('front.get_taxi', ['booking_status' => $booking_status]);
    }
    /**
     * Show the tarrif us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function tarrif()
    {
        return view('front.tarrif');
    }

    /**
     * Show the team us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function team()
    {
        return view('pages.team');
    }

    /**
     * Show the faqs page.
     *
     * @return \Illuminate\Http\Response
     */

    public function faqs()
    {
        $faqs = \App\Models\Faq::orderBy('sort_order')->get();

        return view('front.faqs', array('faqs' => $faqs));
    }

    /**
     * Show the terms and condititions page.
     *
     * @return \Illuminate\Http\Response
     */

    public function terms()
    {
        $terms = \App\Models\Term::orderBy('sort_order')->get();

        return view('front.terms', array('terms' => $terms));
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Show the earh with us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function earn()
    {
        return view('pages.earn');
    }
}