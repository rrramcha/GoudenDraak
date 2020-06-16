<html>
<body>
<table>
    <thead>
    <tr>
        <th>Menunummer</th>
        <th>Naam</th>
        <th>Prijs</th>
    </tr>
    </thead>
    <tbody>
    @foreach($menuItems as $category)
        <tr>
            <td colspan="3">
                <span>{{$category->first()->item_category}}</span>
            </td>
        </tr>
        @foreach($category as $item)
            <tr>
                <td>
                    {{$item->menu_number}}
                </td>

                <td>
                    {{$item->item_name}}
                    @if($item->description)
                        <span>({{$item->description}})</span>
                    @endif
                </td>

                <td>
                    {{$item->price}}
                </td>
            </tr>
        @endforeach
    @endforeach
    </tbody>
</table>

<h1>Aanbiedingen: </h1>
<p>Er zijn geen aanbiedingen op dit moment</p>
</body>
</html>
