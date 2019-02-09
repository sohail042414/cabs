<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CustomerController extends Controller
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
        //config('app.customers.records_per_page');
        $list = Customer::paginate($per_page);

        return view('admin.pages.customers.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/admin/customers');
        //For now customers create feature is not available.
        //$customer = new Customer;
        //return view('admin.pages.customers.create', array('customer' => $customer, 'action' => 'create'));
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
        ]);

        $customer = new Customer();
        $customer->email = $request->input('email');
        $customer->name = trim($request->input('name'));
        //$customer->value = trim($request->input('value'));
        if ($customer->save()) {
            $request->session()->flash('status_success', 'Customer created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/customers');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
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
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.pages.customers.edit', array('customer' => $customer, 'action' => 'update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
        ]);

        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->active = $request->input('active', 0);
        $customer->verified = $request->input('verified', 0);

        if ($customer->save()) {
            $request->session()->flash('status_success', 'Customer updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/customers/' . $customer->id . '/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }


    /**
     * 
     */
    public function change_password($id)
    {
        $customer = Customer::find($id);
        return view('admin.pages.customers.change_password', array('customer' => $customer, 'action' => 'update'));
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

        $customer = Customer::find($request->input('customer_id'));

        $hasher = app('hash');

        $customer->password = $hasher->make($request->input('password'));
        $customer->update();
        $request->session()->flash('status_success', 'Password changed successfully!');

        /*
        if ($hasher->check($request->input('old_password'), $customer->password)) {
        } else {
            $request->session()->flash('status_error', 'Invalid old password !');
        }
         */

        return redirect('/admin/customers/change-password/' . $customer->id);
    }


}