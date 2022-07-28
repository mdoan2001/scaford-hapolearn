$(document).ready(function () {
    const lesson_detail = $('.lesson-detail');
    if (lesson_detail != null) {
        const descriptionBtn = $('#js-link-description');
        const documentBtn = $('#js-link-document');

        const description = $('#js-description');
        const document = $('#js-document');

        descriptionBtn.click(function () {
            removeActive();
            description.addClass('active');
            $(this).addClass('title-link--active');
        });

        documentBtn.click(function () {
            removeActive();
            document.addClass('active');
            $(this).addClass('title-link--active');
        });

        function removeActive() {
            $('.lesson-detail .group-item').each(function () {
                $(this).removeClass('active');
            });

            $('.lesson-detail .title-link').each(function () {
                $(this).removeClass('title-link--active');
            });
        }
    }
});

