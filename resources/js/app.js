import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
require('./bootstrap');

Vue.use(VueRouter);

let app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!'
    }
});

