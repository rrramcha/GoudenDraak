@extends('layout.layout')

@section('content')
    <a class="btn btn-success" href="{{route('menu.download')}}" target="_blank">Download het menu</a>
    <div id="favorites">
        <ul style="list-style: none">
            <li>1</li>
        </ul>
    </div>
    <div>
        <table class="table table-sm">
            <thead class="thead-dark" style="font-size: 1.2rem;">
                <tr>
                    <th>Menunummer</th>
                    <th>Naam</th>
                    <th>Prijs</th>
                    <th></th>
                </tr>
            </thead>
            @foreach($menuItems as $category)
                <tr>
                    <td colspan="4" style="background-color: #b51f09; color: #dfbc5e; text-align: center; font-size: 1.5rem; border: transparent">
                        <span class="" style="white-space:nowrap;">{{$category->first()->item_category}}</span>
                    </td>
                </tr>
                @foreach($category as $item)
                <tr class="menu" style="background-color:#ee6146" >
                    <td>
                        {{$item->menu_prefix}}
                        {{$item->menu_number}}
                        {{$item->menu_suffix}}
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
                    <td>
                        <button onclick="markFavorite({{$item->menu_number}})" class="btn btn-danger">❤</button>
                    </td>
                </tr>
                    @endforeach
            @endforeach
        </table>

    </div>
@endsection

<script>
    function markFavorite(dish){
        let date = new Date();
        date.setTime(date.getTime()+(1*24*60*60*1000));
        document.cookie = "favorite" + "=" + dish + "; expires=" + date.toGMTString();
    }
</script>
