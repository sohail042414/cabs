<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cab;
use App\Models\CarType;
use App\Models\Driver;

class CabController extends Controller
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
        $per_page = config('settings.records_per_page');
        $list = Cab::paginate($per_page);
        return view('admin.pages.cabs.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_type = new CarType();
        $cab = new Cab();
        $type_list = $car_type->typeList();
        $status_list = $cab->statusList();
        $drivers_list = Driver::all();

        return view(
            'admin.pages.cabs.create',
            array(
                'cab' => $cab,
                'type_list' => $type_list,
                'status_list' => $status_list,
                'drivers_list' => $drivers_list,
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
            'type' => 'required',
            'driver_id' => 'required',
            'status' => 'required',
            'name' => 'required',
            'reg_number' => 'required'
        ]);

        $cab = new Cab();
        $cab->type = $request->input('type');
        $cab->driver_id = $request->input('driver_id');
        $cab->status = $request->input('status');
        $cab->reg_number = $request->input('reg_number');
        $cab->name = $request->input('name');
        $cab->model = $request->input('model');
        $cab->brand = $request->input('brand');

        if ($cab->save()) {
            $request->session()->flash('status_success', 'Car type (tarrif) created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/cabs');
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
    public function edit(Cab $cab)
    {
        $car_type = new CarType();
        $type_list = $car_type->typeList();
        $status_list = $cab->statusList();
        $drivers_list = Driver::all();

        return view(
            'admin.pages.cabs.edit',
            array(
                'cab' => $cab,
                'type_list' => $type_list,
                'status_list' => $status_list,
                'drivers_list' => $drivers_list,
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
    public function update(Request $request, Cab $cab)
    {
        //
        $this->validate($request, [
            'type' => 'required',
            'driver_id' => 'required',
            'status' => 'required',
            'name' => 'required',
            'reg_number' => 'required'
        ]);

        $cab->type = $request->input('type');
        $cab->driver_id = $request->input('driver_id');
        $cab->status = $request->input('status');
        $cab->reg_number = $request->input('reg_number');
        $cab->name = $request->input('name');
        $cab->model = $request->input('model');
        $cab->brand = $request->input('brand');

        if ($cab->save()) {
            $request->session()->flash('status_success', 'Cab (car_type) update successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/cabs');
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