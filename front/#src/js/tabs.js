const tabs = document.querySelectorAll(".tabs__btn");
if (tabs.length > 0) {
  const selectOptions = document.querySelector(".select__options");
  const tabsParrent = document.querySelector(".tabs");
  const tabsContent = document.querySelectorAll(".tabs__content");

  function hideTabContent() {
    tabsContent.forEach((item) => {
      item.style.display = "none";
    });

    tabs.forEach((item) => {
      item.classList.remove("active");
    });
  }

  function showTabContent(i = 0) {
    tabsContent[i].style.display = "block";
    tabs[i].classList.add("active");
  }

  hideTabContent();
  showTabContent();

  tabsParrent.addEventListener("click", (e) => {
    const target = e.target;

    if (target.closest(".tabs__btn")) {
      tabs.forEach((item, i) => {
        if (target.closest(".tabs__btn") == item) {
          hideTabContent();
          showTabContent(i);
        }
      });
    }
  });

  if (selectOptions) {
    selectOptions.addEventListener("click", (e) => {
      const target = e.target.closest("li");
      if (!target) return;
      tabsContent.forEach((item, i) => {
        if (target.dataset.tab == item.dataset.content) {
          hideTabContent();
          showTabContent(i);
        }
      });
    });
  }
}
