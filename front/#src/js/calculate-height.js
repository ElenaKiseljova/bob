const appHeight = () => {
  const doc = document.documentElement;
  doc.style.setProperty("--app-height", `${window.innerHeight}px`);
};
window.addEventListener("resize", appHeight);
appHeight();

/* при нажатии на один из них будет сворачиватся меню */
const mass = document.querySelectorAll(".contact-btn");
if (mass) {
  mass.forEach((item) => {
    item.addEventListener("click", () => {
      mobileNav.classList.remove("--show");
      document.body.classList.remove("active");
    });
  });
}
