import Vue from 'vue';

require('./bootstrap');

Vue.component('register', require('./components/Register.vue').default);

let app = new Vue({
    el: '#app'
});

