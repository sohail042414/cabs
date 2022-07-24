<!doctype html>
<html lang="en">

<head>
    <title>{{ config('app.name', 'Rayan Transports') }}</title>
    <link rel="icon" type="image/x-icon" href="/theme/img/facivon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap/bootstrap.css') }}">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
        type='text/css' media='all' />
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('theme/css/zoomslider.css') }}" />
    <!-- Resource jQuery -->
    <script src="{{ asset('theme/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
    <script src="{{ asset('theme/js/main.js') }}"></script>
</head>

<body>
    @include('front.common.header')
    @include('front.common.menu')
    @yield('content')
    @include('front.common.footer')

    <!--
  <div id="preloader"></div>
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
    <div class="pace-progress-inner"></div>
  </div>

  <div class="pace-activity">
  </div>
  <div class="grid-loader">
    <div class="grid-item"></div>
    <div class="grid-item"></div>
    <div class="grid-item"></div><div class="grid-item"></div>
    <div class="grid-item"></div><div class="grid-item"></div></div>
  </div>
-->
</body>

</html>