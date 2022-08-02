require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import 'slick-carousel/slick/slick';
require('./components/slider');
require('./components/select2');
require('./components/courses/filter_course');
require('./components/courses/course_detail');
require('./components/courses/vote_star');
require('./components/courses/leave_review');
require('./components/courses/show_comment');

const app = new Vue({
 el: '#app',
});
