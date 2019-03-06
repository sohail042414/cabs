@extends('front.layouts.master')
@section('content')
<script src="{{ asset('jquery-ui/jquery-1.11.1.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui-timepicker-addon.js') }}" defer></script>  

<link href="{{ asset('jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('jquery-ui/jquery-ui-timepicker-addon.css') }}" rel="stylesheet">
@include('geocode')


<section class="page-header">
    <div class="container">
      <ul class="breadcrumbs">
        <li class="home"><a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a></li>
        <li class="current"><a href="/get-taxi">// Get Taxi</a></li>
      </ul>
      <h1>Get Taxi</h1>
    </div>
  </section>

<section class="tx-section">
    <div class="container">
      <div class="tx-heading center">
        <h4>OUR OPERATORS ARE WAITING FOR YOUR CALL</h4>
        <h2>{{ config('app.settings.phone', '') }}</h2>
      </div>


      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="search-block-box">
            @include('front.common.taxi_form')
          </div>
        </div>
      </div>
    </div>
  </section>

@include('front.common.section_tarrif')
@include('front.common.section_clients')
@endsection
