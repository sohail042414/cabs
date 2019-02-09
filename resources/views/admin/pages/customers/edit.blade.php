@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-2">
            @include('admin.pages.customers.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">
                    Edit Customer.
                    <a class="btn btn-primary" href="/admin/customers/change-password/{{$customer->id}}" style="float:right;">Change Password</a>
                </div>

                <div class="card-body">
                    @include('admin.pages.customers.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection