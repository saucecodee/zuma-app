<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./styles/sauce.css">
     <title>Introducing ZUMA</title>
</head>

<body>
     <!--==================== Toast ==================== -->

     <?php if (isset($_SESSION['message'])) : ?>
          <div class="toast">
               <?php
               echo $_SESSION['message'];
               unset($_SESSION['message']);
               ?>
          </div>
     <?php endif ?>


     <!--==================== header ==================== -->

     <div class="h-bg">
          <div class="b-1"></div>
          <div class="b-2"></div>
          <div class="b-3"></div>
          <div class="b-4"></div>
          <div class="b-5"></div>
     </div>


     <!--==================== header ==================== -->

     <header>
          <div class="container">
               <svg width="129" height="40" viewBox="0 0 129 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.0453 29.5455V23.447H22.7787L31.7352 15.4167V10.4545H12.9305V16.553H21.8482L12 25.0758V29.5455H32.0453Z"
                         fill="white" />
                    <path d="M35.6436 21.6288C35.6436 24.3561 36.6129 26.4394 38.5515 27.8788C40.4902 29.2803 42.8553 30 45.6857 30C48.5161 30 50.8812 29.2803 52.8198 27.8788C54.7584 26.4773 55.7277 24.3939 55.7277 21.6288V10.4545H48.4773V20.9848C48.4773 22.6894 47.5467 23.5606 45.6857 23.5606C43.8246 23.5606 42.8941 22.6894 42.8941 20.9848V10.4545H35.6436V21.6288Z"
                         fill="white" />
                    <path d="M67.4588 29.5455V19.2045C67.4588 17.3864 68.5444 16.1364 69.9403 16.1364C71.3361 16.1364 72.1891 17.2727 72.1891 19.0909V29.5455H79.362V19.2045C79.362 17.3864 80.4088 16.1364 81.8434 16.1364C83.2392 16.1364 84.0534 17.2727 84.0534 19.0909V29.5455H91.2263V18.2576C91.2263 12.9924 88.7837 10 84.2473 10C81.2618 10 79.0518 10.9848 77.6947 12.9545C76.7642 10.9848 74.9807 10 72.3441 10C70.1341 10 68.5057 10.947 67.4588 12.803V10.4545H60.2859V29.5455H67.4588Z"
                         fill="white" />
                    <path d="M94.9385 20C94.9385 22.7273 95.869 25.0379 97.6913 26.9318C99.5136 28.8258 101.84 29.7727 104.593 29.7727C107.423 29.7727 109.207 29.0152 109.982 27.5379V29.5455H117V10.4545H109.982V12.4621C109.207 10.9848 107.423 10.2273 104.593 10.2273C101.84 10.2273 99.5136 11.1742 97.6913 13.1061C95.869 15 94.9385 17.3106 94.9385 20ZM102.034 20C102.034 18.0303 103.895 16.3636 106.105 16.3636C108.315 16.3636 110.176 18.0303 110.176 20C110.176 22.0076 108.315 23.6364 106.105 23.6364C103.895 23.6364 102.034 22.0076 102.034 20Z"
                         fill="white" />
               </svg>


               <button class="but-2">Sign me up</button>
          </div>
     </header>


     <!--==================== Hero ==================== -->

     <div class="hero">
          <div class="container">
               <h2 class="s-title">Tired of forgetting stuff?</h2>

               <div class="hero-phones-container">
                    <div class="hero-phones">
                         <img class="img-1" src="./assets/screens/hero-phone-1.png" alt="">
                         <img class="img-2" src="./assets/screens/hero-phone-2.png" alt="">
                    </div>
               </div>

               <div class="grey-box">
                    <div class="content">
                         <p>
                              We have built an AI assistant to keep track of your activities, no more time wasted trying
                              to
                              remember if you watered the plants, just ask zuma.
                         </p>

                         <p>Be the first to know once zuma is out</p>

                         <form action="form.php" method="post">
                              <input type="email" name="email" placeholder="Enter your e-mail address">
                              <button class="but-1" name="submit" type="submit">Sign me up</button>
                         </form>

                         <p class="info">We promise not to spam you ☺</p>
                    </div>


                    <div class="b-deco de-1"></div>
                    <div class="b-deco de-2"></div>

                    <div class="b-patt patt-1"></div>
                    <div class="b-patt patt-2"></div>
               </div>
          </div>
     </div>


     <!--==================== What is Zuma ==================== -->

     <div class="w-i-zuma">
          <div class="container">
               <h1 class="s-title">what is <br> zuma?</h1>

               <div class="grey-box">
                    <p><b>zuma</b> is an assistant that helps you organize your stuff.</p>

                    <p>
                         <b>zuma</b> uses real time tracking, your IOT ecosystem and a sophisticated AI to deliver
                         personalized solutions
                    </p>

                    <img class="z-img" src="./assets/others/zuma-1.png" alt="">

                    <div class="b-deco deco-1"></div>
                    <div class="b-patt patt-1"></div>
               </div>
          </div>
     </div>


     <!--==================== What Zuma can do ==================== -->

     <div class="w-c-z-do">
          <div class="container">
               <h1 class="s-title">what can <br> zuma do?</h1>

               <div class="grey-box">
                    <p>
                         Leveraging the power of AI and the extensive network of the internet of things, <b>zuma</b> can
                         do
                         impressive things. <br> Scroll on to find out more
                    </p>

                    <div class="feat-container">
                         <div class="row">
                              <img class="feat-img img-1" src="./assets/others/records.png" alt="">
                              <img class="feat-img img-2" src="./assets/others/schedule.png" alt="">
                         </div>
                         <div class="row">
                              <img class="feat-img img-3" src="./assets/others/timeline.png" alt="">
                              <img class="feat-img img-4" src="./assets/others/reminder.png" alt="">
                         </div>
                         <img class="feat-img img-5" src="./assets/others/ai.png" alt="">
                    </div>

                    <img class="z-img" src="./assets/others/zuma-2.png" alt="">
                    <div class="b-patt patt-1"></div>
               </div>
          </div>
     </div>


     <!--==================== Features Screens ==================== -->

     <div class="f-s-section">
          <div class="container">
               <h1 class="s-title">Natural responses, <br>Personalized AI.</h1>

               <div class="grey-box">
                    <p>
                         <b>zuma</b> responds to your commands in an easy to understand, natural tone, an AI that adapts
                         to your lifestyle makes sure that your experience is unique 👌.
                    </p>

                    <img class="z-img" src="./assets/screens/feat-phone-1.png" alt="">

                    <div class="b-deco deco-1"></div>
                    <div class="b-patt patt-1"></div>
               </div>
          </div>

          <div class="container alt">
               <h1 class="s-title">Remote Voice activation,<br>Cross platform compatible.</h1>

               <div class="grey-box">
                    <p>
                         <b>zuma</b> is always listening for you command, and is accessible from any connected devices
                         with, microphones, which would it be; from your phone or from your tesla 😉.
                    </p>

                    <img class="z-img" src="./assets/screens/feat-phone-2.png" alt="">

                    <div class="b-deco deco-1"></div>
                    <div class="b-patt patt-1"></div>
               </div>
          </div>

          <div class="container">
               <h1 class="s-title">Intuitive Reminders,<br>Recall events from your day.</h1>

               <div class="grey-box">
                    <p>
                         <b>zuma</b> let’s set reminders with real world triggers, you don’t have worry about timing
                         your reminders, trying to remember something from earlier? zuma has got you.
                    </p>

                    <img class="z-img" src="./assets/screens/feat-phone-3.png" alt="">

                    <div class="b-deco deco-1"></div>
                    <div class="b-patt patt-1"></div>
               </div>
          </div>
     </div>


     <!--==================== Gallery ==================== -->


     <!--==================== Hype  ==================== -->

     <div class="t-hype">
          <div class="container">
               <h2>Twitter Hype 😄</h2>

               <div class="cards-row">
                    <div class="card">
                         <div class="header">
                              <div class="user-d">
                                   <img src="./assets/socials/p1.png" alt="">

                                   <div class="user-ns">
                                        <div class="user-ud">Techsavvy</div>
                                        <span class="user-ua">@tech_bro</span>
                                   </div>
                              </div>

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path d="M23 2.9998C22.0424 3.67528 20.9821 4.19191 19.86 4.5298C19.2577 3.83731 18.4573 3.34649 17.567 3.12373C16.6767 2.90096 15.7395 2.957 14.8821 3.28426C14.0247 3.61151 13.2884 4.1942 12.773 4.95352C12.2575 5.71283 11.9877 6.61214 12 7.5298V8.5298C10.2426 8.57537 8.50127 8.18561 6.93101 7.39525C5.36074 6.60488 4.01032 5.43844 3 3.9998C3 3.9998 -1 12.9998 8 16.9998C5.94053 18.3978 3.48716 19.0987 1 18.9998C10 23.9998 21 18.9998 21 7.4998C20.9991 7.22126 20.9723 6.9434 20.92 6.6698C21.9406 5.6633 22.6608 4.39251 23 2.9998Z"
                                        fill="#2541B2" />
                              </svg>

                         </div>

                         <p>
                              Can’t wait for SauceLabs to release the app, currently in the beta program and it’s so
                              amazing 😳, most excited to the cross compatibility. Awesome stuff #thefutureishere
                         </p>
                    </div>

                    <div class="card">
                         <div class="header">
                              <div class="user-d">
                                   <img src="./assets/socials/p2.png" alt="">

                                   <div class="user-ns">
                                        <div class="user-ud">Jane Doe Phd</div>
                                        <span class="user-ua">@JaneDoe_Phd</span>
                                   </div>
                              </div>

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path d="M23 2.9998C22.0424 3.67528 20.9821 4.19191 19.86 4.5298C19.2577 3.83731 18.4573 3.34649 17.567 3.12373C16.6767 2.90096 15.7395 2.957 14.8821 3.28426C14.0247 3.61151 13.2884 4.1942 12.773 4.95352C12.2575 5.71283 11.9877 6.61214 12 7.5298V8.5298C10.2426 8.57537 8.50127 8.18561 6.93101 7.39525C5.36074 6.60488 4.01032 5.43844 3 3.9998C3 3.9998 -1 12.9998 8 16.9998C5.94053 18.3978 3.48716 19.0987 1 18.9998C10 23.9998 21 18.9998 21 7.4998C20.9991 7.22126 20.9723 6.9434 20.92 6.6698C21.9406 5.6633 22.6608 4.39251 23 2.9998Z"
                                        fill="#2541B2" />
                              </svg>

                         </div>

                         <p>
                              AI has really evolved in the past years, and products like zuma have shown that it just
                              keeps getting better, my favourite feature is the subtle record keeping, really excited
                              for this
                         </p>
                    </div>

                    <div class="card">
                         <div class="header">
                              <div class="user-d">
                                   <img src="./assets/socials/p3.png" alt="">

                                   <div class="user-ns">
                                        <div class="user-ud">Wonma Doe</div>
                                        <span class="user-ua">@wonma.doe.e</span>
                                   </div>
                              </div>

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                   xmlns="http://www.w3.org/2000/svg">
                                   <path d="M23 2.9998C22.0424 3.67528 20.9821 4.19191 19.86 4.5298C19.2577 3.83731 18.4573 3.34649 17.567 3.12373C16.6767 2.90096 15.7395 2.957 14.8821 3.28426C14.0247 3.61151 13.2884 4.1942 12.773 4.95352C12.2575 5.71283 11.9877 6.61214 12 7.5298V8.5298C10.2426 8.57537 8.50127 8.18561 6.93101 7.39525C5.36074 6.60488 4.01032 5.43844 3 3.9998C3 3.9998 -1 12.9998 8 16.9998C5.94053 18.3978 3.48716 19.0987 1 18.9998C10 23.9998 21 18.9998 21 7.4998C20.9991 7.22126 20.9723 6.9434 20.92 6.6698C21.9406 5.6633 22.6608 4.39251 23 2.9998Z"
                                        fill="#2541B2" />
                              </svg>

                         </div>

                         <p>
                              zuma should release already 😍😍😍, I love the idea and i’m really excited for the
                              reminders, imagine not having to set times, heard it also has support for 100+ languages
                              so coool.
                         </p>
                    </div>
               </div>
          </div>
     </div>


     <!--==================== Signup  ==================== -->

     <div class="s-m-up">
          <div class="container">
               <div>
                    <h2>We’ll inform you <br>once zuma is out</h2>

                    <p>Join our mailing list to get updates on zuma, we promise not to spam you</p>

                    <form action="form.php" method="post">
                         <input type="email" name="email" placeholder="Enter your e-mail address">
                         <button class="but-0" name="submit" type="submit">Sign me up</button>
                    </form>
               </div>

               <img class="p-img" src="./assets/screens/inform-phone.png" alt="">
               <div class="b-patt patt-1"></div>
          </div>
     </div>


     <!--==================== Footer  ==================== -->

     <footer>
          <div class="container">
               <div>Designed with ❤ by DESiGN_jUNKiE</div>
               <div>Coded with 🍅 by Saucecode</div>
          </div>
     </footer>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
     <script src="./js/global.js"></script>
     <script src="./js/anime.js"></script>
     <script src="./js/page.js"></script>
</body>

</html>