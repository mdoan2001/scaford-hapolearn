$(document).ready(function () {
  const items = document.querySelectorAll('.group .group-item');
  const links = document.querySelectorAll('.group .title-link');
  const lessonBtn = document.getElementById('js-link-lessons');
  const teacherBtn = document.getElementById('js-link-teacher');
  const reviewBtn = document.getElementById('js-link-reviews');
  const other_course = document.getElementById('js-other-course');
  const des_course = document.getElementById('js-description-course');
  const info_course = document.getElementById('js-info-course');

  const lesson = document.getElementById('js-lesson');
  const teacher = document.getElementById('js-teacher');
  const review = document.getElementById('js-review');

  lessonBtn.onclick = function () {
    removeActive();
    lesson.classList.add('active');
    other_course.classList.remove('hidden');
    des_course.classList.remove('hidden');
    info_course.style.marginTop = 30 + 'px';
    this.classList.add('title-link--active');
  }

  teacherBtn.onclick = function () {
    removeActive();
    teacher.classList.add('active');
    other_course.classList.add('hidden');
    des_course.classList.remove('hidden');
    info_course.style.marginTop = 30 + 'px';
    this.classList.add('title-link--active');
  }

  reviewBtn.onclick = function () {
    removeActive();
    review.classList.add('active');
    other_course.classList.remove('hidden');
    des_course.classList.add('hidden');
    info_course.style.marginTop = 0;
    this.classList.add('title-link--active');
  }

  function removeActive() {
    for (let i = 0; i < items.length; i++) {
      const item = items[i];
      item.classList.remove('active');
    }

    for (let i = 0; i < links.length; i++) {
      const link = links[i];
      link.classList.remove('title-link--active');
    }
  }
});

