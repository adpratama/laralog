<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>LaraLog - Home</title>

      @vite(['resources/css/app.css', 'resources/js/app.js', 'public/landing-page/css/style.min.css'])
      <meta
         name="description"
         content="Free Bootstrap Theme by uicookies.com"
      />
      <meta
         name="keywords"
         content="free website templates, free bootstrap themes, free template, free bootstrap, free website template"
      />
      <link rel="icon" type="image/x-icon" href="/img/logo-ss.png" />
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
      <style id="" media="all">
         /* vietnamese */
         @font-face {
            font-family: "Inconsolata";
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Inconsolata-Light.ttf') }}");
            unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169,
               U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
            font-family: "Inconsolata";
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Inconsolata-Light.ttf') }}");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
               U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
            font-family: "Inconsolata";
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Inconsolata-Light.ttf') }}");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
               U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191,
               U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Light.ttf') }}");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
               U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Light.ttf') }}");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* hebrew */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Light.ttf') }}");
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* latin-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Light.ttf') }}");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
               U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Light.ttf') }}");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
               U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191,
               U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Regular.ttf') }}");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
               U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Regular.ttf') }}");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* hebrew */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Regular.ttf') }}");
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* latin-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Regular.ttf') }}");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
               U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Regular.ttf') }}");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
               U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191,
               U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Bold.ttf') }}");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
               U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Bold.ttf') }}");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* hebrew */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Bold.ttf') }}");
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* latin-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Bold.ttf') }}");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
               U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Bold.ttf') }}");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
               U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191,
               U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Black.ttf') }}");
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF,
               U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Black.ttf') }}");
            unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* hebrew */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Black.ttf') }}");
            unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* latin-ext */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Black.ttf') }}");
            unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
               U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
            font-family: "Rubik";
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url("{{ asset('landing-page/css/fonts/Rubik-Black.ttf') }}");
            unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
               U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191,
               U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
      </style>
      <style>
         /* width */
         ::-webkit-scrollbar {
            opacity: 0;
            width: 5px;
         }

         /* Track */
         /* ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
         } */

         /* Handle */
         ::-webkit-scrollbar-thumb {
            background: #fe5000;
            border-radius: 1.5px;
         }

         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
            overflow-y: scroll;
            opacity: 1;
            background: #101820;
         }
      </style>
      <link rel="stylesheet" href="{{ asset('landing-page/css/styles-merged.css') }}" />
      <link rel="stylesheet" href="{{ asset('landing-page/css/style.min.css') }}" />
      <!-- <link rel="stylesheet" href="landing-page/css/custom.css" /> -->
      <link rel="stylesheet" href="{{ asset('landing-page/css/font-awesome.css') }}" />
      <link rel="stylesheet" href="{{ asset('landing-page/css/font-awesome.min.css') }}" />
      <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
      <!--[if lt IE 9]>
         <script src="js/vendor/html5shiv.min.js"></script>
         <script src="js/vendor/respond.min.js"></script>
      <![endif]-->
      <meta name="robots" content="noindex, nofollow" />
      <!-- <script nonce="c2c651d7-943f-4847-a862-df8e32edbfc9">
         (function (w, d) {
            !(function (eK, eL, eM, eN) {
               eK.zarazData = eK.zarazData || {};
               eK.zarazData.executed = [];
               eK.zaraz = { deferred: [], listeners: [] };
               eK.zaraz.q = [];
               eK.zaraz._f = function (eO) {
                  return function () {
                     var eP = Array.prototype.slice.call(arguments);
                     eK.zaraz.q.push({ m: eO, a: eP });
                  };
               };
               for (const eQ of ["track", "set", "debug"])
                  eK.zaraz[eQ] = eK.zaraz._f(eQ);
               eK.zaraz.init = () => {
                  var eR = eL.getElementsByTagName(eN)[0],
                     eS = eL.createElement(eN),
                     eT = eL.getElementsByTagName("title")[0];
                  eT &&
                     (eK.zarazData.t =
                        eL.getElementsByTagName("title")[0].text);
                  eK.zarazData.x = Math.random();
                  eK.zarazData.w = eK.screen.width;
                  eK.zarazData.h = eK.screen.height;
                  eK.zarazData.j = eK.innerHeight;
                  eK.zarazData.e = eK.innerWidth;
                  eK.zarazData.l = eK.location.href;
                  eK.zarazData.r = eL.referrer;
                  eK.zarazData.k = eK.screen.colorDepth;
                  eK.zarazData.n = eL.characterSet;
                  eK.zarazData.o = new Date().getTimezoneOffset();
                  if (eK.dataLayer)
                     for (const eX of Object.entries(
                        Object.entries(dataLayer).reduce((eY, eZ) => ({
                           ...eY[1],
                           ...eZ[1],
                        }))
                     ))
                        zaraz.set(eX[0], eX[1], { scope: "page" });
                  eK.zarazData.q = [];
                  for (; eK.zaraz.q.length; ) {
                     const e_ = eK.zaraz.q.shift();
                     eK.zarazData.q.push(e_);
                  }
                  eS.defer = !0;
                  for (const fa of [localStorage, sessionStorage])
                     Object.keys(fa || {})
                        .filter((fc) => fc.startsWith("_zaraz_"))
                        .forEach((fb) => {
                           try {
                              eK.zarazData["z_" + fb.slice(7)] = JSON.parse(
                                 fa.getItem(fb)
                              );
                           } catch {
                              eK.zarazData["z_" + fb.slice(7)] = fa.getItem(fb);
                           }
                        });
                  eS.referrerPolicy = "origin";
                  eS.src =
                     "/cdn-cgi/zaraz/s.js?z=" +
                     btoa(encodeURIComponent(JSON.stringify(eK.zarazData)));
                  eR.parentNode.insertBefore(eS, eR);
               };
               ["complete", "interactive"].includes(eL.readyState)
                  ? zaraz.init()
                  : eK.addEventListener("DOMContentLoaded", zaraz.init);
            })(w, d, 0, "script");
         })(window, document);
      </script> -->
   </head>
   <body>
      <header role="banner" class="css-header">
         @include('landing-page.includes.header')
      </header>

      <section
         class="css-intro"
         style="background-image: url(landing-page/img/background1.jpg)"
         data-stellar-background-ratio="0.05"
      >
         @yield('content')
         <div class="container">
            <div class="row">
               <div class="col-md-7 col-xs-2 col-sm-2 css-intro-text">
                  <h1 class="css-animate" data-animate-effect="fadeIn">
                     <span>Lara</span> Logistics
                  </h1>
                  <div
                     class="css-subtitle css-animate"
                     data-animate-effect="fadeIn"
                  >
                     <h2>Delivering your goods</h2>
                  </div>
               </div>
               <div class="col-md-5 col-xs-10 col-sm-10 css-image">
                  <!-- <img
                     src="img/sobat_selamat.png"
                     alt="Girl in a jacket"
                     width="500"
                     height="600"
                  /> -->
               </div>
            </div>
         </div>
         <!-- <span class="css-animate"
            ><a class="css-scroll-down js-next" href="#next-section"
               >Scroll down
               <iconify-icon
                  icon="ic:baseline-arrow-downward"
               ></iconify-icon></a
         ></span> -->
      </section>

      <main>
         <div class="" id="about"></div>
         <section class="css-section">
            <div class="container">
               <div class="row css-gutter60 mb50">
                  <div class="col-md-6">
                     <figure>
                        <img
                           src="{{ asset('landing-page/img/logo-laralog.png') }}"
                           alt="Free Bootstrap Template by uicookies.com"
                           class="img-responsive"
                        />
                     </figure>
                  </div>
                  <div class="col-md-6">
                     <h2 class="css-heading">About Us</h2>
                     <p>
                        We are a company engaged in the field of cargo shipping.
                     </p>
                     <p>
                        Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts. Separated they live in Bookmarksgrove right at
                        the coast of the Semantics, a large language ocean.
                     </p>
                     <p>
                        <a href="#" class="btn btn-primary"
                           >Read more about us</a
                        >
                     </p>
                  </div>
               </div>
               <!-- <div class="row css-gutter60">
                  <div class="col-md-4 mb30">
                     <h4 class="mb30">My Mission</h4>
                     <p>
                        &ldquo;Far far away, behind the word mountains, far from
                        the countries Vokalia and Consonantia, there live the
                        blind texts.&rdquo;
                     </p>
                  </div>
                  <div class="col-md-4 mb30">
                     <h4 class="mb30">Recently Events</h4>
                     <ul class="css-blog-list">
                        <li>
                           <a href="#">
                              <figure class="css-image">
                                 <img
                                    src="img/img_4.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive"
                                 />
                              </figure>
                              <div class="css-text">
                                 <h4>Initial into the belt and made herself</h4>
                                 <span class="meta">September, 14 2017</span>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <figure class="css-image">
                                 <img
                                    src="img/img_5.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive"
                                 />
                              </figure>
                              <div class="css-text">
                                 <h4>Far far away behind the word mountains</h4>
                                 <span class="meta">September, 14 2017</span>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <figure class="css-image">
                                 <img
                                    src="img/img_6.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive"
                                 />
                              </figure>
                              <div class="css-text">
                                 <h4>
                                    Bookmarksgrove right at the coast of the
                                    Semantics
                                 </h4>
                                 <span class="meta">September, 14 2017</span>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-4 mb30">
                     <h4 class="mb30">My Vision</h4>
                     <p>
                        &ldquo;The Big Oxmox advised her not to do so, because
                        there were thousands of bad Commas, wild Question Marks
                        and devious Semikoli, but the Little Blind Text didn’t
                        listen. She packed her seven versalia, put her initial
                        into the belt and made herself on the way.&rdquo;
                     </p>
                  </div>
               </div> -->
            </div>
         </section>
         <div class="" id="programs"></div>
         <section class="css-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 css-relative">
                     <h2 class="css-heading mt0 mb50">Our Services</h2>
                     <ul class="css-owl-navigation absolute right">
                        <li>
                           <a href="#" class="css-owl-prev"
                              ><i class="icon-chevron-left"></i
                           ></a>
                        </li>
                        <li>
                           <a href="#" class="css-owl-next"
                              ><i class="icon-chevron-right"></i
                           ></a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12 css-relative">
                     <div class="owl-carousel owl-carousel-carousel">
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="{{ asset('landing-page/img/img_1.jpg') }}"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>Export</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="{{ asset('landing-page/img/img_2.jpg') }}"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>Import</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="{{ asset('landing-page/img/img_3.jpg') }}"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>Transhipment</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="img/img_4.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>Dumbbell Overhead Press</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="img/img_5.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>Bulgarian Split Squat</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="img/img_6.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>DIP</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="css-program">
                              <a href="#"
                                 ><img
                                    src="img/img_7.jpg"
                                    alt="Free Bootstrap Template by uicookies.com"
                                    class="img-responsive img-rounded"
                              /></a>
                              <h3>Russian Twist</h3>
                              <p>Sets: 3, Reps: 8-10, Rest: 30 sec.</p>
                              <p>
                                 She packed her seven versalia, put her initial
                                 into the belt and made herself on the way.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <div class="" id="contact"></div>
      <footer class="css-footer">
         <div class="css-backtotop">
            <a href="#" class="js-backtotop"
               ><iconify-icon
                  icon="material-symbols:keyboard-arrow-up-rounded"
               ></iconify-icon
            ></a>
         </div>
         @include('landing-page.includes.footer')
      </footer>
      @stack('before-script')
      @include('landing-page/includes.script')
      @stack('after-script')
      <script
         data-cfasync="false"
         src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
      ></script>
      <script src="{{ asset('landing-page/js/scripts.min.js') }}"></script>
      <script src="{{ asset('landing-page/js/main.min.js') }}"></script>
      <!-- <script src="js/custom.js"></script> -->
      <script
         defer
         src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
         integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
         data-cf-beacon='{"rayId":"787285d63860a024","token":"1aea4905526a46c1a4fc9bc1d0e89a42","version":"2022.11.3","si":100}'
         crossorigin="anonymous"
      ></script>
   </body>
</html>
