$(document).ready(function () {
    $('#logoutBtn').click(function () {
        localStorage.removeItem("tab_course");
        localStorage.removeItem("tab_lesson");
    })

    $('#loginBtn').click(function () {
        localStorage.removeItem("tab_course");
        localStorage.removeItem("tab_lesson");
    })

    $('#jsLinkLesson').click(function () {
        localStorage.setItem('tab_course', 'lesson');
    })

    $('#jsLinkTeacher').click(function () {
        localStorage.setItem('tab_course', 'teacher');
    })

    $('#jsLinkReview').click(function () {
        localStorage.setItem('tab_course', 'review');
    })

    $('#jsLinkDescription').click(function () {
        localStorage.setItem('tab_lesson', 'description');
    })

    $('#jsLinkProgram').click(function () {
        localStorage.setItem('tab_lesson', 'program');
    })

    switch (localStorage.getItem('tab_course')) {
        case 'teacher':
            $('.course-detail .title-link').attr('aria-expanded', 'false');
            $('.course-detail .title-link').removeClass('active');
            $('.course-detail .group-item').removeClass('show');
            $('#jsLinkTeacher').attr('aria-expanded', 'true');
            $('#jsLinkTeacher').addClass('active');
            $('#collapseTeacher').addClass('show');
            break;

        case 'review':
            $('.course-detail .title-link').attr('aria-expanded', 'false');
            $('.course-detail .title-link').removeClass('active');
            $('.course-detail .group-item').removeClass('show');
            $('#jsLinkReview').attr('aria-expanded', 'true');
            $('#jsLinkReview').addClass('active');
            $('#collapseReview').addClass('show');
            break;

        default:
            $('.course-detail .title-link').attr('aria-expanded', 'false');
            $('.course-detail .title-link').removeClass('active');
            $('.course-detail .group-item').removeClass('show');
            $('#jsLinkLesson').attr('aria-expanded', 'true');
            $('#jsLinkLesson').addClass('active');
            $('#collapseLesson').addClass('show');
            break;
    }

    switch (localStorage.getItem('tab_lesson')) {
        case 'program':
            $('.lesson-detail .title-link').attr('aria-expanded', 'false');
            $('.lesson-detail .title-link').removeClass('active');
            $('.lesson-detail .group-item').removeClass('show');
            $('#jsLinkProgram').attr('aria-expanded', 'true');
            $('#jsLinkProgram').addClass('active');
            $('#collapseProgram').addClass('show');
            break;

        default:
            $('.lesson-detail .title-link').attr('aria-expanded', 'false');
            $('.lesson-detail .title-link').removeClass('active');
            $('.lesson-detail .group-item').removeClass('show');
            $('#jsLinkDescription').attr('aria-expanded', 'true');
            $('#jsLinkDescription').addClass('active');
            $('#collapseDescription').addClass('show');
            break;
    }
})
