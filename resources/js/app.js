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
   		 { path: '/pt', name: 'pregunta-t', component: require('./components/PreguntaTComponent.vue').default },
   		 { path: '/pn', name: 'pregunta-n', component: require('./components/PreguntaNComponent.vue').default },
   		 { path: '/pm', name: 'pregunta-m', component: require('./components/PreguntaMComponent.vue').default },
    ],
});

const app = new Vue({
    el: '#app',
    router: router
});
