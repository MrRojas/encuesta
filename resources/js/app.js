/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
//window.Vuetify = require('vuetify');
import VueRouter from 'vue-router';

//Vue.use(Vuetify);
Vue.use(VueRouter);


var router = new VueRouter({
  history: false,
  routes: [
    { path: '/', name: 'home', component: require('./components/CategoriesComponent.vue').default },
    ],
});

const app = new Vue({
    el: '#app',
    router: router
});
