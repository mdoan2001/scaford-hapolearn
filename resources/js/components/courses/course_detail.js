$(document).ready(function () {
  $('#jsLinkLesson').click(function () {
    removeActive();
    $('#jsOtherCourse').removeClass('hidden');
    $('#jsDescriptionCourse').removeClass('hidden');
    $('#jsInfoCourse').css("margin-top", "30px");;
    $(this).addClass('active');
  });

  $('#jsLinkTeacher').click(function () {
    removeActive();
    $('#jsOtherCourse').addClass('hidden');
    $('#jsDescriptionCourse').removeClass('hidden');
    $('#jsInfoCourse').css("margin-top", "30px");
    $(this).addClass('active');
  });

  $('#jsLinkReview').click(function () {
    removeActive();
    $('#jsOtherCourse').removeClass('hidden');
    $('#jsDescriptionCourse').addClass('hidden');
    $('#jsInfoCourse').css("margin-top", "0");
    $(this).addClass('active');
  });

  function removeActive() {
    $('.course-detail .title-link').each(function () {
      $(this).removeClass('active');
    });
  }
});
