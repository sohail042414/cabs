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

        return view('pages.get_taxi',['booking_status'=>$booking_status]);
    }
    /**
     * Show the tarrif us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function tarrif()
    {
        return view('pages.tarrif');
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