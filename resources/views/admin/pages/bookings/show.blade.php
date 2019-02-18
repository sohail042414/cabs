@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2">
            @include('admin.pages.bookings.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                
                <div class="card-header">
                    Booking Details , Booking Id # {{$booking->id}}                    
                    <a class="btn btn-primary" href="/admin/bookings/assign/{{$booking->id}}" style="float:right;">Assign/Change Cab</a>                    
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <h2>Booking Details</h2>    
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Field</th>
                                            <th scope="col">Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($booking->showBookingFields() as $field => $title)
                                        <tr>
                                            <td scope="row">{{$title}}</td>
                                            <td>{{ $booking->{$field} }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12">
                            @if($booking->status =='confirmed' && is_object($booking->cab))
                            <h2>Cab details</h2>    
                            <table class="table">    
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                </thead>  
                                <tbody>                      
                                    @foreach ($booking->showCabFields() as $field => $title)
                                        <tr>
                                            <td scope="row">{{$title}}</td>
                                            <td>{{ $booking->cab->{$field} }}</td>
                                        </tr>
                                    @endforeach   
                                    </tbody>                        
                                </table>
                            @endif

                            @if($booking->status =='confirmed' && is_object($booking->driver))
                            <h2>Driver details</h2>    
                            <table class="table">    
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Field</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                </thead>  
                                <tbody>                      
                                    @foreach ($booking->showDriverFields() as $field => $title)
                                        <tr>
                                            <td scope="row">{{$title}}</td>
                                            <td>{{ $booking->driver->{$field} }}</td>
                                        </tr>
                                    @endforeach   
                                    </tbody>                        
                                </table>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection