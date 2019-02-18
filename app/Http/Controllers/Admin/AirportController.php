<?php

namespace App\Http\Controllers\Admin;

use App\Models\Airport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AirportController extends Controller
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

        $per_page = 10; 
        //config('app.airports.records_per_page');
        $list = Airport::paginate($per_page);
        return view('admin.pages.airports.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airport = new Airport;
        return view('admin.pages.airports.create', array('airport' => $airport, 'action' => 'create'));
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
        $this->validate(
            $request,
            [
                'name' => 'required|min:5',
                'lat' => 'required|numeric',
                'lng' => 'required|numeric',
            ],
            [
                'lat.required' => 'Provide Latitude.',
                'lng.required' => 'Provide Longitude.',
            ]
        );

        $airport = new Airport();
        $airport->name = $request->input('name');
        $airport->lat = trim($request->input('lat'));
        $airport->lng = trim($request->input('lng'));
        if ($airport->save()) {
            $request->session()->flash('status_success', 'Airport created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/airports');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        //
        //pending
        //confirmed
        //delayed
        //canceled
        //completed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(Airport $airport)
    {
        return view('admin.pages.airports.edit', array('airport' => $airport, 'action' => 'update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {

        //
        $this->validate(
            $request,
            [
                'name' => 'required|min:5',
                'lat' => 'required|numeric|max:9999',
                'lng' => 'required|numeric|max:9999',
            ],
            [
                'lat.required' => 'Provide Latitude.',
                'lng.required' => 'Provide Longitude.',
            ]
        );


        $airport->name = $request->input('name');
        $airport->lat = trim($request->input('lat'));
        $airport->lng = trim($request->input('lng'));

        if ($airport->save()) {
            $request->session()->flash('status_success', 'Airport updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/airports/' . $airport->id . '/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $airport = Airport::find($id);

        if (is_object($airport)) {
            $airport->delete();
            $request->session()->flash('status_success', 'Airport deleted!');
        } else {
            $request->session()->flash('status_error', 'Airport does not exist!');
        }
        return redirect('/admin/airports/');
    }
}