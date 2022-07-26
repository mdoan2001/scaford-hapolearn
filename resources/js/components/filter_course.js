$(document).ready(function () {
  //ẩn hiện sub filter
  const btn_filter = document.querySelector('.btn-filter');
  btn_filter.addEventListener('click', function (e) {
    document.querySelector('.course-filter').classList.toggle('active');
  });

  //xử lý button: Mới, cũ
  const radios = document.querySelectorAll('input[type="radio"]');
  //tìm radio đang checked
  for (let i = 0; i < radios.length; i++) {
    radio = radios[i];
    radio.onclick = function () {
      document.querySelector('label.btn-active').classList.remove('btn-active');
      const label = document.querySelector('label[for=' + this.id + ']');
      label.classList.add('btn-active');
    }
  }
});
