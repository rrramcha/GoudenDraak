<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/site.css')}}" rel="stylesheet">
    <title>Home</title>
</head>

<body style="background: darkred">
@include('layout.nav')
@yield('content')

<script src="./resources/js/app.js"></script>
</body>


</html>