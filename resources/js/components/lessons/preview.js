$(document).ready(function () {
  $('.js-program-name').on('click', function (e) {
    $(this).closest('.program').find('.js-program-preview').trigger('click');
  })
});
