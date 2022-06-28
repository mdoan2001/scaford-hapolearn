require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import 'slick-carousel/slick/slick';
require('./components/slider');

const app = new Vue({
    el: '#app',
});
