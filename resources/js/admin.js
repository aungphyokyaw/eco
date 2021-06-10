require('./bootstrap');

window.vue = require('vue');
import Vue from 'vue';
import router from './admin/router'

Vue.component('admin-master',require('./components/admin/AdminMaster.vue').default);

import Vuex from 'vuex'

const admin = new Vue({
    el: '#admin',
    router,
    data: {
        test: 'testing for admin'
    }
});