const insideList = document.querySelector(".inside__list");
const insideBtns = document.querySelectorAll(".inside__btn");
if (insideList && insideBtns) {
  insideBtns.forEach((element) => {
    element.addEventListener("click", () => {
      const parent = element.parentNode;
      parent.classList.toggle("active");
    });
  });
}
