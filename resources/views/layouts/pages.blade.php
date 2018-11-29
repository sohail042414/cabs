<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UK Airport Cab Services') }}</title>

    <!-- Scripts -->
    <!--
        <script src="{{ asset('taxi-park/jquery.js') }}" defer></script>
    <script src="{{ asset('taxi-park/jquery-migrate.min.js') }}" defer></script>
    <script src="{{ asset('taxi-park/js_composer_front.min.js') }}" defer></script>
    <script src="{{ asset('taxi-park/modernizr-2.6.2.min.js') }}" defer></script>-->
    <script src="{{ asset('taxi-park/pace.js') }}" defer>
    </script>
    <script src="{{ asset('js/app.js') }}">
    </script>
    <script src="{{ asset('taxi-park/map-style.js') }}" defer>
    </script>
    <script src="{{ asset('taxi-park/skrollr.min.js') }}" defer>
    </script>
    <script src="{{ asset('taxi-park/scripts.js') }}" defer>
    </script>
    <!--<script src="{{ asset('taxi-park/scripts_theme.js') }}" defer></script>-->
    <script src="{{ asset('taxi-park/plugins.min.js') }}" defer>
    </script>

    <!-- Fonts -->

    <link href="{{ asset('taxi-park/font.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/typcn.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/unycon.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/inline.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/js_composer.min.css') }}" rel="stylesheet">

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


    <!-- Styles -->
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{ asset('taxi-park/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/style.css') }}" rel="stylesheet">
    <link href="{{ asset('taxi-park/styles.css') }}" rel="stylesheet">

</head>

<body class="page-template-default page masthead-fixed full-width footer-widgets singular wpb-js-composer js-comp-ver-5.5.2 vc_responsive">

    <div id="preloader"></div>

    @yield('content')

    @include('common.footer')

</body>

</html>