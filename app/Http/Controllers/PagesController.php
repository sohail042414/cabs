<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * Show the contact us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Show the services us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('pages.services');
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