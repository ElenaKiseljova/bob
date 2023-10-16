gsap.registerPlugin(ScrollTrigger);

const locoScroll = new LocomotiveScroll({
  el: document.querySelector(".product__wrapper"),
  smooth: false,
});

ScrollTrigger.scrollerProxy(".product__wrapper", {
  scrollTop(value) {
    return arguments.length
      ? locoScroll.scrollTo(value, 0, 0)
      : locoScroll.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      top: 0,
      left: 0,
      width: window.innerWidth,
      height: window.innerHeight,
    };
  },
  pinType: document.querySelector(".product__wrapper").style.transform
    ? "transform"
    : "fixed",
});

/*gsap.to("body", {
  "--color": "#F16676",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-1",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});

 gsap.to("body", {
  "--color": "#FDDA64",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-2",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#FEBC11",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-3",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#FF8300",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-4",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#F173AC",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-5",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#344A9A",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-6",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#9D207B",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-7",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#FF6C01",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-8",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
gsap.to("body", {
  "--color": "#FFCF2E",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".block-9",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
}); */

const blocks = document.querySelectorAll(".product__block");
if (blocks) {
  blocks.forEach((item) => {
    console.log(item);
    gsap.to("body", {
      "--color": item.querySelector(".product__item").dataset.scrollcolor,
      immediateRender: false,
      scrollTrigger: {
        trigger: item,
        scroller: ".product__wrapper",
        scrub: true,
        start: "top center",
        end: "+=100%",
      },
    });
  });
}
gsap.to("body", {
  "--color": "#FFEB95",
  immediateRender: false,
  scrollTrigger: {
    trigger: ".product__new",
    scroller: ".product__wrapper",
    scrub: true,
    start: "top center",
    end: "+=100%",
  },
});
locoScroll.on("scroll", ScrollTrigger.update);
ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
ScrollTrigger.refresh();
