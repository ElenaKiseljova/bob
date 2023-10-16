/* const select1 = new CustomSelect("#select-1");
const select2 = new CustomSelect("#select-2");
const select3 = new CustomSelect("#select-3");
const select4 = new CustomSelect("#select-4");
const select5 = new CustomSelect("#select-5"); */

for (let index = 1; index < 6; index++) {
  const select = document.querySelector(`#select-${index}`);

  if (select) {
    const selectInit = new CustomSelect(`#select-${index}`);
  }
}
