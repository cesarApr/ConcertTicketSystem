<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Concert Ticket System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--enable mobile device-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--fontawesome css-->
    <link rel="stylesheet" href="{{ asset('master/css/font-awesome.min.css') }}">
    <!--bootstrap css-->
    <link rel="stylesheet" href="{{ asset('master/css/bootstrap.min.css') }}">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('master/css/animate-wow.css') }}">
    <!--main css-->
    <link rel="stylesheet" href="{{ asset('master/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('master/css/slick.min.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('master/css/responsive.css') }}">
</head>

<body>
    @section('header')
        @include('layout.header')
    @show
    @yield('content')
    @section('footer')
        @include('layout.footer')
    @show
    <!--main js-->
    <script src="{{ asset('master/js/jquery-1.12.4.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('master/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('master/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('masterjs/slick.min.js') }}"></script>
    <script src="{{ asset('master/js/wow.min.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('master/js/custom.js') }}"></script>
</body>

</html>
