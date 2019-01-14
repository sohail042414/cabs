@extends('layouts.pages')

@section('content')

@include('common.navbar_main')

<header class="page-header">
    <div class="container">
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        </ul>
        <h1>Contacts</h1>
    </div>
</header>

<div class="container">
    <!-- Content -->
    <div class="margin-disabled">
        <div class="row">
            <div class=" col-md-12 text-page">
                <article id="post-25" class="post-25 page type-page status-publish hentry">
                    <div class="entry-content clearfix">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="heading  spanned" id="like_sc_header_1633766595">
                                            <h4>Opening Hours:</h4>
                                            <h2>24/7</h2>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>Nam eu mi eget velit vulputate tempor gravida quis massa. In
                                                    malesuada condimentum ultrices. Sed et mauris a purus fermentum
                                                    elementum. Sed tristique semper enim, et gravida orci iaculis et.
                                                    Nulla facilisi.</p>

                                            </div>
                                        </div>
                                        <div class="align-">
                                            <ul class="social-icons-list">
                                                <li class="large">
                                                    <span class="fa fa-phone"></span>
                                                    {{ config('app.settings.phone') }}
                                                </li>
                                                <li class="">
                                                    <span class="fa fa-skype"></span>
                                                    {{ config('app.settings.skype') }}
                                                </li>
                                                <li class="">
                                                    <span class="fa fa-map-marker"></span>
                                                    {{ config('app.settings.address') }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1495603019590">
                                            <div class="wpb_wrapper">
                                                <p><strong>Social:</strong></p>

                                            </div>
                                        </div>
                                        <div class="align-">
                                            <ul class="social-big">
                                                <li><a href="#" class="fa fa-facebook"></a></li>
                                                <li><a href="#" class="fa fa-twitter"></a></li>
                                                <li><a href="#" class="fa fa-youtube"></a></li>
                                                <li><a href="#" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                        <div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>
                                        <div class="btn-wrap">
                                            <a href="{{ url('/') }}/get-taxi" class="btn btn-lg btn-black-bordered">
                                                GetTaxi Online</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 80px"><span class="vc_empty_space_inner"></span></div>
                                        <div class="heading  align-center" id="like_sc_header_2003855822">
                                            <h3>Send Message</h3>
                                        </div>
                                        <div role="form" class="wpcf7" id="wpcf7-f200-p25-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            <form action="/contacts/#wpcf7-f200-p25-o1" method="post" class="wpcf7-form"
                                                novalidate="novalidate">
                                                <div style="display: none;">
                                                    <input type="hidden" name="_wpcf7" value="200">
                                                    <input type="hidden" name="_wpcf7_version" value="5.0.4">
                                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f200-p25-o1">
                                                    <input type="hidden" name="_wpcf7_container_post" value="25">
                                                </div>
                                                <p><label> Your Name *<br>
                                                        <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                                name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                aria-required="true" aria-invalid="false"></span>
                                                    </label></p>
                                                <p><label> Your Email *<br>
                                                        <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                                name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                aria-required="true" aria-invalid="false"></span>
                                                    </label></p>
                                                <p><label> Message *<br>
                                                        <span class="wpcf7-form-control-wrap your-message"><textarea
                                                                name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                                aria-invalid="false"></textarea></span> </label></p>
                                                <p><input type="submit" value="Get Taxi" class="wpcf7-form-control wpcf7-submit"><span
                                                        class="ajax-loader"></span></p>
                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 80px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        @include('common.section_testimonials')
                    </div>
                </article>
            </div>

        </div>
    </div>

</div>


@include('common.section_clients')

@endsection