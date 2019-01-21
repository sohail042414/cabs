<!doctype html>
<html lang="en">
<head>
<title>Taxi</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('theme/css/bootstrap/bootstrap.css') }}">
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css'
    media='all' />
  <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}" />
   <!-- Resource jQuery -->
   <script src="{{ asset('theme/js/jquery-2.1.1.js') }}"></script>
   <script src="{{ asset('theme/js/bootstrap.min.jss') }}"></script>
  <script src="{{ asset('theme/js/main.js') }}"></script> 
</head>
<body>

  @include('front.common.header')
  @include('front.common.menu')
  
  @yield('content')
 
    @include('front.common.footer')
</body>
</html>