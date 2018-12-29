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
                    View Booking {{$booking->id}}
                    @if ($booking->status == 'pending')
                    <a class="btn btn-primary" href="/admin/bookings/confirm/{{$booking->id}}" style="float:right;">Confirm Booking</a>
                    @else
                    <span class="label label-default"  style="float:right;">Status : {{$booking->status}}</span>    
                    @endif
                </div>

                <div class="card-body">
                <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Field</th>
                                <th scope="col">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking->getAttributes() as $field => $value)
                            <tr>
                                <td scope="row">{{$field}}</td>
                                <td>{{$value}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection