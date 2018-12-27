@extends('layouts.pages')

@section('content')

@include('common.navbar_main')

<header class="page-header">
    <div class="container">
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        </ul>
        <h1>Get Taxi</h1>
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
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_empty_space" style="height: 48px">
                                            <span class="vc_empty_space_inner"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="vc_section form-taxi-short" style="margin-bottom:10px;">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div style="display:none;" class="heading  heading-small align-center" id="like_sc_header_1478942670">
                                            <h4>Our operators are waiting for your call:</h4>
                                            <h2>{{ config('app.settings.phone') }}</h2>
                                        </div>
                                        <div style="display:none;" class="wpb_text_column wpb_content_element  vc_custom_1495604727321">
                                            <div class="wpb_wrapper">
                                                <p class="form-label" style="text-align: center;">Also you can order a taxi online</p>
                                            </div>
                                        </div>
                                        <div role="form" class="wpcf7" id="wpcf7-f326-p17-o1" lang="en-US" dir="ltr">
                                            <div class="screen-reader-response"></div>
                                            @include('common.form_get_taxi_center')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        @include('common.section_tarrif')
                    </div>
                </article>
            </div>

        </div>
    </div>

</div>

@include('common.section_clients')

@endsection