import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const Foo = {template: '<div>Foo</div>'}

const router = new VueRouter({
    route: [
        {path:'/foo',component:Foo},
        {path:'/bar',component:Bar}
    ]
})

export default router