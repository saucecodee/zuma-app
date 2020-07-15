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

     <header>
          <div class="container">
               <svg width="105" height="20" viewBox="0 0 105 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.0453 19.5455V13.447H10.7787L19.7352 5.41667V0.454546H0.930538V6.55303H9.8482L0 15.0758V19.5455H20.0453Z" fill="#2541B2" />
                    <path d="M23.6436 11.6288C23.6436 14.3561 24.6129 16.4394 26.5515 17.8788C28.4902 19.2803 30.8553 20 33.6857 20C36.5161 20 38.8812 19.2803 40.8198 17.8788C42.7584 16.4773 43.7277 14.3939 43.7277 11.6288V0.454546H36.4773V10.9848C36.4773 12.6894 35.5467 13.5606 33.6857 13.5606C31.8246 13.5606 30.8941 12.6894 30.8941 10.9848V0.454546H23.6436V11.6288Z" fill="#2541B2" />
                    <path d="M55.4588 19.5455V9.20455C55.4588 7.38636 56.5444 6.13636 57.9403 6.13636C59.3361 6.13636 60.1891 7.27273 60.1891 9.09091V19.5455H67.362V9.20455C67.362 7.38636 68.4088 6.13636 69.8434 6.13636C71.2392 6.13636 72.0534 7.27273 72.0534 9.09091V19.5455H79.2263V8.25758C79.2263 2.99242 76.7837 0 72.2473 0C69.2618 0 67.0518 0.984849 65.6947 2.95455C64.7642 0.984849 62.9807 0 60.3441 0C58.1341 0 56.5057 0.94697 55.4588 2.80303V0.454546H48.2859V19.5455H55.4588Z" fill="#2541B2" />
                    <path d="M82.9385 10C82.9385 12.7273 83.869 15.0379 85.6913 16.9318C87.5136 18.8258 89.84 19.7727 92.5928 19.7727C95.4232 19.7727 97.2067 19.0152 97.9822 17.5379V19.5455H105V0.454546H97.9822V2.46212C97.2067 0.984849 95.4232 0.227272 92.5928 0.227272C89.84 0.227272 87.5136 1.17424 85.6913 3.10606C83.869 5 82.9385 7.31061 82.9385 10ZM90.0338 10C90.0338 8.0303 91.8949 6.36364 94.1049 6.36364C96.315 6.36364 98.176 8.0303 98.176 10C98.176 12.0076 96.315 13.6364 94.1049 13.6364C91.8949 13.6364 90.0338 12.0076 90.0338 10Z" fill="#2541B2" />
               </svg>

               <button class="but-2">Sign me up</button>
          </div>
     </header>


     <!--==================== Hero ==================== -->

     <div class="hero">
          <div class="container">
               <h2 class="s-title">Tired of forgetting <br> stuff?</h2>

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

                    <img class="z-img" src="./assets/screens/test.png" alt="">

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

                    <img class="z-img" src="./assets/screens/test.png" alt="">

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

                    <img class="z-img" src="./assets/screens/test.png" alt="">

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

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M23 2.9998C22.0424 3.67528 20.9821 4.19191 19.86 4.5298C19.2577 3.83731 18.4573 3.34649 17.567 3.12373C16.6767 2.90096 15.7395 2.957 14.8821 3.28426C14.0247 3.61151 13.2884 4.1942 12.773 4.95352C12.2575 5.71283 11.9877 6.61214 12 7.5298V8.5298C10.2426 8.57537 8.50127 8.18561 6.93101 7.39525C5.36074 6.60488 4.01032 5.43844 3 3.9998C3 3.9998 -1 12.9998 8 16.9998C5.94053 18.3978 3.48716 19.0987 1 18.9998C10 23.9998 21 18.9998 21 7.4998C20.9991 7.22126 20.9723 6.9434 20.92 6.6698C21.9406 5.6633 22.6608 4.39251 23 2.9998Z" fill="#2541B2" />
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

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M23 2.9998C22.0424 3.67528 20.9821 4.19191 19.86 4.5298C19.2577 3.83731 18.4573 3.34649 17.567 3.12373C16.6767 2.90096 15.7395 2.957 14.8821 3.28426C14.0247 3.61151 13.2884 4.1942 12.773 4.95352C12.2575 5.71283 11.9877 6.61214 12 7.5298V8.5298C10.2426 8.57537 8.50127 8.18561 6.93101 7.39525C5.36074 6.60488 4.01032 5.43844 3 3.9998C3 3.9998 -1 12.9998 8 16.9998C5.94053 18.3978 3.48716 19.0987 1 18.9998C10 23.9998 21 18.9998 21 7.4998C20.9991 7.22126 20.9723 6.9434 20.92 6.6698C21.9406 5.6633 22.6608 4.39251 23 2.9998Z" fill="#2541B2" />
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

                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M23 2.9998C22.0424 3.67528 20.9821 4.19191 19.86 4.5298C19.2577 3.83731 18.4573 3.34649 17.567 3.12373C16.6767 2.90096 15.7395 2.957 14.8821 3.28426C14.0247 3.61151 13.2884 4.1942 12.773 4.95352C12.2575 5.71283 11.9877 6.61214 12 7.5298V8.5298C10.2426 8.57537 8.50127 8.18561 6.93101 7.39525C5.36074 6.60488 4.01032 5.43844 3 3.9998C3 3.9998 -1 12.9998 8 16.9998C5.94053 18.3978 3.48716 19.0987 1 18.9998C10 23.9998 21 18.9998 21 7.4998C20.9991 7.22126 20.9723 6.9434 20.92 6.6698C21.9406 5.6633 22.6608 4.39251 23 2.9998Z" fill="#2541B2" />
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

     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script> -->
     <script src="./js/gsap.js"></script>
     <script src="./js/anime.js"></script>
</body>

</html>