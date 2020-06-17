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
                    <th>Allergieën</th>
                    <th>Pittigheid</th>
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
                            </td>

                            <td>
                                <ul style="padding: 0;">
                                    @foreach($item->allergies as $allergy)
                                        <li>{{$allergy->name}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @php
                                    $output_scale = $item->spiciness_scale;
                                    if($output_scale > 3)
                                    $output_scale = 3;
                                @endphp
                                @for ($i = 0; $i < $output_scale ; $i++)
                                    ⏺
                                @endfor

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
