<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/site.css')}}" rel="stylesheet">
    <title>Home</title>
</head>

<body>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Bestelling aanmaken<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
</div>
</nav>
@yield('content')

<script src="./resources/js/app.js"></script>

<script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

