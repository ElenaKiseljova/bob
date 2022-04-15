(($) => {
  'use strict';

  document.addEventListener('DOMContentLoaded', () => {
    // Селект Стран + CF7
    const countryBlock = document.querySelector('.form__block--countries');
    if (countryBlock) {
      const countrySelect = countryBlock.querySelector('.form__select');
      const countryInput = countryBlock.querySelector('input[name="country"]');

      if (countrySelect && countryInput) {
        const countrySelectItems = countrySelect.querySelectorAll('.select__option');

        countrySelectItems.forEach(countrySelectItem => {
          countrySelectItem.addEventListener('click', () => {
            const value = countrySelectItem.dataset.value ?? '';

            countryInput.value = value;
          });
        });
      }
    }

    // Селект маски Телефона
    const phoneBlock = document.querySelector('.form__block--phone');
    if (phoneBlock) {
      const phoneSelect = phoneBlock.querySelector('.form__select');
      const phoneInput = phoneBlock.querySelector('input[name="phone"]');

      if (phoneSelect && phoneInput) {
        $('input[name="phone"]').inputmask({
          mask: "99 999-99-99",
          greedy: !1,
          clearIncomplete: !0,
          placeholder: "_",
          rightAlign: !1,
          showMaskOnHover: !1,
          showMaskOnFocus: !0
        });

        const phoneSelectItems = phoneSelect.querySelectorAll('.select__option');

        phoneSelectItems.forEach(phoneSelectItem => {
          phoneSelectItem.addEventListener('click', () => {
            phoneInput.value = '';

            const code = phoneSelectItem.dataset.value ?? '';

            switch (code) {
              case 'ua':
                $('input[name="phone"]').inputmask({
                  mask: "99 999-99-99",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'pl':
                $('input[name="phone"]').inputmask({
                  mask: "999-999-999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'cz':
                $('input[name="phone"]').inputmask({
                  mask: "999-999-999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'lt':
                $('input[name="phone"]').inputmask({
                  mask: "99 999-99-99",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'lv':
                $('input[name="phone"]').inputmask({
                  mask: "9999-9999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'mda':
                $('input[name="phone"]').inputmask({
                  mask: "999-99-99",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'est':
                $('input[name="phone"]').inputmask({
                  mask: "99 999-999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'rou':
                $('input[name="phone"]').inputmask({
                  mask: "999-999-999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'bel':
                $('input[name="phone"]').inputmask({
                  mask: "999-999-999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'hun':
                $('input[name="phone"]').inputmask({
                  mask: "9 999-9999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              case 'svk':
                $('input[name="phone"]').inputmask({
                  mask: "9 999-9999",
                  greedy: !1,
                  clearIncomplete: !0,
                  placeholder: "_",
                  rightAlign: !1,
                  showMaskOnHover: !1,
                  showMaskOnFocus: !0
                });

                break;

              default:
                break;
            }
          });
        });
      }
    }

    // Обработчик успешной отправки формы
    const wpcf7Elm = document.querySelector('.wpcf7');

    if (wpcf7Elm) {
      //wpcf7submit
      wpcf7Elm.addEventListener('wpcf7mailsent', (event) => {
        window.location.href = window.thanksPageUrl ?? '/';
      }, false);
    }
  });
})(jQuery);