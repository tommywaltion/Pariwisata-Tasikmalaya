<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('titles') | Tasikmalaya</title>
    @vite(['resources/css/main.css','resources/css/app.css'])
    @yield('stylesheet')
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>

<body>
    @include('include.navbar')
    @yield('content')
    @include('include.footer')
</body>
@yield('script')
</html>