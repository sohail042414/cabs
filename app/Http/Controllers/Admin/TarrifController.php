<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CarType;
use App\Models\Tarrif;

class TarrifController extends Controller
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
        $list = CarType::paginate($per_page);
        return view('admin.pages.tarrifs.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $car_type = new Tarrif();

        $type_list = $car_type->typeList();

        return view(
            'admin.pages.tarrifs.create',
            array(
                'car_type' => $car_type,
                'type_list' => $type_list,
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
            'title' => 'required',
            'description' => 'required',
            'rate' => 'required|numeric'
        ]);

        $car_type = new CarType();
        $car_type->type = $request->input('type');
        $car_type->title = $request->input('title');
        $car_type->description = $request->input('description');
        $car_type->rate = $request->input('rate');
        $car_type->image = 'no-image.jpg';

        if ($car_type->save()) {
            $request->session()->flash('status_success', 'Car type (tarrif) created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/tarrifs');
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
    public function edit(Tarrif $tarrif)
    {
        $type_list = $tarrif->typeList();

        return view(
            'admin.pages.tarrifs.edit',
            array(
                'car_type' => $tarrif,
                'type_list' => $type_list,
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
    public function update(Request $request, Tarrif $tarrif)
    {
        //
        $this->validate($request, [
            'type' => 'required',
            'title' => 'required',
            'description' => 'required',
            'rate' => 'required|numeric'
        ]);

        $car_type = $tarrif;
        $car_type->type = $request->input('type');
        $car_type->title = $request->input('title');
        $car_type->description = $request->input('description');
        $car_type->rate = $request->input('rate');

        if ($car_type->save()) {
            $request->session()->flash('status_success', 'Tarrif (car_type) update successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/tarrifs');
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