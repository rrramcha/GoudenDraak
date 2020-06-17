@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Gerecht bewerken
            </div>
            <div class="card-body">
                <form action="{{route('admin.dish.update', $menuItem)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="item_name">Naam</label>
                        <input name="item_name" type="text" class="form-control" id="item_name" value="{{ $menuItem->item_name }}" required>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('item_name') }}</small>
                    </div>

                    @if($menuItem->menu_prefix)
                    <div class="form-group">
                        <label for="menu_prefix">Menu prefix</label>
                        <input name="menu_prefix" type="text" class="form-control" id="menu_prefix" value="{{$menuItem->menu_prefix}}" disabled>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('menu_prefix') }}</small>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="menu_number">Menu nummer</label>
                        <input name="menu_number" type="text" class="form-control" id="menu_number" value="{{$menuItem->menu_number}}" disabled>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('menu_number') }}</small>
                    </div>
                    @if($menuItem->menu_suffix)
                    <div class="form-group">
                        <label for="menu_suffix">Menu suffix</label>
                        <input name="menu_suffix" type="text" class="form-control" id="menu_suffix" value="{{$menuItem->menu_suffix}}" disabled>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('menu_suffix') }}</small>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="price">Prijs</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{$menuItem->price}}" required>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('price') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="item_category">Categorie</label>
                        <select class="form-control" id="item_category" name="item_category" required>
                            @foreach($itemCategories as $category)
                                <option value="{{ $category->category_name }}"{{ ($menuItem->item_category == $category->category_name ? "selected":"") }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('item_category') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="spiciness_scale">Pittigheid</label>
                        <select class="form-control" id="spiciness_scale" name="spiciness_scale" required>
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('spiciness_scale') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="allergies">Allergieën</label>
                        <select class="form-control" id="allergies" name="allergies" multiple>
                            @foreach($allergies as $allergy)
                                <option value="{{ $allergy->id }}">{{ $allergy->name }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('allergies') }}</small>
                    </div>

                    <button type="submit" class="btn btn-success">Opslaan</button>
                </form>

                <form action="{{ route('admin.dish.delete', $menuItem) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Gerecht verwijderen"/>
                </form>
            </div>
        </div>
    </div>
@endsection
