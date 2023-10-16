if (window.innerWidth > 1023) {
  let options = {};

  const btns = document.querySelector(".play__btns");
  if (document.querySelectorAll(".play__slider .play__slide").length == 1) {
    btns.style.display = "none";
    options = {
      loop: false,
      navigation: false,
      spaceBetween: 30,
      autoHeight: true,
      speed: 600,
      breakpoints: {
        0: {
          allowTouchMove: true,
        },
        1023: {
          allowTouchMove: false,
        },
      },
    };
  } else {
    btns.style.display = "";
    options = {
      loop: true,
      navigation: {
        nextEl: ".play__btn--next",
        prevEl: ".play__btn--prev",
      },
      spaceBetween: 30,
      autoHeight: true,
      speed: 600,
      breakpoints: {
        0: {
          allowTouchMove: true,
        },
        1023: {
          allowTouchMove: false,
        },
      },
    };
  }

  const sliderToys = new Swiper(".play__slider", options);
}
