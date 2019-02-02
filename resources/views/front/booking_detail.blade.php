@extends('front.layouts.master')
@section('content')
<style>
    .booking-confirmation{
        background: #FFC61A !important;
        -webkit-border-radius: 8px;
        -webkit-background-clip: padding-box;
        -moz-border-radius: 8px;
        -moz-background-clip: padding;
        border-radius: 8px;
        background-clip: padding-box;
        max-width: 570px;
        min-height: 200px;
        margin: 20px auto !important;
        padding: 45px 35px 10px !important;
    }
</style>

<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
      <li class="home">
          <a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a>
        </li>
        <li class="current">
          // Booking Details
        </li>
      </ul>
      <h1>Booking Details</h1>
    </div>
  </section>

<div class="booking-confirmation">
    <p>Booking date : {{$booking->booking_date}}</p>
    <p>From : {{$booking->from_address}}</p>
    <p>To : {{$booking->to_address}}</p>
    <p>Type : {{$booking->car_type}}</p>
    <p>Rate : {{$booking->rate."/km"}}</p>
    <p>Distance : {{$booking->distance}}</p>
    <p>Fare : {{$booking->amount}}</p>
    <p>Passangers: {{$booking->passangers}}</p>
    <p>Status : {{$booking->status}}</p>
</div>

@include('front.common.section_tarrif')
@endsection