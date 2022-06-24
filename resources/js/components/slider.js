
$(document).ready(function() {
    $('.slider').slick({
        slidesToShow: 2,
        prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        responsive: [{
            breakpoint: 769,
            settings: {
              slidesToShow: 1,
            }
          }]
    });
});
