@extends('layouts.pages')

@section('content')

@include('common.navbar_main')

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
        margin: 0 auto !important;
        padding: 45px 35px 10px !important;
    }
</style>

<header class="page-header">
    <div class="container">
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        </ul>
        <h1>Booking Confirmation!</h1>
    </div>
</header>

<div class="container">
    <!-- Content -->
    <div class="margin-disabled">
        <div class="row">
            <div class=" col-md-12 text-page">
                <article id="post-25" class="post-25 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <section class="vc_section form-taxi-short" style="margin-bottom:10px;">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div style="padding-top:15px;" class="heading  heading-small align-center" id="like_sc_header_1478942670">
                                            <h4>We will confirm your booking soon, you can contact us at</h4>
                                            <h2>{{ config('app.settings.phone') }}</h2>
                                        </div>
                                        
                                        <div class="booking-confirmation">
                                        <p>Booking date : {{$booking->booking_date}}</p>
                                        <p>From : {{$booking->from_address}}</p>
                                        <p>To : {{$booking->to_address}}</p>
                                        <p>Type : {{$booking->car_type}}</p>
                                        <p>Passangers: {{$booking->passangers}}</p>
                                        <p>Status : {{$booking->status}}</p>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="vc_row-full-width vc_clearfix"></div>                        
                    </div>
                </article>
            </div>

        </div>
    </div>

</div>

@include('common.section_clients')

@endsection