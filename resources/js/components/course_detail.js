$(document).ready(function () {
  if ($('.course-detail') != null) {
    $('#js-link-lessons').click(function () {
      removeActive();
      $('#js-lesson').addClass('active');
      $('#js-other-course').removeClass('hidden');
      $('#js-description-course').removeClass('hidden');
      $('#js-info-course').css("margin-top", "30px");;
      $(this).addClass('active');
    });

    $('#js-link-teacher').click(function () {
      removeActive();
      $('#js-teacher').addClass('active');
      $('#js-other-course').addClass('hidden');
      $('#js-description-course').removeClass('hidden');
      $('#js-info-course').css("margin-top", "30px");
      $(this).addClass('active');
    });

    $('#js-link-reviews').click(function () {
      removeActive();
      $('#js-review').addClass('active');
      $('#js-other-course').removeClass('hidden');
      $('#js-description-course').addClass('hidden');
      $('#js-info-course').css("margin-top", "0");
      $(this).addClass('active');
    });

    function removeActive() {
      $('.course-detail .group-item').each(function () {
        $(this).removeClass('active');
      });

      $('.course-detail .title-link').each(function () {
        $(this).removeClass('active');
      });
    }
  }
});

