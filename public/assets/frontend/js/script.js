'use strict';
// Carousel (Slider) manual options
var slider = document.querySelector('#slider');
var carousel = new bootstrap.Carousel(slider, {
  //Time duration
  interval: 10 * 1000,
  // hovering over the carousel won't pause it.
  pause: false,
});
$(function () {
  // Sidebar Toggle
  $('.sidebar__icon').on('click', function (e) {
    $('.sidebar').toggleClass('sidebar-active');
    $(this).toggleClass('icon-active');
  });

  $('#product-slider').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: '.prev-arrow',
    nextArrow: '.next-arrow',
    rtl: true,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
  });

  $(window).scroll(function () {
    $('.sidebar').removeClass('sidebar-active');
    $('.sidebar__icon').removeClass('icon-active');

    if ($(this).scrollTop() >= $('.navbar').height()) {
      $('.scroll-top').fadeIn(200);
      $('.navbar').css('background-color', '#024ba3');
      $('.navbar').css('border-bottom', '1px solid var(--color-secondary)');
      $('.navbar').addClass('shadow');
    } else {
      $('.scroll-top').fadeOut(200);
      $('.navbar').css('background-color', 'unset');
      $('.navbar').css('border-bottom', 'unset');
      $('.navbar').removeClass('shadow');
    }
  });

  $('.scroll-top').click(function () {
    $('body,html').animate(
      {
        scrollTop: 0,
      },
      100
    );
  });
});
