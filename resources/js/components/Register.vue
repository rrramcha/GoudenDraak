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
                totalprice: 0.0,
                comment: null,
                searchquery: ''
            };
        },
        methods: {
            addMenuItem(item){
                this.orderitems.push(item);
                this.updatePrice();
            },

            removeMenuItem(item){
                let index = this.orderitems.indexOf(item);
                if (index > -1) {
                    this.orderitems.splice(index, 1);
                }
                this.updatePrice();
            },

            updatePrice(){
                this.totalprice = 0;
                for(let x = 0; x < this.orderitems.length; x++){
                    this.totalprice+=this.orderitems[x].price;
                }
                this.totalprice = Math.round(this.totalprice*100)/100;
                this.totalprice.toFixed(2);
                parseFloat(this.totalprice);
            },

            sendOrder(){
                axios.post('/sendorder', [this.orderitems, this.comment]).then(function (response) {

                    console.log(response.data);

                });
                this.orderitems = [];
                this.comment = '';
                this.updatePrice();
                alert('bestelling aangemaakt!');
            },
            filterItem(item){
                if(item.item_name.toLowerCase().includes(this.searchquery.toLowerCase()) ||
                    item.item_category.toLowerCase().includes(this.searchquery.toLowerCase()) ||
                    item.menu_number.toString().toLowerCase().includes(this.searchquery.toLowerCase())
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

            }
        }


    }
</script>

<style scoped>

</style>
