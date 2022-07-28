require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import 'slick-carousel/slick/slick';
require('./components/slider');
require('./components/select2');
require('./components/filter_course');
require('./components/course_detail');
require('./components/lesson_detail');

const app = new Vue({
    el: '#app',
});
