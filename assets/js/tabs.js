document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelectorAll('.tabs__btn').length > 0) {
    const t = document.querySelectorAll('.select__option'),
      e = document.querySelectorAll('.tabs__btn'),
      c = document.querySelectorAll('.tabs__content'),
      a = (t) => [].find.call(c, (e) => e.dataset.content === t),
      n = (t) => {
        const e = a(t);
        e &&
          (c.forEach((t) => t.classList.remove('active')),
          e.classList.add('active'));
      };
    t.forEach((t) => {
      t.addEventListener('click', () => {
        n(t.dataset.tab);
      });
    }),
      e.forEach((t) => {
        t.addEventListener('click', () => {
          e.forEach((t) => t.classList.remove('active')),
            t.classList.add('active'),
            n(t.dataset.tab);
        });
      });
  }
});
