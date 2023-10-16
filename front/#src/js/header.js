const headerFixed = document.querySelector(".header");
const languagesBtn = document.querySelector(".lang__btn");

const rolls = [
  ".fruit-rolls__image--4",
  ".fruit-rolls__image--6",
  ".fruit-rolls__image--7",
];
const snailSkate = document.querySelector(".about__animation--1");

window.addEventListener("click", (e) => {
  const target = e.target.closest(".lang__btn");
  if (target) {
    languagesBtn.parentNode.classList.toggle("active");
  } else {
    languagesBtn.parentNode.classList.remove("active");
  }
});
window.addEventListener("scroll", () => {
  /* Фиксация  меню */
  /* Если открыт выдор языка в десктопе */
  if (window.scrollY > 0) {
    headerFixed.classList.add("active");
    languagesBtn.parentNode.classList.remove("active");
  } else {
    headerFixed.classList.remove("active");
  }

  if (window.scrollY > 1300) {
    rolls.forEach((item) => {
      document.querySelector(item)?.classList.add("active");
    });
  }

  if (window.scrollY > 500) {
    snailSkate?.classList.add("active");
  }
});

/* 16.11.2022 */
document.addEventListener("DOMContentLoaded", () => {
  const landingPage = document.querySelector(".landing-page");
  if (landingPage) {
    const simp = new SimpleBar(landingPage, {
      autoHide: false,
    });
    window.simplebar = simp;
    simp.getScrollElement().addEventListener("scroll", function (e) {
      const { scrollTop } = e.target;

      scrollTop //scrollTop > 0
        ? headerFixed.classList.add("active")
        : headerFixed.classList.remove("active");
    });
  }
});
