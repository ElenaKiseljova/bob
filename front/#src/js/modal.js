const modalBtn = document.querySelectorAll(".unit__btn");
const modal = document.querySelector(".modal");
if (modal) {
  function setContentInModal(content) {
    const modalWrapper = modal.querySelector(".modal__main");
    modalWrapper.innerHTML = content;
  }

  modalBtn.forEach((item) => {
    item.addEventListener("click", () => {
      /* берем у дочернего элемента контент */
      const content = item.nextElementSibling?.innerHTML;
      if (content) {
        setContentInModal(content);
        modal.classList.add("modal--open");
      } else {
        return;
      }
    });
  });

  modal.addEventListener("click", (e) => {
    const target = e.target;
    if (target.closest(".modal__close") || target.closest(".modal__overlay")) {
      modal.classList.remove("modal--open");
      document.body.classList.remove("fixed");
    }
  });
}
