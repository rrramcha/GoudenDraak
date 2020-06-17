@extends('admin.layout')
@section('content')
    <h1>Welkom in het admin paneel</h1>
    <div class="container">
        <div class="card-body">
            <a class="btn display-2 p-5 card btn-warning m-1" href={{route('admin.dish.overview')}}> Gerechten </a>
            <a class="btn display-2 p-5 card btn-info m-1" href="{{route('register.sales')}}">Sales</a>
        </div>
    </div>
@endsection
