<?php

namespace App\Http\Controllers\Admin;

use App\Models\Term;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TermsController extends Controller
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
        $list = Term::paginate($per_page);

        return view('admin.pages.terms.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $term = new Term;


        return view('admin.pages.terms.create', array('term' => $term, 'action' => 'create'));
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
            'sort_order' => 'numeric',
            'title' => 'required|min:10',
            'text' => 'required|min:50',
        ]);

        $term = new Term();
        $term->sort_order = $request->input('sort_order');
        $term->title = $request->input('title');
        $term->text = $request->input('text');
        if ($term->save()) {
            $request->session()->flash('status_success', 'Term created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/terms');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
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
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
    {
        return view('admin.pages.terms.edit', array('Term' => $term, 'action' => 'update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Term $term)
    {

        $this->validate($request, [
            'sort_order' => 'numeric',
            'title' => 'required|min:10',
            'text' => 'required|min:50',
        ]);

        $term->sort_order = $request->input('sort_order');
        $term->title = $request->input('title');
        $term->text = $request->input('text');

        if ($term->save()) {
            $request->session()->flash('status_success', 'Term updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/terms/' . $term->id . '/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        //
    }
}