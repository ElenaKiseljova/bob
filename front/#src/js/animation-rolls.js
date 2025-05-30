gsap.registerPlugin(MotionPathPlugin);
/* Apple */
let appleAnimation = gsap.timeline({
  scrollTrigger: {
    trigger: ".composition__section-1",
    scrub: true,
    start: "center 80%",
  },
});
appleAnimation
  .to(".composition__icon-3", {
    scale: 0.4,
    rotate: 750,
    duration: 10,
    transformOrigin: "center",
    motionPath: { path: "#rect", align: "#path" },
    scrub: true,
  })
  .to(
    ".fruits",
    {
      duration: 5,
      y: 350,
    },
    "-=10"
  )
  .to(
    ".composition__icon-3",
    {
      zIndex: 0,
      display: "none",
    },
    "-=1.7"
  );

/* strawberry */

let strawberryAnimation = gsap.timeline({
  scrollTrigger: {
    trigger: ".composition__section-1",
    scrub: true,
    start: "center 80%",
  },
});
strawberryAnimation
  .to(".composition__icon-5", {
    scale: 0.4,
    rotate: 250,
    duration: 5,
    transformOrigin: "center",
    motionPath: { path: "#rect2", align: "#path" },
  })
  .to(
    ".composition__icon-5",
    {
      zIndex: 0,
      display: "none",
    },
    "-=1.4"
  );

/* Pear */
/* MotionPathHelper.create(".composition__icon-5", {
  path: "#rect2",

  selected: true,
}); */
let pearAnimation = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".composition__section-1",
      scrub: true,
      start: "center 80%",
    },
  })
  .to(".composition__icon-4", {
    scale: 0.4,
    rotate: -450,
    duration: 5,
    transformOrigin: "center",
    motionPath: { path: "#rect3", align: "#path" },
  })
  .to(
    ".composition__icon-4",
    {
      display: "none",
    },
    "-=1.4"
  );

let clump = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".composition__section-2",

      scrub: true,
      start: "20% center",
      end: "bottom 50%",
    },
  })
  .to([".composition__icon-12", ".composition__icon-10", ".press"], {
    y: 280,
  })
  .to(
    ".composition__icon-11",
    {
      y: 87,
    },
    "-=0.6"
  );

let ovenTray = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".composition__section-3",

      scrub: true,
      start: "top center",
      end: "bottom 50%",
    },
  })
  .to(".composition__icon-15", {
    y: 380,
    rotate: 360,
  });

let roll = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".composition__section-4",

      scrub: true,
      start: "top center",
      end: "bottom 50%",
    },
  })
  .to(".composition__icon-18", {
    y: 380,
    rotate: 360,
  })
  .to(
    [".composition__icon-19", ".composition__icon-20"],
    {
      y: 380,
    },
    "-=0.5"
  );

let snailWithText = gsap
  .timeline({
    scrollTrigger: {
      trigger: ".composition__list--line",

      scrub: true,
    },
  })
  .to(".composition__snail-move", {
    x:
      window.innerWidth > 767
        ? document.querySelector(".composition__list--line").offsetWidth / 2 -
          100
        : 0,
  });
