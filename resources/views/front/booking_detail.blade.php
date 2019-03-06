@extends('front.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
        <ul class="breadcrumbs">
            <li class="home">
            <a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a>
            </li>
            <li class="current">
            // Booking Detail
            </li>
        </ul>
    <h1>Booking Detail</h1>
    </div>
  </section>

   @php ($detail_css_class = ($booking->status == 'pending')? 'col-md-8 col-lg-8 offset-lg-2 offset-md-2 col-sm-12':'col-md-6 col-lg-6 col-sm-12')

  <section class="tx-section">
        <div class="container">
            @if(Session::has('booking_success'))
            <div class="row">
                <div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
                    <div class="alert  alert-success">               
                        <div class="header"><b>Success!</b></div>
                        <p>Your booking created, we will review details and contact you soon! 
                        <br>For any queries contact us at <b>{{config('settings.phone')}}</b></p>   
                    </div>
                </div>
            </div>
            @endif
            
            <div class="row">
                <div class="{{$detail_css_class}}">

                   <div class="bookings-wrap">
                      <div class="table-responsive">
                          <table class="table color-table primary-table">
                              <thead>
                                  <tr>
                                      <th colspan="2">Bookig Details </th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($booking->showBookingFields() as $field => $data)
                                  <tr>
                                      <td>{{$data['title']}}</td>
                                      <td>{{ $data['value'] }}</td>
                                  </tr>   
                                @endforeach
                              </tbody>
                          </table>
                      </div>
                   </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                @if(is_object($booking->cab))
                    <div class="bookings-wrap">
                        
                        <div class="table-responsive">
                            <table class="table color-table primary-table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Cab Details </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($booking->showCabFields() as $field => $title)
                                    <tr>
                                        <td>{{$title}}</td>
                                        <td>{{ $booking->cab->{$field} }}</td>
                                    </tr>   
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        @endif

                        @if(is_object($booking->driver))
                        <div class="table-responsive" style="margin-top:10px;">
                            <table class="table color-table primary-table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Driver Details </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($booking->showDriverFields() as $field => $title)
                                    <tr>
                                        <td>{{$title}}</td>
                                        <td>{{ $booking->driver->{$field} }}</td>
                                    </tr>   
                                    @endforeach

                                </tbody>
                            </table>
                        </div>                       
                    </div>
                    @endif
                </div>
            </div> 
            @if($booking->status =='pending')
            <div class="row" style="margin-top:20px; display:none;">
                <div class="col-md-4 col-lg-4 offset-md-4 offset-lg-4 col-sm-12">
                  <button onclick='location.href="{{ url('/cancel-booking'.$booking->id) }}"' class="tx-btn btn btn-lg m-0 pull-right">Cancel booking</button>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection