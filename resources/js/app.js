/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('shop-card', require('./components/ShopCard.vue').default);
Vue.component('shop-favory', require('./components/ShopFavory.vue').default);
Vue.component('shop-trader', require('./components/ShopTrader.vue').default);
Vue.component('shop-user', require('./components/ShopUser.vue').default);
Vue.component('promotion-card', require('./components/PromotionCard.vue').default);
Vue.component('promotion-user', require('./components/PromotionUser.vue').default);
Vue.component('create-promotion', require('./components/CreatePromotion.vue').default);
Vue.component('scan-qrcode', require('./components/ScanQRcode.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
