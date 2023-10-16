const cards = document.querySelectorAll(".content__wrapper");
const toys = document.querySelectorAll(".toys__wrapper");

if (cards) {
  cards.forEach((item) => {
    item.addEventListener("click", (e) => {
      item.classList.toggle("active");
    });
  });
}
if (toys) {
  toys.forEach((item) => {
    item.addEventListener("click", (e) => {
      item.classList.toggle("active");
    });
  });
}
