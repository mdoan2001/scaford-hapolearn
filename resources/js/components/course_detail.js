$(document).ready(function () {
    const course_detail = $('.course-detail');
    if (course_detail != null) {
        const lessonBtn = $('#js-link-lessons');
        const teacherBtn = $('#js-link-teacher');
        const reviewBtn = $('#js-link-reviews');
        const other_course = $('#js-other-course');
        const des_course = $('#js-description-course');
        const info_course = $('#js-info-course');

        const lesson = $('#js-lesson');
        const teacher = $('#js-teacher');
        const review = $('#js-review');

        lessonBtn.click(function() {
            removeActive();
            lesson.addClass('active');
            other_course.removeClass('hidden');
            des_course.removeClass('hidden');
            info_course.css("margin-top", "30px");;
            lessonBtn.addClass('title-link--active');
        });

        teacherBtn.click(function() {
            removeActive();
            teacher.addClass('active');
            other_course.addClass('hidden');
            des_course.removeClass('hidden');
            info_course.css("margin-top", "30px");
            teacherBtn.addClass('title-link--active');
        });

        reviewBtn.click(function() {
            removeActive();
            review.addClass('active');
            other_course.removeClass('hidden');
            des_course.addClass('hidden');
            info_course.css("margin-top", "0");
            reviewBtn.addClass('title-link--active');
        });

        function removeActive() {
            $('.course-detail .group-item').each(function () {
                $(this).removeClass('active');
            });

            $('.course-detail .title-link').each(function () {
                $(this).removeClass('title-link--active');
            });
        }
    }
});

