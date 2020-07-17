gsap.registerPlugin(ScrollTrigger);

function init() {
     gsap
          .timeline({
               defaults: {
                    duration: 2.5
               }
          })
          .add('start')
          .to('.h-bg .b-3', {
               yPercent: 300,
               scale: 1,
               ease: "bounce"
          }, 'start')
          .to('.h-bg .b-4', {
               yPercent: -300,
               scale: 1,
               ease: "bounce"
          }, 'start+=0.2')
          .to('.h-bg .b-2', {
               yPercent: -300,
               scale: 1,
               ease: "bounce"
          }, 'start+=0.2')
          .to('.h-bg .b-1', {
               yPercent: 300,
               scale: 1,
               ease: "bounce"
          }, 'start+=0.3')
          .to('.h-bg .b-5', {
               yPercent: 300,
               scale: 1,
               ease: "bounce"
          }, 'start+=0.3')



     gsap.fromTo("header", {
          opacity: 0,
          scale: 0.7
     }, {
          duration: 1,
          delay: 0.4,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
          onComplete: () => $$(".grey-box").forEach(e => e.style.transform = "none")
     });

     gsap.fromTo(".hero .grey-box", {
          opacity: 0,
          scale: 0.7
     }, {
          duration: 1,
          delay: 0.4,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
          onComplete: () => $$(".grey-box").forEach(e => e.style.transform = "none")
     });


     gsap.fromTo(".grey-box p", {
          duration: 1,
          opacity: 0,
          y: 18
     }, {
          delay: 1.2,
          opacity: 1,
          y: 0
     });



     gsap.fromTo(".hero .s-title", {
          duration: 1,
          opacity: 0,
          x: -50
     }, {
          delay: 1.3,
          opacity: 1,
          x: 0
     });


     gsap.fromTo(".hero-phones .img-1", {
          duration: 1,
          opacity: 0,
          x: 50
     }, {
          delay: 1.1,
          opacity: 1,
          x: 0,
          ease: "back.inOut(2)"
     });

     gsap.fromTo(".hero-phones .img-2", {
          duration: 1,
          opacity: 0,
          x: 50
     }, {
          delay: 1.4,
          opacity: 1,
          x: 0,
          ease: "back.inOut(2)"
     });

     gsap.fromTo(".hero .de-1", {
          duration: 0.6,
          opacity: 0.7,
          width: 0
     }, {
          delay: 1.5,
          opacity: 1,
          width: 296
     });

     gsap.fromTo(".hero .de-2", {
          duration: 0.5,
          opacity: 0.7,
          width: 0
     }, {
          delay: 0.9,
          opacity: 1,
          width: 197
     });




     gsap.fromTo(".w-i-zuma", {
          opacity: 0,
          scale: 0.7
     }, {
          scrollTrigger: {
               trigger: ".w-i-zuma",
               start: "top bottom-=400",
               end: "bottom bottom-=400",
               toggleActions: "restart none resume reset"
          },
          duration: 1,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
     })

     gsap.fromTo(".w-c-z-do", {
          opacity: 0,
          scale: 0.7
     }, {
          scrollTrigger: {
               trigger: ".w-c-z-do",
               start: "top bottom-=400",
               end: "bottom bottom-=400",
               toggleActions: "restart none resume reset"
          },
          duration: 1,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
     })

     gsap.fromTo(".f1", {
          opacity: 0,
          scale: 0.7
     }, {
          scrollTrigger: {
               trigger: ".f1",
               start: "top bottom-=400",
               end: "bottom bottom-=400",
               toggleActions: "restart none resume reset"
          },
          duration: 1,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
     })

     gsap.fromTo(".f2", {
          opacity: 0,
          scale: 0.7
     }, {
          scrollTrigger: {
               trigger: ".f2",
               start: "top bottom-=400",
               end: "bottom bottom-=400",
               toggleActions: "restart none resume reset"
          },
          duration: 1,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
     })

     gsap.fromTo(".f3", {
          opacity: 0,
          scale: 0.7
     }, {
          scrollTrigger: {
               trigger: ".f3",
               start: "top bottom-=400",
               end: "bottom bottom-=400",
               toggleActions: "restart none resume reset"
          },
          duration: 1,
          opacity: 1,
          scale: 1,
          ease: "back.inOut(2)",
     })


     gsap
          .timeline({
               scrollTrigger: {
                    trigger: ".screens",
                    start: "top bottom-=400",
                    end: "bottom bottom-=400",
                    toggleActions: "restart none resume reset"
               },
               defaults: {
                    duration: 0.5,
                    yoyo: true
               }
          })
          .add('start')
          .from('.s1', {
               y: 100,
               
          }, 'start')
          .from('.s2', {
               y: 100,
               
          }, 'start+=0.2')
          .from('.s3', {
               y: 100,
               
          }, 'start+=0.3')
          .from('.s4', {
               y: 100,
               
          }, 'start+=0.4')
          .from('.s5', {
               y: 100,
               
          }, 'start+=0.5')
          .from('.s6', {
               y: 100,
               
          }, 'start+=0.6')

}



window.addEventListener("load", () => {
     init()
})