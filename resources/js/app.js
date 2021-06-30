require('./bootstrap');

import Vue from 'vue';
import App from './vue/App';
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import VueToast from 'vue-toast-notification';

import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import 'vue-toast-notification/dist/theme-sugar.css';

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.use(VueToast)

const app = new Vue({
    el: '#app',
    components: { App }
});