@extends('register.kassalayout')
@section('content')

    <div id="root">
    <div class="container row">
        <div class="col-lg-11">
        <table class="table table-sm">
            <thead style="font-size: 1.2rem;">
            <tr>
                <th>Menunummer</th>
                <th>Naam</th>
                <th>Prijs</th>
                <th></th>
            </tr>
            </thead>
            {{--@foreach($menuItems as $category)
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
                            {{$item->price}}
                        </td>

                        <td>
                            <button class="btn btn-success pb-0 pt-0" @click="addMenuItem">+</button>
                        </td>
                    </tr>

                @endforeach
            @endforeach--}}
        </table>
        </div>

        <div class="col-sm-1">
            <div>
                <ul>
                    <li v-for="item in menuItems" v-text="item">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#root',
            data: {
                menuItem: '',
                menuItems: []
            },
            mounted : function(){
                this.getVueItems();
            },
            methods:{
                addMenuItem(){
                    this.menuItems.push(this.menuItem);
                },
                getVueItems: function(){
                    axios.get('/vueitems').then(response => {
                        this.menuItems = response.data;
                    });
                }
            }

        });
    </script>
@endsection
