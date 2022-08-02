$(document).ready(function () {
  $('#jsLeaveReviewBtn').on('click', function () {
    if ($(this).hasClass('done')) {
      $('#jsLeaveReview').on('submit', function (e) {
        e.preventDefault();
      });
    }
  });
});
