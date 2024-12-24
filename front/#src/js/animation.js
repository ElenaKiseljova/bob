const containers = gsap.utils.toArray(".product .section ");
const firstSection = document.querySelector(".product .section-first");
const btnMove = document.querySelector(".product__arrow");

containers.forEach((container, index) => {
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      pin: true,
      scrub: true,
      pinSpacing: false,

      onEnter: (self) => container.classList.add("active"),
      onLeave: (self) => container.classList.remove("active"),
      onEnterBack: (self) => container.classList.add("active"),
      onLeaveBack: (self) => container.classList.remove("active"),
    },
  });
});

let tl = gsap.timeline({
  scrollTrigger: {
    trigger: firstSection,
    pin: true,
    scrub: true,
    pinSpacing: false,

    id: "123",
    /* onUpdate: (self) => {
      firstSection.style.opacity = 1;
    }, */
    onEnter: (self) => firstSection.classList.add("active"),
    onLeave: (self) => firstSection.classList.remove("active"),
    onEnterBack: (self) => firstSection.classList.add("active"),
    /*  onLeaveBack: (self) => firstSection.classList.remove("active"), */
  },
});

const colors = document.querySelectorAll(".product .section-js");
const parallaxItem = gsap.utils.toArray(".parallax");
parallaxItem.forEach((item) => {
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: item.parentElement,
      start: "center center",

      pinSpacing: false,
      scrub: true,
    },
  });
  tl.to(item, {
    yPercent: item.dataset.y,
    xPercent: item.dataset.x ? item.dataset.x : 0,
  });
});

gsap
  .timeline({
    scrollTrigger: {
      trigger: ".product__new",
      start: "top 30%",
      scrub: true,
    },
  })
  .to(".product-new__snail-move", {
    x:
      -document.querySelector(".product__new .product__text").offsetWidth / 2 +
      80,
    ease: "ease",
  });
gsap
  .timeline({
    scrollTrigger: {
      trigger: ".product__new",
      start: "center center",
      scrub: true,
    },
  })
  .to(".product__descr", {
    y:
      window.innerWidth > 767
        ? document.querySelector(".product__new  ").offsetHeight / 3
        : document.querySelector(".product__new  ").offsetHeight / 4,
    duration: 2,
  });
btnMove.addEventListener("click", () =>
  window.scrollBy({ top: 1200, behavior: "smooth" })
);
