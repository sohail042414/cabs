@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-lg-2">
            @include('admin.pages.bookings.sidebar')
        </div>
        <div class="col-md-10 col-lg-10">
            <div class="card">
                <div class="card-header">Bookings</div>
                <div class="card-body">

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">Car Type</th>
                                <th scope="col">Date</th>
                                <th scope="col">Distance</th>
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
                                <td>{{$booking->booking_date}}</td>
                                <td>{{$booking->distanceKilometers()}}</td>
                                <td>{{ ucfirst($booking->status)}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/bookings/{{$booking->id}}/edit/">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/admin/bookings/{{$booking->id}}">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="/admin/bookings/delete/{{$booking->id}}">Delete</a>
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