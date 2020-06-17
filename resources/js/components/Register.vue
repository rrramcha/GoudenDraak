<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <input v-model="searchquery" type="text">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Menunummer
                                </th>
                                <th>
                                    Naam
                                </th>
                                <th>
                                    Prijs
                                </th>
                                <th>

                                </th>
                            </tr>
                        </thead>
                        <tbody v-for="item in filteredItems" :key="item.id">
                            <tr>
                                <td>
                                    {{ item.menu_prefix }}
                                    {{ item.menu_number }}
                                    {{ item.menu_suffix }}
                                </td>
                                <td>
                                    {{ item.item_name }}
                                </td>
                                <td>
                                    €
                                    {{ item.price }}
                                </td>
                                <td>
                                    <button v-on:click="addMenuItem(item)" class="btn btn-success">+
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-5 card h-25">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th>
                                Naam
                            </th>
                            <th>
                                Prijs
                            </th>
                            <th>

                            </th>
                        </tr>
                        </thead>
                        <tbody v-for="item in orderitems">
                        <tr>
                            <td>
                                {{ item.item_name }}
                            </td>
                            <td>
                                €
                                {{ item.price }}
                            </td>
                            <td>
                                <button v-on:click="removeMenuItem(item)" class="btn btn-sm btn-danger">x
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <h4>Totaalprijs: € {{ totalprice }}</h4>
                    <label>
                        <input v-model="comment" placeholder="Notities">
                    </label>
                    <button  v-on:click="sendOrder" class="btn btn-sm btn-info">Bestelling Aanmaken</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        async created() {
            const response = await axios.get('/getmenuitems');

            this.menuitems = response.data;
        },

        data () {
            return {
                menuitems: [],
                orderitems: [],
                comment: null,
                searchquery: ''
            };
        },
        methods: {
            addMenuItem(item){
                this.orderitems.push(item);
            },

            removeMenuItem(item){
                let index = this.orderitems.indexOf(item);
                if (index > -1) {
                    this.orderitems.splice(index, 1);
                }
            },

            sendOrder(){
                axios.post('/sendorder', [this.orderitems, this.comment]).then(function (response) {

                    console.log(response.data);

                });
                this.orderitems = [];
                this.comment = '';
                alert('bestelling aangemaakt!');
            },
            filterItem(item){
                let fullnumber = '';
                if(item.menu_prefix){
                    fullnumber += item.menu_prefix.toString();
                }
                fullnumber += item.menu_number.toString();

                if(item.menu_suffix){
                    fullnumber += item.menu_suffix.toString();
                }

                if(item.item_name.toLowerCase().includes(this.searchquery.toLowerCase()) ||
                    item.item_category.toLowerCase().includes(this.searchquery.toLowerCase()) ||
                    fullnumber.toLowerCase().includes(this.searchquery.toLowerCase())
                ) {
                    return true;
                }

                return false;
            }
        },

        computed:{
            filteredItems(){
                if(this.searchquery === ''){
                    return this.menuitems;
                } else {

                    return this.menuitems.filter(item => this.filterItem(item));
                }

            },
            totalprice(){
                var totalprice = 0;
                for (var x = 0; x < this.orderitems.length; x++) {
                    totalprice += this.orderitems[x].price;
                }
                totalprice = Math.round(totalprice * 100) / 100;
                totalprice.toFixed(2);
                parseFloat(totalprice);
                return totalprice;
            }
        }


    }
</script>

<style scoped>

</style>
