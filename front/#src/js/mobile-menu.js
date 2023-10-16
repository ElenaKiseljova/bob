const hamburgerBtn = document.querySelector(".hamburger__btn");
const headerOverlay = document.querySelector(".header__overlay");
const headerInner = document.querySelector(".header__inner");
const headerLangBtnClose = document.querySelector(".lang__close");
const headerWrapperBtnClose = document.querySelector(".header__close--nav");
const headerLanguage = document.querySelector(".header__lang");

hamburgerBtn.addEventListener("click", () => {
  headerInner.classList.add("active");
  document.body.classList.add("fixed");
});

headerWrapperBtnClose.addEventListener("click", () => {
  headerInner.classList.remove("active");
  document.body.classList.remove("fixed");
});

headerLangBtnClose.addEventListener("click", () => {
  headerLanguage.classList.remove("active");
});

headerOverlay.addEventListener("click", (e) => {
  const target = e.target.closest(".header__wrapper");
  if (target) return;
  headerInner.classList.remove("active");
  document.body.classList.remove("fixed");
});
