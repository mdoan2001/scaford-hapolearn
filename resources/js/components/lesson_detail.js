$(document).ready(function () {
  if ($('.lesson-detail') != null) {
    $('#js-link-description').click(function () {
      removeActive();
      $('#js-description').addClass('active');
      $(this).addClass('title-link--active');
    });

    $('#js-link-document').click(function () {
      removeActive();
      $('#js-document').addClass('active');
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
