<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('judul')

  <!-- Favicons -->
  <link href="{{ asset('assets') }}/img/favicon.ico" rel="icon">
  <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <link rel="stylesheet" href="{{ asset('auth/css/styles.min.css') }}" />
</head>

<body>
    @yield('content')
    
  <script src="{{ asset('auth/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('auth/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('auth/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('auth/js/app.min.js') }}"></script>
  <script src="{{ asset('auth/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('auth/libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('auth/js/dashboard.js') }}"></script>
</body>

</html>