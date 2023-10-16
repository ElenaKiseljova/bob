const inside = document.querySelector(".inside");

const play = document.querySelector(".play > .composition__block");
window.addEventListener("scroll", () => {
  if (window.scrollY > 500) {
    document.body.style.backgroundColor = "#fff";
  } else {
    document.body.style.backgroundColor = document.body.dataset.color;
  }

  if (play) {
    if (window.screenY > play.getBoundingClientRect().top) {
      document.body.style.backgroundColor = inside.dataset.color;
    }
  }
});
