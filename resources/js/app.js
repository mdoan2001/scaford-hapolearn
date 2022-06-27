require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Slick slider
import 'slick-carousel/slick/slick';
require('./components/slider');

const app = new Vue({
    el: '#app',
});
