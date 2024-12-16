document.addEventListener('DOMContentLoaded', () => {
 
  const composition = document.querySelector(
    '.composition > .composition__block'
  );

  const checkScrollPosition = () => {
    if (window.scrollY > 500) {
      if (composition && window.screenY > composition.getBoundingClientRect().top && document.body.dataset.colorBottom) {
        // Если фон "волны" в футере задан (data-color-bottom) и отличается от фона первого экрана (data-color) и пользователь проскролил composition секцию
        document.body.style.backgroundColor = document.body.dataset.colorBottom;
      } else {
        // Если пользователь проскролил ниже первого экрана - переключаем фон страницы на белый
        document.body.style.backgroundColor = '#fff';
      }
      
    } else {
      // Если пользователь находится в пределах первого экрана - переключаем фон страницы на дефолтный цвет этой страницы (data-color)
      document.body.style.backgroundColor = document.body.dataset.color;
    }

    
  };

  checkScrollPosition();

  window.addEventListener('scroll', () => {
    checkScrollPosition();
  });
});
