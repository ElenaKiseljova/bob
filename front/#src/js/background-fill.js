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
    if (!document.body.classList.contains("observed")) {
      if (window.scrollY > 500) {
        if (
          composition &&
          window.screenY > composition.getBoundingClientRect().top &&
          document.body.dataset.colorBottom
        ) {
          // Если фон "волны" в футере задан (data-color-bottom) и отличается от фона первого экрана (data-color) и пользователь проскролил composition секцию
          document.body.style.backgroundColor =
            document.body.dataset.colorBottom;
        } else {
          // Если пользователь проскролил ниже первого экрана - переключаем фон страницы на белый
          document.body.style.backgroundColor = "#fff";
        }
      } else {
        // Если пользователь находится в пределах первого экрана - переключаем фон страницы на дефолтный цвет этой страницы (data-color)
        document.body.style.backgroundColor = document.body.dataset.color;
      }
    }
  };

  checkScrollPosition();

  window.addEventListener("scroll", () => {
    checkScrollPosition();
  });

  // Init Observer
  const options = {};

  const callback = (entries, observer) => {
    entries.forEach((entry) => {
      // Toggle class when element is in view
      entry.target.classList.toggle("enter", entry.isIntersecting);

      if (
        entry.target.classList.contains("enter") &&
        entry.target.dataset.color
      ) {
        document.body.classList.add("observed");

        document.body.style.backgroundColor = compositionNext.dataset.color;
      } else {
        document.body.classList.remove("observed");
      }
    });
  };

  const observer = new IntersectionObserver(callback, options);

  if (compositionNext) {
    observer.observe(compositionNext);
  }
});
