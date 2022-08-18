$(document).ready(function () {
  $('.js-lesson-btn').click(function (e) {
    if (!$(this).closest('.js-lesson').hasClass('is-joined')) {
      e.preventDefault();
    }
  });
});
