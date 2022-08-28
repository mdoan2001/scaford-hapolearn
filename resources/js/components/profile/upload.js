$(document).ready(function () {
  $('#jsUploadBtn').on('click', function () {
    $('#jsUploadInput').trigger('click');
  })

  $('#jsUploadInput').change((function () {
    const userAvatar = $('#userAvatar');
    userAvatar.attr('src', URL.createObjectURL(event.target.files[0]));
    userAvatar.css('border', '2px solid #007bff');
  }))
});
