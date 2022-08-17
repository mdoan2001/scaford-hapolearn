$(document).ready(function () {
  $("#myImg").click(function (e) {
    $("#myModal").css('display', 'flex');
    $("#myModalImg").attr('src', $(this).attr('src'));
  })

  $("#myModalImg").click(function (e) {
    e.stopPropagation();
  });

  $("#myModal").click(function(){
    $(this).css('display', 'none');
  })
})
