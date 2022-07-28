$(document).ready(function () {
  const filterBtn = $('.btn-filter');
  filterBtn.click(function () {
    $('.course-filter').toggleClass('active');
  });

  const radios = $('input[type="radio"]');
  radios.each(function () {
    $(this).click(function () {
      $('label.btn-active').removeClass('btn-active');
      const label = $('label[for=' + $(this).attr("id") + ']');
      label.addClass('btn-active');
    });
  });
});
