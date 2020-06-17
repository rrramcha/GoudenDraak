<template>
    <div class="row">
        <div class="col-10">
            <label> Vanaf
                <input v-model="firstdate" type="date">
            </label>
            <label> Tot
                <input v-model="seconddate" type="date">
            </label>

            <table class="table">
                <thead>
                <tr>
                    <th>Transactie</th>
                    <th>Product</th>
                    <th>Datum</th>
                </tr>
                </thead>
                <tbody v-for="item in filteredData" >
                    <tr>
                        <td>
                            {{item.transaction_id}}
                        </td>
                        <td>
                            {{item.item_name}}
                        </td>
                        <td>
                            {{item.date}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-2">
            <div class="card">
                <h3 class="card-body">Omzet: {{turnover}}</h3>
                <h3 class="card-body">Btw: {{btwAmount}}</h3>
                <h3 class="card-body">Omzet exclusief btw: {{turnoverExclusive}}</h3>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: "sales-panel",
        data () {
            return {
                salesdata: [],
                firstdate: null,
                seconddate: null
            };
        },
        async created() {
            const response = await axios.get('/getsalesdata', []);

            this.salesdata = response.data;

        },

        methods:{
            roundMoney(money){
                let shmoney = money;
                shmoney = Math.round(shmoney*100)/100;
                shmoney.toFixed(2);
                parseFloat(shmoney);
                return shmoney;
            }
        },

        computed:{
            filteredData(){
                return this.salesdata.filter(e => e.date >= this.firstdate && e.date <= this.seconddate);
            },
            turnover(){
                let turnover = 0;
                for(let x = 0; x < this.filteredData.length; x++){
                    turnover+=this.salesdata[x].price;
                }
                /*turnover = Math.round(turnover*100)/100;
                turnover.toFixed(2);
                parseFloat(turnover);*/
                return this.roundMoney(turnover);
            },
            btwAmount(){
                return this.roundMoney(this.turnover * 0.09);
            },
            turnoverExclusive(){
                return this.roundMoney(this.turnover * 0.91);
            }
        }
    }
</script>

<style scoped>

</style>
