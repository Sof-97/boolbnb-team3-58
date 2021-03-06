window.Vue = require('vue');


import Vue from 'vue';
import router from './route';
import App from './components/App.vue';

Vue.component('SingleApartment', require('./components/pages/SingleApartment.vue'));

const root = new Vue({
    el: '#root',
    router,
    render: h=>h(App)
});