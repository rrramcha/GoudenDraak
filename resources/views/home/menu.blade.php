@extends('layout.layout')

@section('content')
    <div>
        <table class="table table-sm">
            <thead class="thead-dark" style="font-size: 1.2rem;">
                <tr>
                    <th>Menunummer</th>
                    <th>Naam</th>
                    <th>Prijs</th>
                </tr>
            </thead>
            @foreach($menuItems as $category)
                <tr>
                    <td colspan="3" style="background-color: #b51f09; color: #dfbc5e; text-align: center; font-size: 1.5rem; border: transparent">
                        <span class="" style="white-space:nowrap;">{{$category->first()->item_category}}</span>
                    </td>
                </tr>
                @foreach($category as $item)
                <tr class="menu" style="background-color:#ee6146" >
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
                    </td>

                    <td>
                        {{$item->price}}
                    </td>
                </tr>
                    @endforeach
            @endforeach
        </table>

    </div>
@endsection
