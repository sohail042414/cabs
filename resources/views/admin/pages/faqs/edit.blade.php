@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-2">
            @include('admin.pages.faqs.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Edit Question.</div>

                <div class="card-body">
                    @include('admin.pages.faqs.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection