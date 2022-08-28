$(document).ready(function () {
  $('#changeLanguage').click(function (e) {
    if ($(this).is(':checked')) {
      $(this).val('vn');
    }
    else {
      $(this).val('en');
    }

    $(this).closest('#formLanguage').submit();
  });
});
