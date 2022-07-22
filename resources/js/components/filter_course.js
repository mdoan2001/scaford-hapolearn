$(document).ready(function () {
    //ẩn hiện sub filter
    const btn_filter = document.querySelector('.btn-filter');
    btn_filter.addEventListener('click', function (e) {
        document.querySelector('.course-filter').classList.toggle('active');
    });

    //Xứ lý ô select
    let selects = document.querySelectorAll('.course-home .select');
    for (let i = 0; i < selects.length; i++) {
        let select = selects[i];
        let input = select.querySelector('input');
        let select_content = select.querySelector('.select-content');
        let select_items = select.querySelectorAll('.select-item');

        for (let j = 0; j < select_items.length; j++) {
            let item = select_items[j];
            item.onclick = function () {
                input.value = item.innerText;
            }
        }

        select.onclick = function () {
            select_content.classList.toggle('active');
        }
    }

    //xử lý button: Mới, cũ
    const radios = document.querySelectorAll('input[type="radio"]');
    // let radio_checked;
    //tìm radio đang checked
    for (let i = 0; i < radios.length; i++) {
        radio = radios[i];
        radio.onclick = function () {
            document.querySelector('label.btn-active').classList.remove('btn-active');
            const label = document.querySelector('label[for=' + this.id + ']');
            label.classList.add('btn-active');
        }
    }

    //avatar
    const avatars = document.querySelectorAll('.course-main img');
    for (let i = 0; i < avatars.length; i++) {
        const avatar = avatars[i];
        // console.log(avatar);
        avatar.style.height = avatar.offsetWidth + 'px';
        console.log(avatar.offsetWidth);
        console.log(avatar.offsetHeight);
    }
});


