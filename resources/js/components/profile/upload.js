$(document).ready(function () {
  $('#jsUploadBtn').on('click', function () {
    $('#jsUploadInput').trigger('click');
  })

  $('#jsUploadInput').change((function () {
    $('#userAvatar').attr('src', URL.createObjectURL(event.target.files[0]));
  }))
});
