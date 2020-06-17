import Vue from 'vue';

require('./bootstrap');

Vue.component('register', require('./components/Register.vue').default);
Vue.component('sales-panel', require('./components/sales-panel').default);

let app = new Vue({
    el: '#app'
});

