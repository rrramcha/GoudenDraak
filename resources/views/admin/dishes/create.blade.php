@extends('admin.layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Gerecht aanmaken
            </div>
            <div class="card-body">
                <form action="{{route('admin.dish.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="item_name">Naam</label>
                        <input name="item_name" type="text" class="form-control" id="item_name" required>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('item_name') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="price">Prijs</label>
                        <input name="price" type="text" class="form-control" id="price" required>
                        <small class="form-text text-muted"></small>
                        <small class="text-danger">{{ $errors->first('price') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="item_category">Categorie</label>
                        <select class="form-control" id="item_category" name="item_category" required>
                            @foreach($itemCategories as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <small class="text-danger">{{ $errors->first('item_category') }}</small>
                    </div>
                    <button type="submit" class="btn btn-success">Opslaan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
