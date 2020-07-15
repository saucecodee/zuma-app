gsap.fromTo(".grey-box", {
     duration: 1,
     opacity: 0.3,
     scale: 0.7
}, {
     opacity: 1,
     scale: 1
});


gsap.fromTo(".grey-box p", {
     duration: 1,
     opacity: 0,
     y: 18
}, {
     delay: 0.5,
     opacity: 1,
     y: 0
});

gsap.fromTo(".hero .s-title", {
     duration: 1,
     opacity: 0,
     x: -50
}, {
     delay: 0.3,
     opacity: 1,
     x: 0
});

gsap.fromTo(".hero-phones .img-1", {
     duration: 1,
     opacity: 0,
     x: 50
}, {
     delay: 0.8,
     opacity: 1,
     x: 0
});

gsap.fromTo(".hero-phones .img-2", {
     duration: 1,
     opacity: 0,
     x: 50
}, {
     delay: 1,
     opacity: 1,
     x: 0
});

// gsap.fromTo(".hero .de-1", {
//      duration: 0.6,
//      opacity: 0.7,
//      width: 0
// }, {
//      delay: 0.9,
//      opacity: 1,
//      width: 296
// });

gsap.fromTo(".hero .de-2", {
     duration: 0.5,
     opacity: 0.7,
     width: 0
}, {
     delay: 0.7,
     opacity: 1,
     width: 197
});