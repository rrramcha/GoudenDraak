@extends('layout.layout')

@section('content')

    <a class="btn btn-success" href="{{route('menu.download')}}" target="_blank">Download het menu</a>
    <div id="favorites">
        <h4>Favoriete gerechten: </h4>
        <ul style="list-style: none" id="favoritelist">

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
                        <button onclick="markFavorite('{{$item->item_name}}')" class="btn btn-danger">❤</button>
                    </td>
                </tr>
                    @endforeach
            @endforeach
        </table>

    </div>
@endsection

<script>
    favorites = [];

    function markFavorite(menunumber) {
        if(this.isFavorite(menunumber)){
            const index = this.favorites.indexOf(menunumber);
            if(index === -1){
                return;
            }
            this.favorites.splice(index, 1);
        }
        else {
            this.favorites.push(menunumber);
        }
        this.saveFavorites();
    }

    function isFavorite(menunumber) {
        return this.favorites.some(e => e === menunumber);
    }

    function saveFavorites(){
        let date = new Date();
        date.setTime(date.getTime()+(1*24*60*60*1000));
        let data = JSON.stringify(this.favorites);
        document.cookie = "favorite=" + data +"; expires=" + date.toGMTString();
        this.loadFavorites();
    }

    function loadFavorites() {
        let el = document.getElementById("favoritelist");
        el.innerHTML = "";
        favorites.forEach(makeElement);
    }

    function makeElement(item) {
        let el = document.getElementById("favoritelist");
        let node = document.createElement("li");
        let text = document.createTextNode(item);
        node.appendChild(text);
        el.appendChild(node);
    }

</script>
