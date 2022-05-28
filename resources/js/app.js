require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('product-add', require('./components/products/ProductAdd.vue').default);



const app = new Vue({
    el: '#app',
});