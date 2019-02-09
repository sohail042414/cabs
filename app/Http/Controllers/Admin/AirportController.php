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
        //config('app.settings.records_per_page');
        $list = Airport::paginate($per_page);
        return view('admin.pages.settings.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airport = new Airport;
        return view('admin.pages.settings.create', array('setting' => $airport, 'action' => 'create'));
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
            'title' => 'required|min:5',
            'key' => 'required|min:5',
            'value' => 'required',
        ]);

        $airport = new Airport();
        $airport->title = $request->input('title');
        $airport->key = trim($request->input('text'));
        $airport->value = trim($request->input('value'));
        if ($airport->save()) {
            $request->session()->flash('status_success', 'Airport created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/settings');

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
        return view('admin.pages.settings.edit', array('setting' => $airport, 'action' => 'update'));
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

        $this->validate($request, [
            'title' => 'required|min:5',
            'value' => 'required',
        ]);

        $airport->title = $request->input('title');
        $airport->value = trim($request->input('value'));

        if ($airport->save()) {
            $request->session()->flash('status_success', 'Airport updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/settings/' . $airport->id . '/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airport $airport)
    {
        //
    }
}