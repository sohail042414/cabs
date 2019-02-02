@extends('front.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
      <li class="home">
          <a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a>
        </li>
        <li class="current">
          // Bookings
        </li>
      </ul>
      <h1>Bookings</h1>
    </div>
  </section>

  <section class="tx-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="tx-heading">
                        <h2>All Bookings</h2>
                    </div>
                </div>
                <div class="col-md-4">
                  <button onclick='location.href="{{ url('/get-taxi') }}"' class="tx-btn btn btn-lg m-0 pull-right">Create bookings</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                   <div class="bookings-wrap">
                      <div class="table-responsive">
                          <table class="table color-table primary-table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>From</th>
                                      <th>To</th>
                                      <th>Car Type</th>
                                      <th>Date</th>
                                      <th>Status</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                              @foreach ($list as $booking)
                                  <tr>
                                      <td>{{$booking->id}}</td>
                                      <td>{{$booking->from_address}}</td>
                                      <td>{{$booking->to_address}}</td>
                                      <td>{{$booking->car_type}}</td>
                                      <td>{{$booking->booking_date}}</td>
                                      <td>
                                        <span class="label-bookings label-success">Confirmed</span>
                                      </td>
                                      <td>
                                        <button class="btn-sml">X</button>
                                      </td>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                   </div>
                </div>
            </div>
        </div>
  </section>
@endsection