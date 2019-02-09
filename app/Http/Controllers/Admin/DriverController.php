<?php

namespace App\Http\Controllers\Admin;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DriverController extends Controller
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
        //config('app.drivers.records_per_page');
        $list = Driver::paginate($per_page);

        return view('admin.pages.drivers.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver = new Driver;
        return view('admin.pages.drivers.create', array('driver' => $driver, 'action' => 'create'));
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
            'email' => 'required|email',
            'name' => 'required|min:5',
            'password' => 'required|min:6|confirmed',
        ]);

        $driver = new Driver();
        $driver->email = $request->input('email');
        $driver->name = trim($request->input('name'));
        $driver->active = $request->input('active', 0);
        $driver->verified = $request->input('verified', 0);
        $driver->type = 'driver';
        $driver->password = bcrypt($request->input('password'));

        if ($driver->save()) {
            $request->session()->flash('status_success', 'Driver created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/drivers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
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
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('admin.pages.drivers.edit', array('driver' => $driver, 'action' => 'update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {

        $rules = [
            'email' => 'required|email',
            'name' => 'required',
        ];

        $this->validate($request, $rules);

        $driver->name = $request->input('name');
        $driver->email = $request->input('email');
        $driver->active = $request->input('active', 0);
        $driver->verified = $request->input('verified', 0);

        if ($driver->save()) {
            $request->session()->flash('status_success', 'Driver updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/drivers/' . $driver->id . '/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        //
    }
    /**
     * 
     */
    public function change_password($id)
    {
        $driver = Driver::find($id);
        return view('admin.pages.drivers.change_password', array('driver' => $driver, 'action' => 'update'));
    }
    /**
     * 
     */

    public function save_password(Request $request)
    {

        $rules = [
            //'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ];

        $this->validate($request, $rules);

        $driver = Driver::find($request->input('driver_id'));

        $hasher = app('hash');

        $driver->password = $hasher->make($request->input('password'));
        $driver->update();
        $request->session()->flash('status_success', 'Password changed successfully!');

        /*
        if ($hasher->check($request->input('old_password'), $driver->password)) {
        } else {
            $request->session()->flash('status_error', 'Invalid old password !');
        }
         */

        return redirect('/admin/drivers/change-password/' . $driver->id);
    }
}