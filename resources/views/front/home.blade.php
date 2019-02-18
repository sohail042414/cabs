@extends('front.layouts.master')
@section('content')
<script src="{{ asset('jquery-ui/jquery-1.11.1.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}" defer></script>  
<script src="{{ asset('jquery-ui/jquery-ui-timepicker-addon.js') }}" defer></script>  

<link href="{{ asset('jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">
<link href="{{ asset('jquery-ui/jquery-ui-timepicker-addon.css') }}" rel="stylesheet">
@include('geocode')

<ul class="cb-slideshow">
    <li><span>Image 01</span><div></div></li>
    <li><span>Image 02</span><div></div></li>
    <li><span>Image 03</span><div></div></li>
    <li><span>Image 04</span><div></div></li>
    <li><span>Image 05</span><div></div></li>
    <li><span>Image 06</span><div></div></li>
  </ul>
  
<section class="homepage-1 top-spacing bottom-spacing">

    <div class="container">
    <div class="row">

        <div class="col-md-6">
        <div class="search-block-box gray">
            @include('front.common.taxi_form')
        </div>        
    </div>    
</div>
</div>
</section>
@include('front.common.section_info')
@include('front.common.section_tarrif')
@include('front.common.section_clients')
@endsection