
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
      <meta name="robots" content="noindex, nofollow" />