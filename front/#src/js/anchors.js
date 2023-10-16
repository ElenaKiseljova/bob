window.scrollSmooth = (container = document) => {
  let headerHeight = 67;

  const header = document.querySelector(".header");

  if (header) {
    headerHeight = header.offsetHeight;
  }

  const scrollToHash = (hash, offset) => {
    const scrollTarget = document.getElementById(hash);

    const elementPosition = scrollTarget.getBoundingClientRect().top;
    const offsetPosition = elementPosition - offset;
    /* 16.11.2022 */
    if (window.simplebar) {
      window.simplebar
        .getScrollElement()
        .scrollBy({ top: offsetPosition, behavior: "smooth" });
    } else {
      window.scrollBy({
        top: offsetPosition,
        behavior: "smooth",
      });
    }
  };

  const hrefAttributes = container.querySelectorAll("a[href*='#']");

  if (hrefAttributes.length > 0) {
    hrefAttributes.forEach((item) => {
      const href = item.href.split("#");

      const CURRENT_URL = window.location.origin + window.location.pathname;

      if (href[0] === CURRENT_URL) {
        item.addEventListener("click", (e) => {
          e.preventDefault();

          scrollToHash(href[1], headerHeight);
        });
      }
    });
  }
};

window.scrollSmooth();
