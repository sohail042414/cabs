@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Booking</div>

                <div class="card-body">
                    @include('admin.pages.bookings.form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection