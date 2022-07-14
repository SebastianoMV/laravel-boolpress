require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');

import App from './App.vue';
import 'animate.css';
import router from './routes';



const app = new Vue({

    el: '#app',
    router,

    render:h=> h(App)


})
