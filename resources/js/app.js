require('./bootstrap');
window.Vue = require('vue').default;
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import 'slick-carousel/slick/slick';
require('./components/slider');
require('./components/select2');
require('./components/courses/filter_course');
require('./components/courses/course_detail');
require('./components/courses/vote_star');
require('./components/courses/show_comment');
require('./components/courses/review');
require('./components/profile/upload');
require('./components/courses/learn_lesson');
require('./components/lessons/lesson_detail');
require('./components/lessons/preview');
require('./components/lessons/learn-lesson');

const app = new Vue({
 el: '#app',
});
