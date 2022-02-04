/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import VueRouter from 'vue-router'

Vue.use(VueRouter)


const someNews = Vue.component('some-f-news', require('./Pages/SomeNews.vue').default);
const newHome = Vue.component('home', require('./Pages/Home.vue').default);
const showPost = Vue.component('show-post', require('./Pages/showPost.vue').default);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('posts-component', require('./components/PostsComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 const routes = [
  { 
    path: '/someNews', 
    component: someNews,
    name: 'some-news' 
  },
  { 
    path: '/', 
    component: newHome,
    name: 'new-home' 
  },
  { 
    path: '/show/post/:id', 
    component: showPost,
    name: 'show-post' 
  },
  
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router
});
