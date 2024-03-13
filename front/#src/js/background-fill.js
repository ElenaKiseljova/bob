const inside = document.querySelector('.inside');

const composition = document.querySelector(
  '.composition > .composition__block'
);
window.addEventListener('scroll', () => {
  if (window.scrollY > 500) {
    document.body.style.backgroundColor = '#fff';
  } else {
    document.body.style.backgroundColor = document.body.dataset.color;
  }

  if (inside && composition) {
    if (window.screenY > composition.getBoundingClientRect().top) {
      document.body.style.backgroundColor = inside.dataset.color;
    }
  }
});
