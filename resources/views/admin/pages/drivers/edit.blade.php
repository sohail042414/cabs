@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-2">
            @include('admin.pages.drivers.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">
                    Edit Driver.
                    <a class="btn btn-primary" href="/admin/drivers/change-password/{{$driver->id}}" style="float:right;">Change Password</a>
                </div>
                <div class="card-body">
                    @include('admin.pages.drivers.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection