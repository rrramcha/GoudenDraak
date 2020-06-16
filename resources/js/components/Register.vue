<template>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-7">
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
                        <tbody v-for="item in menuitems" :key="item.id">
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
                    <button  v-on:click="sendOrder" class="btn btn-sm">Bestelling Aanmaken</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        async created() {
            const response = await axios.get('/getmenuitems');

            const stuff = response.data;
            console.log(stuff);
            this.menuitems = response.data;
        },

        data () {
            return {
                menuitems: [],
                orderitems: [],
                totalprice: 0.0,
                comment: null
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
                this.totalprice = Math.round(this.totalprice*100)/100
                this.totalprice.toFixed(2)
                parseFloat(this.totalprice)
            },

            sendOrder(){

            }
        }


    }
</script>

<style scoped>

</style>
