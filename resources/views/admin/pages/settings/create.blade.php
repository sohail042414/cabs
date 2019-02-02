@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-2">
            @include('admin.pages.settings.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Create Setting</div>

                <div class="card-body">
                    @include('admin.pages.settings.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection