
require('./bootstrap');

window.Vue = require('vue');

// import VueRouter from 'vue-router'

// Vue.use(VueRouter)

// const routes = [
//   { path: '/foo', component: Foo },
//   { path: '/bar', component: Bar }
// ]

// const router = new VueRouter({
//   routes // short for `routes: routes`
// })


// Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    router,
    data: {
        test: 'testing good'
    }
});
