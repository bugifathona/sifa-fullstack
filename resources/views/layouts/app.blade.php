<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIFA</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script defer src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables-classic@latest" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="font-sans font-normal text-gray-600 dark:text-gray-400 dark:bg-gray-800">

  @yield('content1')

</body>
</html>
