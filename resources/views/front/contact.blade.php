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
        <h1>Contact Us</h1>
    </div>
</section>

<section class="tx-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tx-heading">
                    <h4>OPENING HOURS</h4>
                    <h2>24/7</h2>
                    <p>If you have a query relating to your booking, account, or need support then submit an enquiry below. A member of the Customer Service team will investigate and get back to you as soon as possible. For security purposes please do not enter any credit card information into the boxes below..</p>
                </div>

                <ul class="social-icons-list dark">									
                    <li><a href="#"><span class="fa fa-phone"></span>{{ config('settings.phone') }}</a></li>
                    <li><a href="#"><span class="fa fa-envelope"></span>{{ config('settings.address') }}</a></li>
                    <li><a href="#"><span class="fa fa-skype"></span>{{ config('settings.skype') }}</a></li>
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
                    <form id="contact-us-form" method="POST" action="/submit-contact-us">
                    
                    @if(Session::has('success_message'))
                    <p class="success-message">{{ Session::get('success_message') }}</p>
                    @endif
              
                    @if(Session::has('error_message'))
                    <p class="error-message">{{ Session::get('error_message') }}</p>
                    @endif

                    {{ csrf_field() }}
                        <div class="text-box">
                            <label>Name *</label>
                            <input type="text" name="contact_name" value="{{ old('contact_name') }}" />
                            @if($errors->has('contact_name'))
                            <span class="error-message">{{ $errors->first('contact_name') }}</p>
                            @endif    
                        </div>
                        <div class="text-box">
                            <label>Email *</label>
                            <input type="text" value="{{ old('contact_email') }}" name="contact_email" placeholder="john@example.com" />
                            @if($errors->has('contact_email'))
                            <span class="error-message">{{ $errors->first('contact_email') }}</p>
                            @endif 
                        </div>
                            <div class="text-box">
                                <label>Message *</label>
                                <textarea name="contact_message">{{ old('contact_message') }}</textarea>
                                @if($errors->has('contact_message'))
                                <span class="error-message">{{ $errors->first('contact_message') }}</p>
                                @endif 
                            </div>
                            <div class="btn-wrap align-left">
                                <a href="javascript:void()" onclick="submit_contact_form();" class="tx-btn btn btn-lg align-left">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script type="text/javascript">
    function submit_contact_form(){
        $('#contact-us-form').submit();
    }
</script>