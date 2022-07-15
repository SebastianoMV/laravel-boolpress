import Vue from "vue";

import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComp from './components/pages/HomeComp';
import AboutComp from './components/pages/AboutComp';
import ContactsComp from './components/pages/ContactsComp';
import BlogComp from './components/pages/BlogComp';
import ShowPost from './components/pages/ShowPost';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes:[
        {
            path: '/',
            name: 'home',
            component: HomeComp
        },
        {
            path: '/chi-siamo',
            name: 'about',
            component: AboutComp
        },
        {
            path: '/contatti',
            name: 'contacts',
            component: ContactsComp
        },
        {
            path: '/blog',
            name: 'blog',
            component: BlogComp
        },
        {
            path: '/show/:slug',
            name: 'show',
            component: ShowPost
        }
    ]
});

export default router;
