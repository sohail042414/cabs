<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $per_page = config('app.settings.records_per_page');
        $list = Service::paginate($per_page);
        return view('admin.pages.services.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = new Service();

        return view(
            'admin.pages.services.create',
            array(
                'service' => $service,
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
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required'
        ]);

        $service = new Service();
        $service->title = $request->input('title');
        $service->short_description = $request->input('short_description');
        $service->description = $request->input('description');
        if ($service->save()) {
            $request->session()->flash('status_success', 'Service created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/services');
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
    public function edit(Service $service)
    {

        return view(
            'admin.pages.services.edit',
            array(
                'service' => $service,
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
    public function update(Request $request, Service $service)
    {
      //
        $this->validate($request, [
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required'
        ]);

        $service->title = $request->input('title');
        $service->short_description = $request->input('short_description');
        $service->description = $request->input('description');
        if ($service->save()) {
            $request->session()->flash('status_success', 'Service created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }
        return redirect('/admin/services');
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