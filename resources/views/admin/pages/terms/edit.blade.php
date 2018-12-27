s@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-2">
            @include('admin.pages.terms.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Edit Term (Section).</div>

                <div class="card-body">
                    @include('admin.terms.terms.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection