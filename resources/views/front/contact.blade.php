@extends('front.layouts.master')
@section('content')
<section class="page-header">
    <div class="container">
        <ul class="breadcrumbs">
        <li class="home">
            <a href="/">{{ config('app.name', 'UK Airport Cabs') }}</a>
        </li>
        <li class="current">
            <a href="/contact-us">// Contact Us</a>
        </li>
        </ul>
        <h1>Services</h1>
    </div>
</section>

<section class="tx-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tx-heading">
                    <h4>OPENING HOURS</h4>
                    <h2>24/7</h2>
                    <p>Nam eu mi eget velit vulputate tempor gravida quis massa. In malesuada condimentum ultrices. Sed et mauris a purus fermentum elementum. Sed tristique semper enim, et gravida orci iaculis et. Nulla facilisi.</p>
                </div>

                <ul class="social-icons-list dark">									
                    <li><a href="#"><span class="fa fa-phone"></span>800-5-800</a></li>
                    <li><a href="#"><span class="fa fa-envelope"></span>gettaxi@taxipark.co.uk</a></li>
                    <li><a href="#"><span class="fa fa-skype"></span>gettaxipark</a></li>
                    </ul>
                    <ul class="social-small">
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-pinterest-square"></a></li>
                        <li><a href="#" class="fa fa-skype"></a></li>
                        <li><a href="#" class="fa fa-google-plus"></a></li>
                    </ul>

            </div>

            <div class="col-md-6">

                <div class="tx-heading center">
                    <h2>SEND MESSAGE</h2>
                </div>
                
                <div class="contactus-form">
                    <div class="text-box">
                        <label>Name *</label>
                        <input type="text" />
                    </div>
                    <div class="text-box">
                        <label>Email *</label>
                        <input type="text" />
                        </div>
                        <div class="text-box">
                            <label>Message *</label>
                            <textarea></textarea>
                        </div>
                        <div class="btn-wrap align-left">
                            <a href="" class="tx-btn btn btn-lg align-left">Get Taxi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection