const swiper = new Swiper(".swiper-js", {
  loop: true,
  // Navigation arrows
  speed: 1000,
  /* autoplay: {
    delay: 10000,
  }, */

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    clickable: true,
    el: ".swiper-pagination",
  },
  breakpoints: {
    0: {
      allowTouchMove: true,
    },
    1023: {
      allowTouchMove: false,
    },
  },
});
