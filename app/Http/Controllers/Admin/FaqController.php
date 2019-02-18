<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FaqController extends Controller
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
        $list = Faq::paginate($per_page);

        return view('admin.pages.faqs.list', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faq = new Faq;
        return view('admin.pages.faqs.create', array('faq' => $faq, 'action' => 'create'));
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
            'question' => 'required|min:10',
            'answer' => 'required|min:50',
        ]);

        $faq = new Faq();
        $faq->sort_order = $request->input('sort_order');
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        if ($faq->save()) {
            $request->session()->flash('status_success', 'Faq created successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/faqs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
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
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('admin.pages.faqs.edit', array('faq' => $faq, 'action' => 'update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {

        $this->validate($request, [
            'sort_order' => 'numeric',
            'question' => 'required|min:10',
            'answer' => 'required|min:50',
        ]);

        $faq->sort_order = $request->input('sort_order');
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');

        if ($faq->save()) {
            $request->session()->flash('status_success', 'Faq updated successfully!');
        } else {
            $request->session()->flash('status_error', 'There was some error please try again!');
        }

        return redirect('/admin/faqs/' . $faq->id . '/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $faq = Faq::find($id);

        if (is_object($faq)) {
            $faq->delete();
            $request->session()->flash('status_success', 'FAQ deleted!');
        } else {
            $request->session()->flash('status_error', 'FAQ does not exist!');
        }
        return redirect('/admin/faqs/');
    }
}