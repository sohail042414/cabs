<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\CarType;

class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = config('app.settings.records_per_page');
        $list = Booking::paginate($per_page);
        return view('admin.pages.bookings.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $booking = new Booking();

        $car_types = CarType::all();

        $status_list = $booking->statusList();

        return view(
            'admin.pages.bookings.create',
            array(
                'booking' => $booking,
                'car_types' => $car_types,
                'status_list' => $status_list,
                'action' => 'create'
            )
        );

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'car_type' => 'required',
            'from_address' => 'required',
            'to_address' => 'required',
            'phone' => 'required|min:11|max:14',
            'booking_date' => 'required',
            'status' => 'required',
            'discount' => 'sometimes|numeric'
        ]);

        $booking = new Booking();
        $booking->car_type = $request->input('car_type');
        $booking->from_address = $request->input('from_address');
        $booking->to_address = $request->input('to_address');
        $booking->car_type = $request->input('car_type');
        $booking->phone = $request->input('phone');
        //$faq->booking_date = $request->input('booking_date');
        $booking->booking_date = date('Y-m-d h:i:s', time());
        $booking->discount = $request->input('discount');
        if ($booking->save()) {
            $request->session()->flash('status_success', 'Booking created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/bookings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $car_types = CarType::all();

        $status_list = $booking->statusList();

        return view(
            'admin.pages.bookings.edit',
            array(
                'booking' => $booking,
                'car_types' => $car_types,
                'status_list' => $status_list,
                'action' => 'edit'
            )
        );
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
        $this->validate($request, [
            'car_type' => 'required',
            'from_address' => 'required',
            'to_address' => 'required',
            'phone' => 'required|min:11|max:14',
            'booking_date' => 'required',
            'status' => 'required',
            'discount' => 'sometimes|numeric'
        ]);

        $booking->car_type = $request->input('car_type');
        $booking->from_address = $request->input('from_address');
        $booking->to_address = $request->input('to_address');
        $booking->car_type = $request->input('car_type');
        $booking->phone = $request->input('phone');
        //$faq->booking_date = $request->input('booking_date');
        $booking->booking_date = date('Y-m-d h:i:s', time());
        $booking->discount = $request->input('discount');
        if ($booking->save()) {
            $request->session()->flash('status_success', 'Booking updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/bookings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}