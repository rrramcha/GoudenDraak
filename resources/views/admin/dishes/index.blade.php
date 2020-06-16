@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="col-sm">
            <button class="btn btn-info col-sm">
                <a class="nav-link" href="{{route('admin.dish.create')}}">Gerecht toevoegen</a>
            </button>
            <table class="table table-sm">
                <thead style="font-size: 1.2rem;">
                <tr>
                    <th>Menunummer</th>
                    <th>Naam</th>
                    <th>Prijs</th>
                    <th></th>
                </tr>
                </thead>
                @foreach($menuItems as $category)
                    <tr>
                        <td colspan="3">
                            <span class="" style="white-space:nowrap;">{{$category->first()->item_category}}</span>
                        </td>
                    </tr>
                    @foreach($category as $item)
                        <tr class="menu" >
                            <td>
                                @if($item->menu_prefix)
                                    {{$item->menu_prefix}}
                                @endif
                                {{$item->menu_number}}
                                @if($item->menu_suffix)
                                    {{$item->menu_suffix}}
                                @endif
                            </td>

                            <td>
                                {{$item->item_name}}
                                @if($item->description)
                                    <span style="color: #e6e0ae">({{$item->description}})</span>
                                @endif
                                @if($item->allergies)
                                    <br>
                                    <h1>{{$item->allergies}}</h1>
                                    @endif
                            </td>

                            <td>
                                {{$item->price}}
                            </td>
                            <td>
                                <button class="btn btn-success">
                                    <a class="btn-success" href="{{ route('admin.dish.edit', $item) }}">Bewerken</a>
                                </button>
                            </td>
                        </tr>

                    @endforeach
                @endforeach
            </table>
        </div>
@endsection
