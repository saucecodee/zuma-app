gsap.registerPlugin(ScrollTrigger);

function intro() {
     const introTl = gsap.timeline({
          defaults: {
               duration: 2.5
          },
     })

     introTl.add('start')
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
          .from("header", {
               opacity: 0,
               // scale: 0.7,
               y: 80,
               duration: 1,
               ease: "back.inOut(2)",
          }, "start+=0.7")
          .from(".hero .grey-box", {
               opacity: 0,
               scale: 0.7,
               duration: 1,
               ease: "back.inOut(2)",
               onComplete: () => $$(".grey-box").forEach(e => e.style.transform = "none")
          }, "start+=0.5")
          .from(".hero .grey-box p", {
               duration: 0.5,
               opacity: 0,
               y: 36,
          }, "start+=1.2")
          .from(".hero .s-title", {
               duration: 0.5,
               opacity: 0,
               x: -100
          }, "start+=1.3")
          .from(".hero-phones .img-1", {
               duration: 1,
               opacity: 0,
               ease: "back.inOut(2)",
               x: 100
          }, "start+=1.1")
          .from(".hero-phones .img-2", {
               duration: 1,
               opacity: 0,
               ease: "back.inOut(2)",
               x: 100
          }, "start+=1.4")
          .from(".hero .de-1", {
               duration: 0.6,
               opacity: 0.7,
               width: 0
          }, "start+=1.9")
          .from(".hero .de-2", {
               duration: 0.5,
               opacity: 0.7,
               width: 0,
          }, "start+=0.9");

     return introTl
}

function section(selector, inverse = false) {
     const sectTl = gsap.timeline({
          defaults: {
               duration: 2.5
          },
          scrollTrigger: {
               trigger: selector,
               start: "top center",
               end: "bottom center",
               toggleActions: "restart none resume reset"
          },
     })

     sectTl.add("start")
          .from(`${selector} .grey-box`, {
               opacity: 0,
               scale: 0.7,
               duration: 0.7,
               ease: "back.inOut(2)"
          }, "start")
          .from(`${selector} .grey-box p`, {
               duration: 0.5,
               opacity: 0,
               y: 36,
          }, "start+=0.5")
          .from(`${selector} .s-title`, {
               duration: 0.5,
               opacity: 0,
               x: inverse ? 100 : -100
          }, "start+=.5")
          .from(`${selector} .z-img`, {
               duration: 1,
               opacity: 0,
               ease: "back.inOut(2)",
               x: inverse ? -100 : 100
          }, "start+=0.5")
          .from(`${selector} .deco-1`, {
               duration: 0.6,
               opacity: 0.7,
               height: 0
          }, "start+=1")




     return sectTl
}

function socials() {
     const socialsTl = gsap.timeline({
          defaults: {
               duration: 2.5
          },
          scrollTrigger: {
               trigger: ".t-hype",
               start: "top center",
               end: "bottom center",
               toggleActions: "restart none resume reset"
          },
     })

     socialsTl.add("start")
          .from(".t-hype h2", {
               duration: 0.5,
               opacity: 0,
               x: -100,
          }, "start")
          .from(".t-hype .card", {
               duration: 0.5,
               opacity: 0,
               scale: 0.5,
               y: 100,
               stagger: 0.2,
          }, "start+=0.3")



     return socialsTl
}


function screens() {
     gsap.from(".gallery .s-title", {
          scrollTrigger: {
               trigger: ".gallery",
               start: "top top+=500",
               end: "bottom bottom-=100",
               toggleActions: "restart none resume reset"
          },
          duration: 0.5,
          opacity: 0,
          x: -100,
     }, "start")

     gsap.from(".screens img", {
          scrollTrigger: {
               trigger: ".screens",
               start: "top top+=500",
               end: "bottom bottom-=100",
               toggleActions: "restart none resume reset"
          },
          y: 300,
          duration: 1,
          opacity: 0,
          stagger: 0.2,
     })


     return gsap
}

function cta() {
     const ctaTl = gsap.timeline({
          defaults: {
               duration: 2.5
          },
          scrollTrigger: {
               trigger: ".s-m-up",
               start: "top center",
               end: "bottom center",
               toggleActions: "restart none resume reset"
          },
     })

     ctaTl.add("start")
          .from(".s-m-up .container", {
               opacity: 0,
               scale: 0.7,
               duration: 0.7,
               ease: "back.inOut(2)"
          }, "start")
          .from(".s-m-up h2", {
               duration: 0.5,
               opacity: 0,
               x: -100
          }, "start+=0.5")
          .from(".s-m-up p", {
               duration: 0.5,
               opacity: 0,
               y: 36,
          }, "start+=0.7")
          .from(".s-m-up .p-img", {
               duration: 0.3,
               opacity: 0,
               y: 30
          }, "start+=1")




     return ctaTl
}

function init() {

     intro()

     section(".w-c-z-do")
     section(".w-i-zuma")

     gsap.from(".feat-img", {
          scrollTrigger: {
               trigger: ".w-c-z-do",
               start: "bottom bottom",
               end: "bottom center-=100",
               toggleActions: "restart none resume reset"
          },
          delay: 7,
          y: 60,
          duration: 0.7,
          opacity: 0,
          stagger: 0.3,
     })

     section(".f1")
     section(".f2", true)
     section(".f3")

     screens()

     socials()

     cta()
}

window.onload = () => {
     setTimeout(() => {
          $("#loader").style.display = "none";
          $("#site-wrapper").style.display = "block";
          init()
     }, 3000);
}