<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('theme/css/bootstrap/bootstrap.css') }}">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css'
    media='all' />
  <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}" />
  <title>Taxi</title>
</head>
<body>

  @include('front.common.header')
  @include('front.common.menu')
  
  @yield('content')
 
    @include('front.common.footer')
 <!-- Resource jQuery -->
  <script src="{{ asset('theme/js/jquery-2.1.1.js') }}"></script>
  <script src="{{ asset('theme/js/main.js') }}"></script> 
</body>
</html>