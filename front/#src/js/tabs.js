document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('.tabs__btn');
  if (tabs.length > 0) {
    const selectOptions = document.querySelectorAll('.select__option');
    const tabBtns = document.querySelectorAll('.tabs__btn');
    const tabContents = document.querySelectorAll('.tabs__content');

    const getTabContent = (index) =>
      [].find.call(
        tabContents,
        (tabContent) => tabContent.dataset.content === index
      );

    const toggleTabContent = (index) => {
      const tabContent = getTabContent(index);

      if (tabContent) {
        tabContents.forEach((tabC) => tabC.classList.remove('active'));

        tabContent.classList.add('active');
      }
    };

    selectOptions.forEach((selectOption) => {
      selectOption.addEventListener('click', () => {
        toggleTabContent(selectOption.dataset.tab);
      });
    });

    tabBtns.forEach((tabBtn) => {
      tabBtn.addEventListener('click', () => {
        tabBtns.forEach((tabB) => tabB.classList.remove('active'));
        tabBtn.classList.add('active');

        toggleTabContent(tabBtn.dataset.tab);
      });
    });
  }
});

