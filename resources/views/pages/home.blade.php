@extends('layouts.front')

@section('content')
<div class="container">
    <!-- Content -->
    <div class="margin-disabled">
        <div class="row">
            <div class=" col-md-12 text-page">
                <article id="post-10" class="post-10 page type-page status-publish hentry">
                    <div class="entry-content clearfix">


                        <!--homepage first section-->
                        <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section vc_custom_item1 vc_section-has-fill homepage-block-1"
                            style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="heading  align-center" id="like_sc_header_81552181">
                                                <h4>Get Taxi Now</h4>
                                                <h2>{{ config('app.settings.phone') }}</h2><span class="icon-bg fa fa-phone-square"></span>
                                            </div>
                                            <div class="large-image-center">
                                                <img src="/images/car-big.png" class="full-width" alt="animation">
                                                <img src="/images/_car-splash.png" class="splash" alt="Taxi">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--Get Taxi form -->
                        @include('common.section_get_taxi')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--Our Services--->
                        @include('common.section_services')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--Our Tarifs--->
                        @include('common.section_tarrif')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--appstore-->
                        @include('common.section_appstore')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--become partner-->
                        @include('common.section_partners')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--zipper-->
                        @include('common.zipper')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--testimonials-->
                        @include('common.section_testimonials')
                        <!--clear-->
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <!--banners-->
                        @include('common.section_banners')
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</div>
@include('common.section_clients')

@endsection