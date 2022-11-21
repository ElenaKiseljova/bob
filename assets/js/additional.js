(($) => {
  "use strict";

  document.addEventListener("DOMContentLoaded", () => {
    // Селект Стран + CF7
    const countryBlock = document.querySelector(".form__block--countries");
    if (countryBlock) {
      const countrySelect = countryBlock.querySelector(".form__select");
      const countryInput = countryBlock.querySelector('input[name="country"]');

      if (countrySelect && countryInput) {
        const countrySelectItems =
          countrySelect.querySelectorAll(".select__option");

        countrySelectItems.forEach((countrySelectItem) => {
          countrySelectItem.addEventListener("click", () => {
            const value = countrySelectItem.dataset.value ?? "";

            countryInput.value = value;
          });
        });
      }
    }

    // Селект маски Телефона
    const phoneBlock = document.querySelector(".form__block--phone");
    if (phoneBlock) {
      const phoneSelect = phoneBlock.querySelector(".form__select");
      const phoneInput = phoneBlock.querySelector('input[name="phone"]');
      const phoneCodeInput = phoneBlock.querySelector(
        'input[name="phone-code"]'
      );

      if (phoneSelect && phoneInput && phoneCodeInput) {
        $('input[name="phone"]').inputmask({
          mask: "99 999-99-99",
          greedy: !1,
          clearIncomplete: !0,
          placeholder: "_",
          rightAlign: !1,
          showMaskOnHover: !1,
          showMaskOnFocus: !0,
        });

        const phoneSelectItems =
          phoneSelect.querySelectorAll(".select__option");

        phoneSelectItems.forEach((phoneSelectItem) => {
          phoneSelectItem.addEventListener("click", () => {
            phoneInput.value = "";

            let attr = {
              greedy: !1,
              clearIncomplete: !0,
              placeholder: "X",
              rightAlign: !1,
              showMaskOnHover: !1,
              showMaskOnFocus: !0,
            };

            const code = phoneSelectItem.dataset.value ?? "";

            switch (code) {
              case "ua":
                attr["mask"] = "99 999-99-99";

                break;

              case "pl":
                attr["mask"] = "999-999-999";

                break;

              case "cz":
                attr["mask"] = "999-999-999";

                break;

              case "lt":
                attr["mask"] = "99 999-99-99";

                break;

              case "lv":
                attr["mask"] = "9999-9999";

                break;

              case "mda":
                attr["mask"] = "999-99-99";

                break;

              case "est":
                attr["mask"] = "99 999-999";

                break;

              case "rou":
                attr["mask"] = "999-999-999";

                break;

              case "bel":
                attr["mask"] = "999-999-999";

                break;

              case "hun":
                attr["mask"] = "9 999-9999";

                break;

              case "svk":
                attr["mask"] = "9 999-9999";

                break;

              default:
                break;
            }

            $('input[name="phone"]').inputmask(attr);

            const codeText = phoneSelectItem.textContent ?? "";

            phoneCodeInput.value = codeText.trim();

            console.log(phoneCodeInput.value);
          });
        });
      }
    }

    // Обработчик успешной отправки формы
    const wpcf7Elm = document.querySelector(".wpcf7");

    if (wpcf7Elm) {
      //wpcf7submit
      wpcf7Elm.addEventListener(
        "wpcf7mailsent",
        (evt) => {
          const curLang = document.querySelector(".lang__item.active");
          const formType = evt.target.querySelector("#form-type");

          if (curLang && formType) {
            const curLangCode = curLang.dataset.langCode.trim();
            const formTypeText = formType.textContent.trim();

            switch (curLangCode) {
              case "ua":
                if (formTypeText === "partners") {
                  gtag("event", "SendPartnersRequestUA", {});

                  // window.dataLayer.push({ 'event': 'SendPartnersRequestUA' });
                }

                if (formTypeText === "consumers") {
                  gtag("event", "SendCustomersRequestUA", {});

                  // window.dataLayer.push({ 'event': 'SendCustomersRequestUA' });
                }
                break;

              case "de":
                if (formTypeText === "partners") {
                  gtag("event", "SendPartnersRequestDE", {});

                  // window.dataLayer.push({ 'event': 'SendPartnersRequestDE' });
                }

                if (formTypeText === "consumers") {
                  gtag("event", "SendCustomersRequestDE", {});

                  // window.dataLayer.push({ 'event': 'SendCustomersRequestDE' });
                }
                break;

              case "cs":
                if (formTypeText === "partners") {
                  gtag("event", "SendPartnersRequestCZ", {});

                  // window.dataLayer.push({ 'event': 'SendPartnersRequestCZ' });
                }

                if (formTypeText === "consumers") {
                  gtag("event", "SendCustomersRequestCZ", {});

                  // window.dataLayer.push({ 'event': 'SendCustomersRequestCZ' });
                }
                break;

              case "pl":
                if (formTypeText === "partners") {
                  gtag("event", "SendPartnersRequestPL", {});

                  // window.dataLayer.push({ 'event': 'SendPartnersRequestPL' });
                }

                if (formTypeText === "consumers") {
                  gtag("event", "SendCustomersRequestPL", {});

                  // window.dataLayer.push({ 'event': 'SendCustomersRequestPL' });
                }
                break;

              case "en":
                if (formTypeText === "partners") {
                  gtag("event", "SendPartnersRequestEN", {});

                  // window.dataLayer.push({ 'event': 'SendPartnersRequestEN' });
                }

                if (formTypeText === "consumers") {
                  gtag("event", "SendCustomersRequestEN", {});

                  // window.dataLayer.push({ 'event': 'SendCustomersRequestEN' });
                }
                break;

              default:
                if (formTypeText === "partners") {
                  gtag("event", "SendPartnersRequestUA", {});

                  // window.dataLayer.push({ 'event': 'SendPartnersRequestUA' });
                }

                if (formTypeText === "consumers") {
                  gtag("event", "SendCustomersRequestUA", {});

                  // window.dataLayer.push({ 'event': 'SendCustomersRequestUA' });
                }

                console.log("default", curLangCode, formTypeText);
                break;
            }

            // console.log(curLangCode, formTypeText);
          }

          window.location.href = window.thanksPageUrl ?? "/";
        },
        false
      );
    }
  });
})(jQuery);
