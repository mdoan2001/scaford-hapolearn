$(document).ready(function () {
  $('#jsLinkDescription').click(function () {
    removeActive();
    $(this).addClass('active');
  });

  $('#jsLinkProgram').click(function () {
    removeActive();
    $(this).addClass('active');
  });

  function removeActive() {
    $('.lesson-detail .title-link').each(function () {
      $(this).removeClass('active');
    });
  }
});
