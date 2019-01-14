<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--
        <script src="{{ asset('taxi-park/jquery.js') }}" defer></script>
    <script src="{{ asset('taxi-park/jquery-migrate.min.js') }}" defer></script>
    <script src="{{ asset('taxi-park/js_composer_front.min.js') }}" defer></script>
    <script src="{{ asset('taxi-park/modernizr-2.6.2.min.js') }}" defer></script>-->
    <script src="{{ asset('taxi-park/pace.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('taxi-park/map-style.js') }}" defer></script>
    <script src="{{ asset('taxi-park/skrollr.min.js') }}" defer></script>
    <script src="{{ asset('taxi-park/scripts.js') }}" defer></script>
    <!--<script src="{{ asset('taxi-park/scripts_theme.js') }}" defer></script>-->
    <script src="{{ asset('taxi-park/plugins.min.js') }}" defer></script>

    <!-- Fonts -->

    <link href="{{ asset('taxi-park/font.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/typcn.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/unycon.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/inline.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/js_composer.min.css') }}" rel="stylesheet">
    <!----
    <link href="{{ asset('taxi-park/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/dashicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/editor-style.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/entypo.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/ie.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/linecons.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/lnr.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/selectize.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
-->


    <!-- Styles -->
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{ asset('taxi-park/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/style.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/styles.css') }}" rel="stylesheet">

</head>

<body class="home page-template-default page page-id-10 logged-in admin-bar masthead-fixed full-width footer-widgets grid wpb-js-composer js-comp-ver-5.5.2 vc_responsive  customize-support pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div id="preloader"></div>
        <div class="pace-activity"></div>
        <div class="grid-loader">
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
        </div>
    </div>

    <div id="nav-wrapper">
        <nav class="navbar  navbar-static navbar-home" data-spy="">
            <div class="container">
                <a class="logo" href="http://uktaxi.local/">
                    <img width="106" height="72" src="http://uktaxi.local/wp-content/uploads/2017/05/logo.png" class="attachment-taxipark-big size-taxipark-big"
                        alt="">
                </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>

                    <div class="pull-right nav-right visible-lg">
                    </div>
                    <ul id="menu-main-menu" class="nav navbar-nav">
                        <li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-42"><a><span>Home</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-10 current_page_item menu-item-51"><a
                                        href="http://uktaxi.local/"><span>Homepage 1</span></a></li>
                                <li id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52"><a
                                        href="http://uktaxi.local/homepage-2/"><span>Homepage 2</span></a></li>
                                <li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53"><a
                                        href="http://uktaxi.local/homepage-3/"><span>Homepage 3</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-50"><a
                                href="http://uktaxi.local/get-taxi/"><span>Get Taxi</span></a></li>
                        <li id="menu-item-55" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55"><a
                                href="http://uktaxi.local/services/"><span>Services</span></a></li>
                        <li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59"><a><span>Our
                                    Blog</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a
                                        href="http://uktaxi.local/blog-one-column/"><span>Blog One Column</span></a></li>
                                <li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a
                                        href="http://uktaxi.local/blog-two-columns/"><span>Blog Two Columns</span></a></li>
                                <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a
                                        href="http://uktaxi.local/blog-three-columns/"><span>Blog Three Columns</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-60"><a><span>Gallery</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
                                        href="http://uktaxi.local/gallery-2-columns/"><span>Gallery 2-columns</span></a></li>
                                <li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a
                                        href="http://uktaxi.local/gallery-3-columns/"><span>Gallery 3-columns</span></a></li>
                                <li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a
                                        href="http://uktaxi.local/gallery-4-columns/"><span>Gallery 4-columns</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-619" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-619"><a
                                href="#"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-623" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623"><a
                                        href="http://uktaxi.local/shop/"><span>Shop</span></a></li>
                                <li id="menu-item-622" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-622"><a
                                        href="http://uktaxi.local/cart/"><span>Cart</span></a></li>
                                <li id="menu-item-621" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-621"><a
                                        href="http://uktaxi.local/checkout/"><span>Checkout</span></a></li>
                                <li id="menu-item-620" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-620"><a
                                        href="http://uktaxi.local/my-account/"><span>My account</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-707" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-707"><a><span>Contacts</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
                                        href="http://uktaxi.local/contacts/"><span>Contacts</span></a></li>
                                <li id="menu-item-706" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-706"><a
                                        href="http://uktaxi.local/contacts-2/"><span>Contacts 2</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-61"><a
                                href="#"><span>Pages</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-783" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-783"><a><span>Typography</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-597" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-597"><a
                                                href="http://uktaxi.local/headers/"><span>Headers</span></a></li>
                                        <li id="menu-item-579" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-579"><a
                                                href="http://uktaxi.local/text/"><span>Text</span></a></li>
                                        <li id="menu-item-594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-594"><a
                                                href="http://uktaxi.local/text_columns/"><span>Text Columns</span></a></li>
                                        <li id="menu-item-643" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-643"><a
                                                href="http://uktaxi.local/table/"><span>Table</span></a></li>
                                        <li id="menu-item-588" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-588"><a
                                                href="http://uktaxi.local/separators/"><span>Separators</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-784" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-784"><a><span>Form
                                            Elements</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-555" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-555"><a
                                                href="http://uktaxi.local/buttons/"><span>Buttons</span></a></li>
                                        <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a
                                                href="http://uktaxi.local/forms/"><span>Forms</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-785" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-785"><a><span>Shortcodes</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-527" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-527"><a
                                                href="http://uktaxi.local/accordions/"><span>Accordions</span></a></li>
                                        <li id="menu-item-538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-538"><a
                                                href="http://uktaxi.local/alert/"><span>Alerts</span></a></li>
                                        <li id="menu-item-568" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-568"><a
                                                href="http://uktaxi.local/tabs/"><span>Tabs</span></a></li>
                                        <li id="menu-item-642" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-642"><a
                                                href="http://uktaxi.local/text-sliders/"><span>Text Sliders</span></a></li>
                                        <li id="menu-item-56" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-56"><a
                                                href="http://uktaxi.local/shortcodes/"><span>Shortcodes</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-786" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-786"><a
                                        href="#"><span>Lists</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-675" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-675"><a
                                                href="http://uktaxi.local/icons-page/"><span>Icons</span></a></li>
                                        <li id="menu-item-562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562"><a
                                                href="http://uktaxi.local/list/"><span>Lists and Social Icons</span></a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a
                                        href="http://uktaxi.local/testimonials/"><span>Testimonials</span></a></li>
                                <li id="menu-item-750" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750"><a
                                        href="http://uktaxi.local/team/"><span>Team</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="nav-mob hidden-lg">
                    </div>
                </div>
            </div>
        </nav>
    </div>



    <div class="container">
        <!-- Content -->
        <div class="margin-disabled">
            <div class="row">
                <div class=" col-md-12 text-page">
                    <article id="post-10" class="post-10 page type-page status-publish hentry">
                        <div class="entry-content clearfix">
                            <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section vc_custom_item1 vc_section-has-fill homepage-block-1"
                                style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="heading  align-center" id="like_sc_header_81552181">
                                                    <h4>Get Taxi Now</h4>
                                                    <h2>800-5-800</h2><span class="icon-bg fa fa-phone-square"></span>
                                                </div>
                                                <div class="large-image-center">
                                                    <img src="http://uktaxi.local/wp-content/uploads/2017/05/car-big.png"
                                                        class="full-width" alt="animation">
                                                    <img src="http://uktaxi.local/wp-content/themes/taxipark/assets/images/_car-splash.png"
                                                        class="splash" alt="Taxi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section bg-color-theme_color taxi-form-full"
                                style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div role="form" class="wpcf7" id="wpcf7-f470-p10-o1" lang="en-US" dir="ltr">
                                                    <div class="screen-reader-response"></div>
                                                    <form action="/#wpcf7-f470-p10-o1" method="post" class="wpcf7-form"
                                                        novalidate="novalidate">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="470">
                                                            <input type="hidden" name="_wpcf7_version" value="5.0.4">
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f470-p10-o1">
                                                            <input type="hidden" name="_wpcf7_container_post" value="10">
                                                        </div>
                                                        <div class="menu-types"><a href="#" data-value="Standart" class="car-select-0  active">Standart</a><a
                                                                href="#" data-value="Business" class="car-select-1 ">Business</a><a
                                                                href="#" data-value="VIP" class="car-select-2 red">VIP</a><a
                                                                href="#" data-value="Bus-Minivan" class="car-select-3 ">Bus-Minivan</a><input
                                                                type="hidden" class="type-value" value="Standart" name=""></div>
                                                        <div class="row">
                                                            <div class="col-md-3"><label><span class="wpcf7-form-control-wrap address"><input
                                                                            type="text" name="address" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text"
                                                                            aria-invalid="false" placeholder="From Address..."></span></label></div>
                                                            <div class="col-md-3"><label><span class="wpcf7-form-control-wrap to"><input
                                                                            type="text" name="to" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text"
                                                                            aria-invalid="false" placeholder="To..."></span>
                                                                </label></div>
                                                            <div class="col-md-3"><label><span class="wpcf7-form-control-wrap phone"><input
                                                                            type="text" name="phone" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Phone Number"></span></label></div>
                                                            <div class="col-md-3"><label> <span class="wpcf7-form-control-wrap cartype"><input
                                                                            type="text" name="cartype" value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text"
                                                                            aria-invalid="false" placeholder="Car Type"></span>
                                                                </label></div>
                                                        </div>
                                                        <p><input type="submit" value="Get Taxi" class="wpcf7-form-control wpcf7-submit"><span
                                                                class="ajax-loader"></span></p>
                                                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section class="vc_section services-block">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="heading  heading-large align-center" id="like_sc_header_915230290">
                                                    <h4>Welcome</h4>
                                                    <h2>Our Services</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                width="71" height="71" src="http://uktaxi.local/wp-content/uploads/2017/05/services-1.png"
                                                                class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                    </figure>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h5>Rapid city transfer</h5>
                                                        <p>We will bring you quickly and comfortably to anywhere in
                                                            your city</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                width="71" height="71" src="http://uktaxi.local/wp-content/uploads/2017/05/services-2.png"
                                                                class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                    </figure>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h5>Booking a hotel</h5>
                                                        <p>If you need a comfortable hotel, our operators will book it
                                                            for you, and take a taxi to the address</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                width="68" height="68" src="http://uktaxi.local/wp-content/uploads/2017/05/services-3.png"
                                                                class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                    </figure>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h5>Airport transfer</h5>
                                                        <p>We will bring you quickly and comfortably to anywhere in
                                                            your city</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                width="72" height="60" src="http://uktaxi.local/wp-content/uploads/2017/05/services-4.png"
                                                                class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                    </figure>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element ">
                                                    <div class="wpb_wrapper">
                                                        <h5>Baggage transport</h5>
                                                        <p>If you need a comfortable hotel, our operators will book it
                                                            for you, and take a taxi to the address</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section tariffs-block bg-color-gray"
                                style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="heading  heading-large align-center" id="like_sc_header_9399506">
                                                    <h4>See our</h4>
                                                    <h2>Tariffs</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="tariff-item matchHeight " style="height: 370px;">
                                                    <div class="image"><img src="http://uktaxi.local/wp-content/uploads/2017/05/tariff-1.png"
                                                            class="full-width" alt="Standart"></div>
                                                    <h4>Standart</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$2<span> /km </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="tariff-item matchHeight " style="height: 370px;">
                                                    <div class="image"><img src="http://uktaxi.local/wp-content/uploads/2017/05/tariff-2.png"
                                                            class="full-width" alt="Business"></div>
                                                    <h4>Business</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$2,7<span> /km </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="tariff-item matchHeight vip" style="height: 370px;">
                                                    <div class="image"><img src="http://uktaxi.local/wp-content/uploads/2017/05/tariff-3.png"
                                                            class="full-width" alt="VIP"></div>
                                                    <h4>VIP</h4>
                                                    <p>Standard sedan for a drive around the city at your service. </p>
                                                    <div class="price">$5<span> /km </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="tariff-item matchHeight " style="height: 370px;">
                                                    <div class="image"><img src="http://uktaxi.local/wp-content/uploads/2017/05/tariff-4.png"
                                                            class="full-width" alt="Bus-minivan"></div>
                                                    <h4>Bus-minivan</h4>
                                                    <p>Standard sedan for a drive around the city at your service</p>
                                                    <div class="price">$4.5<span> /km </span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="true" data-vc-parallax="1.5"
                                data-vc-parallax-image="http://uktaxi.local/wp-content/uploads/2017/05/download-bg.jpg"
                                class="vc_section download-block vc_custom_item2 vc_section-has-fill vc_general vc_parallax vc_parallax-content-moving bg-color-black bg-overlay-black download-block"
                                style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="heading  heading-large align-center" id="like_sc_header_375910216">
                                                    <h4>Get More Benefits</h4>
                                                    <h2>Download The App</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space" style="height: 66px"><span class="vc_empty_space_inner"></span></div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-top vc_row-flex">
                                                    <div class="wpb_column vc_column_container vc_col-sm-2 vc_hidden-sm vc_hidden-xs">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading  header-rounded align-center" id="like_sc_header_962976669">
                                                                    <h5>01.</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-10">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <h5>Fast booking</h5>
                                                                        <p>Nam ac ligula congue, interdum enim sit
                                                                            amet, fermentum nisi.</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-2 vc_hidden-sm vc_hidden-xs">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading  header-rounded align-center" id="like_sc_header_1098703100">
                                                                    <h5>02.</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-10">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <h5 class="yellow">Easy to use</h5>
                                                                        <p>Orci varius natoque penatibus et magnis dis
                                                                            parturient montes, nascetur ridiculus mus.</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                        <div class="vc_column-inner vc_custom_item3">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="mob wpb_column vc_column_container vc_col-sm-12 vc_col-has-fill">
                                                        <div class="vc_column-inner vc_custom_1495291256271">
                                                            <div class="wpb_wrapper">
                                                                <div class="vc_empty_space" style="height: 200px"><span
                                                                        class="vc_empty_space_inner"></span></div>

                                                                <div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1495637123038">

                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                                width="150" height="50" src="http://uktaxi.local/wp-content/uploads/2017/05/app-google-150x50.png"
                                                                                class="vc_single_image-img attachment-thumbnail"
                                                                                alt=""></a>
                                                                    </figure>
                                                                </div>

                                                                <div class="wpb_single_image wpb_content_element vc_align_center">

                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <a href="#" target="_self" class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                                width="150" height="53" src="http://uktaxi.local/wp-content/uploads/2017/05/app-apple-150x53.png"
                                                                                class="vc_single_image-img attachment-thumbnail"
                                                                                alt=""></a>
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space" style="height: 66px"><span class="vc_empty_space_inner"></span></div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-10">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <h5 class="yellow" style="text-align: right;">GPS
                                                                            searching</h5>
                                                                        <p style="text-align: right;">Ut elementum
                                                                            tincidunt erat vel ornare. Suspendisse ac
                                                                            felis non diam pretium.</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-2 vc_hidden-sm vc_hidden-xs">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading  header-rounded align-center" id="like_sc_header_1690462518">
                                                                    <h5>03.</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-10">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <h5 class="yellow" style="text-align: right;">Bonuses
                                                                            for ride</h5>
                                                                        <p style="text-align: right;">Phasellus l et
                                                                            porta tortor dignissim at. Pellentesque
                                                                            gravida tortor at euismod mollis.</p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-2 vc_hidden-sm vc_hidden-xs">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="heading  header-rounded align-center" id="like_sc_header_1536522614">
                                                                    <h5>04.</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_parallax-inner skrollable skrollable-before" data-bottom-top="top: -50%;"
                                    data-top-bottom="top: 0%;" style="height: 150%; background-image: url(&quot;http://uktaxi.local/wp-content/uploads/2017/05/download-bg.jpg&quot;); top: -50%;"></div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section" style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
                                    class="vc_row wpb_row vc_row-fluid vc_row-no-padding car-block" style="position: relative; left: -43px; box-sizing: border-box; width: 1286px;">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">

                                            <div class="wpb_wrapper">
                                                <div class="car-right animation-block">
                                                    <img src="http://uktaxi.local/wp-content/uploads/2017/05/car-big-side.png"
                                                        class="full-width slideleft" alt="animation">
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1495641431935">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="vc_empty_space" style="height: 75px"><span
                                                                        class="vc_empty_space_inner"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="heading  heading-large align-left" id="like_sc_header_158449325">
                                                    <h4>For Drivers</h4>
                                                    <h2>Do You Want To Earn With Us?</h2>
                                                </div>
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <p>Quisque sollicitudin feugiat risus, eu
                                                                            posuere ex euismod eu. Phasellus hendrerit,
                                                                            massa efficitur dapibus pulvinar, sapien
                                                                            eros sodales ante, euismod aliquet nulla
                                                                            metus a mauris.</p>

                                                                    </div>
                                                                </div>

                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul class="check two-col strong">
                                                                            <li>Luxury cars</li>
                                                                            <li>No fee</li>
                                                                            <li>Weekly payment</li>
                                                                            <li>Fixed price</li>
                                                                            <li>Good application</li>
                                                                            <li>Stable orders</li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                <div class="vc_empty_space" style="height: 20px"><span
                                                                        class="vc_empty_space_inner"></span></div>
                                                                <div class="btn-wrap align-left"><a href="" class="btn  btn-lg align-left">Become
                                                                        a Driver</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="vc_empty_space" style="height: 140px"><span class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true"
                                class="vc_row wpb_row vc_row-fluid vc_row-no-padding" style="position: relative; left: -43px; box-sizing: border-box; width: 1286px;">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <hr class="lg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section testimonials-block"
                                style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="heading  heading-large align-center" id="like_sc_header_36312132">
                                                    <h4>Happy Client's</h4>
                                                    <h2>Testimonials</h2>
                                                </div>
                                                <div class="swiper-container testimonials-list testimonials-slider row swiper-container-horizontal">
                                                    <div class="swiper-wrapper" style="transform: translate3d(-780px, 0px, 0px); transition-duration: 1000ms;">
                                                        <div class="col-md-4 col-sm-6 swiper-slide" style="width: 390px;">
                                                            <article class="inner matchHeight" style="height: 367px;">
                                                                <div class="text">
                                                                    <p>Nullam orci dui, dictum et magna sollicitudin,
                                                                        tempor blandit erat. Maecenas suscipit tellus
                                                                        sit amet augue placerat fringilla a id lacus.
                                                                        Fusce tincidunt in leo lacinia condimentum.
                                                                        Maecenas suscipit tellus sit amet augue
                                                                        placerat fringilla a id lacus.</p>
                                                                </div>
                                                                <div class="quote">
                                                                    <span class="fa fa-quote-left"></span>
                                                                    <div class="name">ANASTASIA STONE</div><img width="102"
                                                                        height="102" src="http://uktaxi.local/wp-content/uploads/2017/05/client-1.jpg"
                                                                        class="attachment-stargym-test size-stargym-test wp-post-image"
                                                                        alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/client-1.jpg 102w, http://uktaxi.local/wp-content/uploads/2017/05/client-1-100x100.jpg 100w"
                                                                        sizes="(max-width: 102px) 100vw, 102px">
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-prev"
                                                            style="width: 390px;">
                                                            <article class="inner matchHeight" style="height: 367px;">
                                                                <div class="text">
                                                                    <p>Quisque sollicitudin feugiat risus, eu posuere
                                                                        ex euismod eu. Phasellus hendrerit, massa
                                                                        efficitur dapibus pulvinar, sapien eros sodales
                                                                        ante, euismod aliquet nulla metus a mauris.</p>
                                                                </div>
                                                                <div class="quote">
                                                                    <span class="fa fa-quote-left"></span>
                                                                    <div class="name">PATRICK JAMES</div><img width="110"
                                                                        height="110" src="http://uktaxi.local/wp-content/uploads/2017/05/client-5.jpg"
                                                                        class="attachment-stargym-test size-stargym-test wp-post-image"
                                                                        alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/client-5.jpg 110w, http://uktaxi.local/wp-content/uploads/2017/05/client-5-100x100.jpg 100w"
                                                                        sizes="(max-width: 110px) 100vw, 110px">
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-active"
                                                            style="width: 390px;">
                                                            <article class="inner matchHeight" style="height: 367px;">
                                                                <div class="text">
                                                                    <p>Suspendisse nec arcu sed nibh lacinia pretium.
                                                                        Phasellus eros ligula, mattis id rutrum non,
                                                                        eleifend vitae lacus.
                                                                    </p>
                                                                </div>
                                                                <div class="quote">
                                                                    <span class="fa fa-quote-left"></span>
                                                                    <div class="name">STEVEN RASHFORD</div><img width="110"
                                                                        height="110" src="http://uktaxi.local/wp-content/uploads/2017/05/client-4.jpg"
                                                                        class="attachment-stargym-test size-stargym-test wp-post-image"
                                                                        alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/client-4.jpg 110w, http://uktaxi.local/wp-content/uploads/2017/05/client-4-100x100.jpg 100w"
                                                                        sizes="(max-width: 110px) 100vw, 110px">
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 swiper-slide swiper-slide-next"
                                                            style="width: 390px;">
                                                            <article class="inner matchHeight" style="height: 367px;">
                                                                <div class="text">
                                                                    <p>Nullam orci dui, dictum et magna sollicitudin,
                                                                        tempor blandit erat. Maecenas suscipit tellus
                                                                        sit amet augue placerat fringilla a id lacus.
                                                                        Fusce tincidunt in leo lacinia condimentum.
                                                                        Maecenas suscipit tellus sit amet augue
                                                                        placerat fringilla a id lacus. Fusce tincidunt
                                                                        in leo lacinia condimentum.
                                                                    </p>
                                                                </div>
                                                                <div class="quote">
                                                                    <span class="fa fa-quote-left"></span>
                                                                    <div class="name">ANASTASIA STONE</div><img width="102"
                                                                        height="102" src="http://uktaxi.local/wp-content/uploads/2017/05/client-1.jpg"
                                                                        class="attachment-stargym-test size-stargym-test wp-post-image"
                                                                        alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/client-1.jpg 102w, http://uktaxi.local/wp-content/uploads/2017/05/client-1-100x100.jpg 100w"
                                                                        sizes="(max-width: 102px) 100vw, 102px">
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 swiper-slide" style="width: 390px;">
                                                            <article class="inner matchHeight" style="height: 367px;">
                                                                <div class="text">
                                                                    <p>Quisque sollicitudin feugiat risus, eu posuere
                                                                        ex euismod eu. Phasellus hendrerit, massa
                                                                        efficitur dapibus pulvinar, sapien eros sodales
                                                                        ante, euismod aliquet nulla metus a mauris.</p>
                                                                </div>
                                                                <div class="quote">
                                                                    <span class="fa fa-quote-left"></span>
                                                                    <div class="name">PATRICK JAMES</div><img width="110"
                                                                        height="110" src="http://uktaxi.local/wp-content/uploads/2017/05/client-5.jpg"
                                                                        class="attachment-stargym-test size-stargym-test wp-post-image"
                                                                        alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/client-5.jpg 110w, http://uktaxi.local/wp-content/uploads/2017/05/client-5-100x100.jpg 100w"
                                                                        sizes="(max-width: 110px) 100vw, 110px">
                                                                </div>
                                                            </article>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6 swiper-slide" style="width: 390px;">
                                                            <article class="inner matchHeight" style="height: 367px;">
                                                                <div class="text">
                                                                    <p>Nullam orci dui, dictum et magna sollicitudin,
                                                                        tempor blandit erat. Maecenas suscipit tellus
                                                                        sit amet augue placerat fringilla a id lacus.
                                                                        Fusce tincidunt in leo lacinia condimentum.
                                                                        Maecenas suscipit tellus sit amet augue
                                                                        placerat fringilla a id lacus. Fusce tincidunt
                                                                        in leo lacinia condimentum.</p>
                                                                </div>
                                                                <div class="quote">
                                                                    <span class="fa fa-quote-left"></span>
                                                                    <div class="name">ANASTASIA STONE</div><img width="102"
                                                                        height="102" src="http://uktaxi.local/wp-content/uploads/2017/05/client-1.jpg"
                                                                        class="attachment-stargym-test size-stargym-test wp-post-image"
                                                                        alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/client-1.jpg 102w, http://uktaxi.local/wp-content/uploads/2017/05/client-1-100x100.jpg 100w"
                                                                        sizes="(max-width: 102px) 100vw, 102px">
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div class="arrows">
                                                        <a href="#" class="arrow-left fa fa-caret-left"></a>
                                                        <a href="#" class="arrow-right fa fa-caret-right"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid banners-block"
                                style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            width="600" height="238" src="http://uktaxi.local/wp-content/uploads/2017/05/banner-1-4.png"
                                                            class="vc_single_image-img attachment-full" alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/banner-1-4.png 600w, http://uktaxi.local/wp-content/uploads/2017/05/banner-1-4-300x119.png 300w"
                                                            sizes="(max-width: 600px) 100vw, 600px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_left">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            width="600" height="238" src="http://uktaxi.local/wp-content/uploads/2017/05/banner-2-2.png"
                                                            class="vc_single_image-img attachment-full" alt="" srcset="http://uktaxi.local/wp-content/uploads/2017/05/banner-2-2.png 600w, http://uktaxi.local/wp-content/uploads/2017/05/banner-2-2-300x119.png 300w"
                                                            sizes="(max-width: 600px) 100vw, 600px"></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </article>
                </div>

            </div>
        </div>

    </div>


    <div class="container">
        <section data-vc-full-width="true" data-vc-full-width-init="true" class="vc_section partners-block" style="position: relative; left: -43px; box-sizing: border-box; width: 1286px; padding-left: 43px; padding-right: 43px;">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-4">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="heading  align-left" id="like_sc_header_210190782">
                                <h4>Our partners</h4>
                                <h2>And clients</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-8">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            width="84" height="72" src="http://uktaxi.local/wp-content/uploads/2017/05/partner-2.png"
                                                            class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            width="75" height="60" src="http://uktaxi.local/wp-content/uploads/2017/05/partner-1.png"
                                                            class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            width="87" height="60" src="http://uktaxi.local/wp-content/uploads/2017/05/partner-3.png"
                                                            class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3 vc_col-xs-6">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_single_image wpb_content_element vc_align_center">

                                                <figure class="wpb_wrapper vc_figure">
                                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                            width="76" height="74" src="http://uktaxi.local/wp-content/uploads/2017/05/partner-5.png"
                                                            class="vc_single_image-img attachment-thumbnail" alt=""></div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>




    <section id="block-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-ms-12  matchHeight clearfix" style="height: 308px;">
                    <div class="footer-widget-area">
                        <div id="text-2" class="widget widget_text">
                            <h4>About Us</h4>
                            <div class="textwidget">Nullam orci dui, dictum et magna sollicitudin, tempor blandit erat.
                                Maecenas suscipit tellus sit amet augue placerat fringilla a id lacus. Fusce tincidunt
                                in leo lacinia condimentum. </div>
                        </div>
                        <div id="taxipark_icons-2" class="widget widget_taxipark_icons">
                            <ul class="social-small">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-pinterest-square"></a></li>
                                <li><a href="#" class="fa fa-skype"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-ms-12 hidden-xs hidden-ms hidden-sm matchHeight clearfix" style="height: 308px;">
                    <div class="footer-widget-area">
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h4>Explore</h4>
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="menu">
                                    <li id="menu-item-128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128"><a
                                            href="http://uktaxi.local/gallery-2-columns/">Gallery</a></li>
                                    <li id="menu-item-129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-129"><a
                                            href="http://uktaxi.local/contacts/">Contacts</a></li>
                                    <li id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a
                                            href="http://uktaxi.local/testimonials/">Testimonials</a></li>
                                    <li id="menu-item-131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-131"><a
                                            href="http://uktaxi.local/blog-two-columns/">Blog</a></li>
                                    <li id="menu-item-132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-132"><a
                                            href="http://uktaxi.local/services/">Services</a></li>
                                    <li id="menu-item-133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a
                                            href="http://uktaxi.local/get-taxi/">Get Taxi</a></li>
                                    <li id="menu-item-481" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-481"><a
                                            href="http://uktaxi.local/shortcodes/">Shortcodes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-ms-12  matchHeight clearfix" style="height: 308px;">
                    <div class="footer-widget-area">
                        <div id="text-3" class="widget widget_text">
                            <h4>Contact us</h4>
                            <div class="textwidget"><strong>Address:</strong> 43 2-nd Avenue, New York, NY 29004-7153</div>
                        </div>
                        <div id="taxipark_icons-3" class="widget widget_taxipark_icons">
                            <ul class="social-icons-list">
                                <li><a href="#"><span class="fa fa-phone"></span>800-5-800</a></li>
                                <li><a href="#"><span class="fa fa-envelope"></span>gettaxi@taxipark.co.uk</a></li>
                                <li><a href="#"><span class="fa fa-skype"></span>gettaxipark</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <main class="py-4">
        @yield('content')
    </main>

</body>

</html