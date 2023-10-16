const accordionItem = document.querySelectorAll(".accordion__item");

accordionItem.forEach((item) => {
  item.addEventListener("click", (e) => {
    const target = e.target;
    if (target.closest(".accordion__btn")) {
      const element = item.querySelector(".accordion__bottom");
      if (element.style.maxHeight) {
        element.style.maxHeight = null;
      } else {
        element.style.maxHeight = element.scrollHeight + "px";
      }
      item.classList.toggle("active");
    }
  });
});
/* for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
 */
