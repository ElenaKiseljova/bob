if (window.innerWidth > 1023) {
  let options = {};
  let sliderToys = null;

  const slidesLength = document.querySelectorAll(
    ".play__slider .play__slide"
  ).length;

  const btns = document.querySelector(".play__btns");

  if (slidesLength === 1) {
    if (btns) {
      btns.style.display = "none";
    }

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
  } else if (slidesLength > 1) {
    if (btns) {
      btns.style.display = "";
    }

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

  // Init only when slider exist
  if (slidesLength) {
    sliderToys = new Swiper(".play__slider", options);
  }
}
