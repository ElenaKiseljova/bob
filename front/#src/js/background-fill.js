document.addEventListener("DOMContentLoaded", () => {
  // Changing BG color of body tag to colorBottom
  const composition = document.querySelector(
    ".composition > .composition__block"
  );

  // Changing BG color of body tag to some color in data-color attribute this section
  const compositionNext = document.querySelector(
    ".composition > .composition__next"
  );

  const checkScrollPosition = () => {
    if (window.scrollY > 500) {
      if (
        composition &&
        window.screenY > composition.getBoundingClientRect().top &&
        composition &&
        document.body.dataset.colorBottom
      ) {
        if (
          compositionNext &&
          compositionNext.dataset.color &&
          window.screenY > compositionNext.getBoundingClientRect().top
        ) {
          document.body.style.backgroundColor = compositionNext.dataset.color;
        } else {
          // Если фон "волны" в футере задан (data-color-bottom) и отличается от фона первого экрана (data-color) и пользователь проскролил composition секцию
          document.body.style.backgroundColor =
            document.body.dataset.colorBottom;
        }
      } else {
        // Если пользователь проскролил ниже первого экрана - переключаем фон страницы на белый
        document.body.style.backgroundColor = "#fff";
      }
    } else {
      // Если пользователь находится в пределах первого экрана - переключаем фон страницы на дефолтный цвет этой страницы (data-color)
      document.body.style.backgroundColor = document.body.dataset.color;
    }
  };

  checkScrollPosition();

  window.addEventListener("scroll", () => {
    checkScrollPosition();
  });
});
