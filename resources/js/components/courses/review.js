$(document).ready(function () {

  $(document).click(function () {
    var container = $("#comment");
    if (!container.is(event.target) && !container.has(event.target).length) {
      $('.edit-sub').hide();
    }
  });

  $('.js-btn-review').on('click', function (e) {
    $(this).closest('.comment').find(".reply-input").focus();;
  });

  $('.js-btn-reply').on('click', function (e) {
    $(this).closest('.reply').find(".reply-input").focus();;
  });

  $('.js-btn-edit-review').on('click', function (e) {
    e.stopPropagation();
    $(this).closest('.comment').find(".comment-content").toggle();
    $(this).closest('.comment').find(".form-edit-comment").toggle();
    $(this).closest('.comment').find(".edit-comment").focus();
    $(this).closest('.comment').find(".edit-comment").text($(this).closest('.comment').find(".comment-content").text());
  })

  $('.js-btn-edit-reply').on('click', function (e) {
    e.stopPropagation();
    $(this).closest('.reply').find(".reply-content").toggle();
    $(this).closest('.reply').find(".form-edit-reply").toggle();
    $(this).closest('.reply').find(".edit-reply").focus();
    $(this).closest('.reply').find(".edit-reply").text($(this).closest('.reply').find(".reply-content").text());
  })
});
