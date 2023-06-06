<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('judul')
  <link rel="shortcut icon" type="image/png" href="{{ asset('admin') }}/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('admin/css/styles.min.css') }}" />
</head>

<body>
    @yield('content')
    
  <script src="{{ asset('admin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>