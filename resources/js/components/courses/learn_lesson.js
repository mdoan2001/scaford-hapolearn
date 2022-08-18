$(function () {
  $('.js-lesson-name').on('click', function () {
    $(this).closest('.lesson').find('.js-lesson-btn').trigger('click');
  })
});
