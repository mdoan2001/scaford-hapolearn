$(document).ready(function () {
  $('#js-leave-review-btn').on('click', function () {
    if ($(this).hasClass('done')) {
      $('#js-leave-review').on('submit', function (e) {
        e.preventDefault();
      });
    }
  });
});
