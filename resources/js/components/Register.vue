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
                                    <button v-on:click="addMenuItem(item.item_name, item.price)" class="btn btn-success">+
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
                                {{ item[0] }}
                            </td>
                            <td>
                                €
                                {{ item[1] }}
                            </td>
                            <td>
                                <button v-on:click="removeMenuItem(item)" class="btn btn-sm btn-danger">x
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <h4>Totaalprijs: € {{ totalprice }}</h4>
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
            addMenuItem(item_name, price){
                let order = [item_name, price];
                this.orderitems.push(order);
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
                    this.totalprice+=this.orderitems[x][1];
                }
                this.totalprice = Math.round(this.totalprice*100)/100
                this.totalprice.toFixed(2)
                parseFloat(this.totalprice)
            }
        }


    }
</script>

<style scoped>

</style>
