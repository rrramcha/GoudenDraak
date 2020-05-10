<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/maps.css')}}" rel="stylesheet">
    <title>Home</title>
</head>

<body>
@include('layout.nav')

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
