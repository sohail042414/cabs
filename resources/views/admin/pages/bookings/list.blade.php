@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom:10px;">
        <div class="col-md-12 col-lg-12">
            <a class="btn btn-primary" href="/admin/bookings/create">Create Booking</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">Bookings</div>
                <div class="card-body">
                <p>Pencil icon: <span class="glyphicon glyphicon-pencil"></span></p>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Car Type</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Status</th>
                                <th  colspan="3" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($list as $booking)
                            <tr>
                                <th scope="row">{{$booking->id}}</th>
                                <td>{{$booking->from_address}}</td>
                                <td>{{$booking->to_address}}</td>
                                <td>{{$booking->car_type}}</td>
                                <td>{{ date('d/m/Y',strtotime($booking->booking_date))}}</td>
                                <td>{{ date('h:i',strtotime($booking->booking_date))}}</td>
                                <td>
                                    @if($booking->status == 'pending')
                                    <span style="color:red;">
                                    {{ ucfirst($booking->status)}}
                                    </span>
                                    @else
                                    <span style="color:green;">
                                    {{ ucfirst($booking->status)}}
                                    </span>
                                    @endif
                                </td>
                                <td>                                
                                    <a class="btn btn-primary btn-sm" href="/admin/bookings/{{$booking->id}}/edit/">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/admin/bookings/{{$booking->id}}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="/admin/bookings/delete/{{$booking->id}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="5">
                                    {{ $list->links("pagination::bootstrap-4")}}
                                </td>
                            </tr>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection